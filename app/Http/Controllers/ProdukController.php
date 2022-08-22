<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = Produk::all();
        return view('Admin.produk.produk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Admin/produk/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produks = Produk::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'foto' => $request->foto,
            'keterangan' => $request->keterangan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/produk', $request
                ->file('foto')->getClientOriginalName());
            $produks->foto = $request->file('foto')
                ->getClientOriginalName();
            $produks->save();
        }
        return redirect()->route('produk.index')
            ->with('status', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($produk_id)
    {
        $produks = Produk::find($produk_id);
        return view ('Admin/produk/edit',  compact('produks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produks = Produk::find($id);
        $produks->update([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'foto' => $request->foto,
            'keterangan' => $request->keterangan,
        ]);
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/produk', $request
                ->file('foto')->getClientOriginalName());
            $produks->foto = $request->file('foto')
                ->getClientOriginalName();
            $produks->save();
        }
        return redirect()->route('produk.index')
            ->with('status', 'Data Berhasil Diupdate!');
            $request->file('foto')
                ->getClientOriginalName();
            $produks->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($produk_id)
    {
        $produks=Produk::find($produk_id);
        $produks->delete();
        return redirect()->route('produk.index')
            ->with('status', 'Data Berhasil Dihapus!');
    }
}
