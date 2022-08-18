@extends('app')

@section('Banner')
<!-- start banner Area -->
<section class="banner-area">
    <div class="container">
        <div class="row fullscreen align-items-center justify-content-start">
            <div class="col-lg-12">
                <div class=" owl-carousel">
                    <!-- single-slide -->
                    <div class="row single-slide align-items-center d-flex">
                        <div class="col-lg-5 col-md-6">
                            <div class="banner-content mt-5">
                                <h1>Eland <br>Jersey Sports!</h1>
                                <p>Di Eland Jersey Sports menyediakan baju bola berbagai kategori yaitu berupa klub eropa, klub asia, dan baju jersey negara</p>
                                <div class="add-bag d-flex align-items-center">
                                    <a class="add-btn" href="{{route ('produk.index')}}"><span class="ti-bag"></span></a>
                                    <span class="add-text text-uppercase">Menu PRODUK</span>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="banner-img">
                                <img class="img-fluid" src="{{ asset('assets/front-end/img/banner/jerseylogo.png') }}" width="600php a" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- single-slide -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@endsection

@section('Content')

<!-- Start brand Area -->
<section class="brand-area section_gap">
    <div class="container">
        <div class="row">
            <a class="col " href="#">
                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/front-end/img/brand/LOGO_1.png') }}" alt="">
            </a>
            <a class="col " href="#">
                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/front-end/img/brand/LIGA_2.png') }}" alt="">
            </a>
            <a class="col " href="#">
                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/front-end/img/brand/LIGA_3.png') }}" alt="">
            </a>
            <a class="col " href="#">
                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/front-end/img/brand/LIGA_4.png') }}" alt="">
            </a>
            <a class="col " href="#">
                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/front-end/img/brand/LIGA_5.png') }}" alt="">
            </a>
        </div>
    </div>
</section>
<!-- End brand Area -->

    <!-- single product slide -->
    <div class="single-product-slider">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h1>Produk Terlaris</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="" src="{{ asset('assets/front-end/img/product/p1.png') }}" width="300" height="250" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="{{route('produk.index')}}" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="" src="{{ asset('assets/front-end/img/product/p2.png') }}" width="300" height="250" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="{{route('produk.index')}}" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="" src="{{ asset('assets/front-end/img/product/p3.png') }}" width="300" height="250" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="{{route('produk.index')}}" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single product -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-product">
                        <img class="" src="{{ asset('assets/front-end/img/product/p4.png') }}" width="300" height="250" alt="">
                        <div class="product-details">
                            <h6>addidas New Hammer sole
                                for Sports person</h6>
                            <div class="price">
                                <h6>$150.00</h6>
                            </div>
                            <div class="prd-bottom">
                                <a href="{{route('produk.index')}}" class="social-info">
                                    <span class="lnr lnr-move"></span>
                                    <p class="hover-text">Detail</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

<!-- end product Area -->
 <!-- start features Area -->
 <section class="features-area section_gap">
    <div class="container">
        <div class="row features-inner">
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ asset('assets/front-end/img/features/f-icon1.png') }}" alt="">
                    </div>
                    <h6>Pesan Online</h6>
                    <p>Bisa Memesan Online</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ asset('assets/front-end/img/features/f-icon2.png') }}" alt="">
                    </div>
                    <h6>Aman Pemesanan</h6>
                    <p>Pemesanan Online yg Aman</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ asset('assets/front-end/img/features/f-icon3.png') }}" alt="">
                    </div>
                    <h6>24 jam Admin</h6>
                    <p>Admin Fast Respon</p>
                </div>
            </div>
            <!-- single features -->
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-features">
                    <div class="f-icon">
                        <img src="{{ asset('assets/front-end/img/features/f-icon4.png') }}" alt="">
                    </div>
                    <h6>Barang Murah</h6>
                    <p>Harga Terjangkau</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end features Area -->


@endsection