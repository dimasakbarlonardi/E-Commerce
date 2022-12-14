@extends('appAdmin')
@section('content')
<div class="ibox mt-5">
                    <div class="ibox-head mt-5">
                        <div class="ibox-title text-center">Data Stok Produk </div>
                        <ul><a href="{{route('produk.create')}}">
                        <button type="button" class="btn btn-success mt-3">Tambah</button></a>
                        </ul>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                   
                                        <th>Id</th>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Kategori</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($produks as $item)
                                        <tr>
            
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama_barang}}</td>
                                            <td>{{$item->harga}}</td>
                                            <td>{{$item->stok}}</td>
                                            <td>{{$item->kategori}}</td>
                                            <td>{{$item->foto}}</td>
                                            <td>{{$item->keterangan}}</td>
                                            <td>
                                                <a href="{{route('produk.edit',$item->produk_id)}}"> <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pen-square font-14"></i></button></a>
                                               
                                                <form action="{{route('produk.destroy',$item->produk_id)}}" class="d-inline" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-default btn-xs" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash font-14"></i></button>
                                                </form>
                                            </td>   
                                        </tr>
                                      @empty
                                        
                                    @endforelse
                                
                                </tbody>
                            </table>
                            
                        </div>
                        {{-- {{$barang->links()}} --}}
                    </div>
                </div>

@endsection