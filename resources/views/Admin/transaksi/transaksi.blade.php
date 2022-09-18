@extends('appAdmin')
@section('content')
<div class="ibox mt-5">
                    <div class="ibox-head mt-5">
                        <div class="ibox-title text-center">Data Pemesanan </div>
                    </div>
                    <div class="ibox-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Id Transaksi</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Total</th>
                                        <th scope="col" class="text-center">&nbsp;&nbsp;&nbsp;&nbsp; Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pesanans as $item)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$item->pesanan_id}}</td>
                                            <td>{{$item->User->name}}</td>
                                            <td>{{$item->User->alamat}}</td>
                                            <td>{{ $item->status }}</td>
                                             <td>Rp. {{number_format($item->jumlah_harga + $item->ongkir, 0, ',', '.')}}</td>
                                             <td class="inline text-center">
                                                <a href="{{ route('transaksi.edit', $item->pesanan_id) }}"> <button class="btn btn-default btn-xs m-r-5" data-toggle="tooltip" data-original-title="Edit"><i class="fas fa-pen-square font-14"></i></button></a>
                                               
                                                <form action="{{ route('transaksi.destroy', $item->pesanan_id) }}" class="d-inline" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus data ini ?')">
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