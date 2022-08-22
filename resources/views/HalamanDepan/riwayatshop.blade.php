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
<!--================Order Details Area =================-->
<section class="order_details section_gap">
    <div class="container">
        <h3 class="title_confirmation">Silahkan anda transfer di rekening <b>BANK BRI Nomor Rekening : 32113-821312-123</b>  dengan nominal : <b> Rp. {{number_format($pesanan->jumlah_harga + $pesanan->ongkir, 0, ',', '.')}}</b></h3>
    
        <h3 class="title_confirmation"> dengan nominal : <b> Rp. {{number_format($pesananDetail->jumlah_harga + $pesanan->ongkir, 0, ',', '.')}}</b></h3>
            <div class="cart__discount">
                <h4 style="color: red; margin-bottom: 0px">Pembayaran</h4>
                <h4 style="color: #212121; margin-top: 15px">Silahkan anda transfer di rekening <b>BANK BRI Nomor Rekening : 32113-821312-123</b>
                    <br>
                    dengan nominal : <b> Rp. {{number_format($pesananDetail->jumlah_harga + $pesanan->ongkir, 0, ',', '.')}}</b></h4> 
                    <h5>Kemudian konfirmasi melalui via Whatsapp dengan nomor: <b>0827328328</b> <br> 
                        cantumkan nama <b>(Nama harus sesuai dengan akun K-Style Outlet)</b></h5>
            </div>
      
    
        <div class="row order_d_inner">
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Order Info</h4>
                    <ul class="list">
                        <li><a href="#"><span>No</span> : 60235</a></li>
                        <li><a href="#"><span>Produk</span> : Los Angeles</a></li>
                        <li><a href="#"><span>Size</span> : USD 2210</a></li>
                        <li><a href="#"><span>Pesanan</span> : Check payments</a></li>
                        <li><a href="#"><span>Jumlah Harga</span> : Check payments</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Billing Address</h4>
                    <ul class="list">
                        <li><a href="#"><span>Street</span> : 56/8</a></li>
                        <li><a href="#"><span>City</span> : Los Angeles</a></li>
                        <li><a href="#"><span>Country</span> : United States</a></li>
                        <li><a href="#"><span>Postcode </span> : 36952</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="details_item">
                    <h4>Shipping Address</h4>
                    <ul class="list">
                        <li><a href="#"><span>Street</span> : 56/8</a></li>
                        <li><a href="#"><span>City</span> : Los Angeles</a></li>
                        <li><a href="#"><span>Country</span> : United States</a></li>
                        <li><a href="#"><span>Postcode </span> : 36952</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
@endsection