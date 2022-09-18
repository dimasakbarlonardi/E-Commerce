@extends('app')
@section('Banner')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Riwayat Pemesanan</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection

@section('Content')
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Mohon Menunggu konfirmasi admin. Jika Status sudah di konfirmasi klik Detail untuk melanjutkan Pembayaran</h3>
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">status</th>
                            <th scope="col">Harga</th>
                            <th scope="col">tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesananAll as $item)
                        <tr>
                            <td>
                                <div class="media">
                                   
                                    <div class="media-body">
                                        <p>{{($item->status)}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp. {{number_format($item->jumlah_harga, 0, ',', '.')}}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                   
                                        {{date('d-M-Y' ,strtotime($item->created_at))}} 
                                </div>
                            </td>
                            <td>
                                <div class="button-group-area mt-40">
                                <a href="{{route('riwayatdetail.index' , $item->pesanan_id)}}" class="genric-btn primary circle arrow">Detail<span class="lnr lnr-arrow-right"></span></a>
                                </div>
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                        
                        @empty
                        @endforelse
                       
                        <tr class="bottom_button">
                            <td>          
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                   
                            </td>
                            <td>
                            </td>
                        </tr>
                       
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
@endsection