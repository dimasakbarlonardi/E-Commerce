@extends('appAdmin')
@section('content')
{{-- status bar --}}
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{$produks->count()}}</h2>
                    <div class="m-b-5">PRODUK</div><i class="ti-shopping-cart widget-stat-icon"></i>
                    <div><small>Jumlah Produk</small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    <h2 class="m-b-5 font-strong">{{$user->count()}}</h2>
                    <div class="m-b-5">USER</div><i class="ti-user widget-stat-icon"></i>
                    <div><small>Jumlah User</small></div>
                </div>
            </div>
        </div>
    </div>
{{-- akhir status --}}
{{-- tabel jenis --}}
<div class="ibox mt-5">
    <div class="ibox-head mt-5">
        <div class="ibox-title text-center">Data Pemesanan </div>
    </div>
    <div class="ibox-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Id Transaksi</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pesanan as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->tanggal}}</td>
                            <td>{{$item->pesanan_id}}</td>
                            <td>{{$item->User->name}}</td>
                            <td>
                                @if ($item->ongkir == null)
                                    Menunggu Konfirmasi
                                @elseif ($item->status == 'Belum Bayar')
                                    Belum Dibayar
                                @else
                                    Lunas
                                @endif
                            </td>
                             <td>Rp. {{number_format($item->jumlah_harga + $item->ongkir, 0, ',', '.')}}</td>
                             <td class="inline text-center">
                                <a href="{{route('transaksi.edit',$item->pesanan_id)}}" class="btn btn-primary btn-sm">
                                    <i class="ti-pencil"></i>
                                </a>
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

{{-- akhir tabel jenis --}}
{{-- tabel produk --}}
@endsection