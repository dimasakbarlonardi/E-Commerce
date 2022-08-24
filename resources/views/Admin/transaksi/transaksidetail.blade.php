@extends('appAdmin')
@section('content')
<div class="ibox mt-5">
                    <div class="ibox-head mt-5">
                        <div class="ibox-title text-center">Data Pemesanan </div>
                    </div>
                    <div class="content mt-3">
                        <div class="animated fadeIn">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content mt-2">
                                        <div class="animated fadeIn">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <strong class="card-title">Table Detail Pemesanan</strong>
                                                        </div>
                                                        <div class="card-body">
                                                            <table id="bootstrap-data-table" class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col">Id Transaksi</th>
                                                                        <th scope="col">Nama Pemesan</th>
                                                                        <th scope="col">Nama Barang</th>
                                                                        <th scope="col">Size</th>
                                                                        <th scope="col">Jumlah Pesanan</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @forelse ($PesananDetail as $item)
                                                                        <tr>
                                                                            <td>{{$item->pesanan_id}}</td>
                                                                            <td>{{$item->pesanan->user->name}}</td>
                                                                            <td>{{$item->produk->nama_barang}}</td>
                                                                            <td>{{$item->size}}</td>
                                                                            <td>{{$item->jumlah}}</td>
                                                                        </tr>
                                                                    @empty
                                                                    <div class="alert alert-danger" role="alert">
                                                                        <center>Data transaksi masih kosong!</center>
                                                                     </div>
                                                                    @endforelse
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        {{-- {{$barang->links()}} --}}
                </div>
@endsection