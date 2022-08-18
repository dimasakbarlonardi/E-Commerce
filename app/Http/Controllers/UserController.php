<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home()
    {
        // $barang = barang::all();
        return view ('HalamanDepan/home');
    }

    public function produk()
    {
        // $barang = barang::all();
        return view ('HalamanDepan/shop');
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

    public function shopdetail(produk $produk,$id)
    {
        $produk = produk::find($id);
        return view ('HalamanDepan/shopdetail');
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
        // $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status', 'Check Out')->first();
        // if(!empty($pesanan)) {
            // $pesananDetail = pesanan_detail::where('pesanan_id', $pesanan->id)->get();
        return view ('HalamanDepan/cart');
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
        // $user = User::find(Auth::user()->user_id)->first();
        return view('HalamanDepan/riwayatshop');
    }
}

