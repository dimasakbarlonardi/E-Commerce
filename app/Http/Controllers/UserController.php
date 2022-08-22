<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Pesanan;
use App\Models\PesananDetail;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    public function home()
    {
        // $barang = barang::all();
        return view ('HalamanDepan/home');
    }

    public function produk(Request $request)
    {   
        if ($request->kategori) {
            $produks = Produk::where('kategori', 'LIKE', '%' . $request->kategori . '%')->get();
        } else {
            $produks = Produk::all();
        }
        return view ('HalamanDepan/shop', compact('produks')) ;
    }

    public function about()
    {
        // $barang = barang::all();
        return view ('HalamanDepan/aboutus');
    }

    public function contact()
    {

    return view ('HalamanDepan/contact');
    }

    public function shopdetail(Produk $produks,$produk_id)
    {
        $produks = Produk::find($produk_id);
        return view ('HalamanDepan/shopdetail', compact('produks'));
    }

    // loginn user 
    public function login()
    {
        return view ('Login/front_login');
    }

    public function register()
    {
        return view ('Login/front_register');
    }

    public function cart()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        if(!empty($pesanan)) {
            $pesananDetail = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->get();
        return view ('HalamanDepan/cart',compact('pesanan', 'pesananDetail'));
        }
        return redirect()->route('produks.index');
    }

    public function user()
    {
        $user = User::find(Auth::user()->user_id)->first();
        return view('HalamanDepan/profil', compact('user'));
    }
    
    public function profilupdate(Request $request, $user_id)
    {
        $request->validate([
            'nohp' => 'required|max:13',
            'alamat' => 'required|max:100'
        ], [
            'nohp.required' => 'No Handphone tidak boleh kosong',
            'nohp.max' => 'No Handphone tidak boleh lebih dari 13 angka',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'alamat.max' => 'Alamat tidak boleh lebih dari 100 karakter',
        ]);

        $user = User::find($user_id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'nohp' => $request->nohp,
        ]);
        return redirect()->back()
        ->with('status', 'Profile Berhasil Diperbaharui!');
        $user->save();
    }

    public function riwayat()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', '!=', 0)->get();
        return view('HalamanDepan/riwayatshop', compact('pesanan'));
    }
    public function detail($id)
    {
        $pesanan_konfirmasi = Pesanan::where('id', $id)->where('ongkir', 0)->first();
        if ($pesanan_konfirmasi == null) {
            $pesanan = Pesanan::where('id', $id)->first();
            $PesananDetail = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->get();
            return view('HalamanDepan/riwayatshop', compact('pesanan', 'PesananDetail'));
        } else {
            return view('HalamanDepan/konfirmasi');
        }
    }

    public function pesan(Request $request, $produk_id)
    {   
        // Validasi
        $request->validate([
            'jumlah' => 'required',
        ],[
            'jumlah.required' => 'Masukkan jumlah pesanan',
        ]);

        $produks = Produk::find($produk_id)->first();
        $tanggal = Carbon::now()->format('Y-m-d');
        $total = $produks->harga * $request->jumlah;
        // Validasi jumlah pesanan melebihi stock
        if($request->jumlah > $produks->stok) {
            return redirect()->back()->with('status', 'Jumlah pesanan tidak boleh melebihi stock');
        }

        // User menambah pesanan
        $pesananTambah = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();

        // Simpan pesanan ke database pesanan
        if(!($request->jumlah) == 0) {
            if(empty($pesananTambah)){
                $pesanan = new Pesanan([
                    'user_id' => Auth::user()->user_id,
                    'tanggal' => $tanggal,
                    'status' => 'Check Out',
                    'jumlah_harga' => $total,
                ]);
                $pesanan->save();
            } else {
                $pesananUpdate = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
                $pesananUpdate->update([
                    'jumlah_harga' => $pesananUpdate->jumlah_harga + $total,
                ]);
                $pesananUpdate->save();
            }
        } else {
            return redirect()->back()->with('status', 'Masukkan jumlah pesanan');
        }

        // Simpan pesanan ke database pesanan detail
        // Mencari pesanan id ketika user login dimana statusnya check out
        $newPesananId = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 'Check Out')->first();
        $total = $produks->harga * $request->jumlah;
        
        // User menambah pesanan
        $pesananDetailTambah = PesananDetail::where('produk_id', $produks->produk_id)->where('pesanan_id', $newPesananId->pesanan_id)->first();

        if(!($request->jumlah) == 0) {
            if(empty($pesananDetailTambah)) {
                // Menambah baru pesanan detail
                $pesananDetail = new PesananDetail([
                    'produk_id' => $produks->produk_id,
                    'pesanan_id' => $newPesananId->pesanan_id,
                    'jumlah' => $request->jumlah,
                    'jumlah_harga'  => $total,
                ]);
                $pesananDetail->save();
            } else {
                // Mengupdate pesanan detail
                $pesananDetailUpdate = PesananDetail::where('produk_id', $produks->produk_id)->where('pesanan_id', $newPesananId->pesanan_id)->first();
                $pesananDetailUpdate->update([
                    'jumlah' => $pesananDetailUpdate->jumlah + $request->jumlah,
                    'jumlah_harga' => $pesananDetailUpdate->jumlah_harga + $total,
                ]);
                $pesananDetailUpdate->save();
            }
        } else {
            return redirect()->back()->with('status', 'Masukkan jumlah pesanan');
        }

        return redirect('/')->with('status', 'Pesanan anda sudah masuk ke keranjang');
    }

    public function checkout()
    {
        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 0)->first();
        if (!empty($pesanan)) {
            $pesananDetail = PesananDetail::where('pesanan_id', $pesanan->pesanan_id)->get();
            return view('HalamanDepan/cart', compact('pesanan', 'pesananDetail'));
        }
        return redirect('/')->with('status', 'Anda berhasil melakukan check out, 
            Terimakasih sudah belanja di K-Style Outlet');
    }

    
    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->user_id)->first();
        if (empty($user->alamat)) {
            return redirect('/Profile')
                ->with('status biodata', 'Silahkan lengkapi biodata terlebih dahulu!');
        }
        if (empty($user->nohp)) {
            return redirect('/Profile')
                ->with('status biodata', 'Silahkan lengkapi biodata terlebih dahulu!');
        }

        $pesanan = Pesanan::where('user_id', Auth::user()->user_id)->where('status', 0)->first();
        $pesanan_id = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $PesananDetail = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $PesananDetail) {
            $produk = Barang::where('id', $PesananDetail->produk->produk_id)->first();
            $produk->stok = $produk->stok - $PesananDetail->jumlah;
            $produk->update();
        }
        return redirect('/History/' . $pesanan_id)
            ->with('status', 'Pesanan berhasil di check out');
    }

}

