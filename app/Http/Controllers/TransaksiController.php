<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanans = Pesanan::all();
        return view('Admin.transaksi.transaksi', compact('pesanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($pesanan_id)
    {
        $pesanans = Pesanan::find($pesanan_id);
        return view('Admin.transaksi.edit', compact('pesanans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pesanan_id)
    {
        $request->validate([
            'status' => 'required|integer|max:2',
            'ongkir' => 'required|max:5',
        ], [
            'status.required' => 'Status transaksi tidak boleh kosong',
            'status.integer' => 'Status transaksi harus angka',
            'status.max' => 'Status transaksi tidak boleh lebih dari angka 2',
            'ongkir.required' => 'Ongkir tidak boleh kosong',
            'ongkir.max' => 'Ongkir tidak boleh lebih dari angka 5',
        ]);
        $pesanans = Pesanan::find($pesanan_id);
        $pesanans->update([
            'status' => $request->status,
            'ongkir' => $request->ongkir,
            'kurir' => $request->kurir,
        ]);

        return redirect()->route('transaksi.index')
            ->with('status', 'Data Status Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}