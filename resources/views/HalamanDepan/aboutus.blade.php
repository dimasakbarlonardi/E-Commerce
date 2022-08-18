@extends('app')

@section('Banner')
<!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Tentang Kami</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection

@section('Content')
<!--================Blog Area =================-->
<section class="contact_area single-post-area section_gap">
    <div class="container">
        <div class="row">
                    <div class="col-lg-12 mt-25">
                        <div class="feature-img text-center">
                            <img class="img-fluid " src="{{ asset('assets/front-end/img/blog/toko.png')}}" alt="">
                        </div>
                    </div>
                  
                    <div class="col-lg-12">
                        <div class="quotes">
                            Toko Eland Jersey dibuka pada tahun 2019. Di toko ini memajang kostum asli dari brand-brand olahraga yang hingar bingarnya sudah tidak asing di telinga. Salah satu contoh brand-nya adalah Adidas.
                            Toko Eland Jersey menjual sebuah baju-baju olahraga sepakbola seperti baju liga inggris yaitu manchester united, dan asesoris lainnya.
                            Toko Eland Jersey ini berada di Jl. Kali Baru No.RT04/01, Tridaya Sakti, Kec. Tambun Sel., Kabupaten Bekasi, Jawa Barat 17510.
                            Toko ini dibuka pada jam 12:30 sampai 21:30
                        </div>
                    </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
@endsection