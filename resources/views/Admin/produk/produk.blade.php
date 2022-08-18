@extends('appAdmin')
@section('content')
<div class="ibox mt-5">
                    <div class="ibox-head mt-5">
                        <div class="ibox-title text-center">Data Stok Produk </div>
                        <ul><a href="{{route ('produks.create')}}">
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
                                        <th>Jenis Id</th>
                                        <th>Gambar</th>
                                        <th>Deskripsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($barang as $item)
                                        <tr>
            
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->nama_barang}}</td>
                                            <td>{{$item->harga}}</td>
                                            <td>{{$item->jenis_id}}</td>
                                            <td>{{$item->gambar}}</td>
                                            <td>{{$item->deskripsi}}</td>
                                            <td>
                                                <a href="{{url('admin-detail/produk/produks/'.$item->id.'/edit')}}"> <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pen-square font-14"></i></button></a>
                                               
                                                <form action="{{url('admin-detail/produk/produks/'.$item->id)}}" class="d-inline" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')">
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
                        {{$barang->links()}}
                    </div>
                </div>

@endsection