@extends('app')
@section('Banner')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Profil</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection
@section('Content')
<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="row order_d_inner">
        
                        <div class="details_item">
                            <h3> Profil User</h3>
                            <ul class="list">
                                <li><a ><span>Nama</span> : {{ Auth::user()->name }}</a></li>
                                <li><a ><span>E-Mail</span> : {{ Auth::user()->email }}</a></li>
                                <li><a ><span>Alamat</span> : {{ Auth::user()->alamat }}</a></li>
                                <li><a ><span>No. Hp</span> : {{ Auth::user()->nohp }} </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Ubah Profil</h3>
                    <form class="row login_form mb-5" action="{{route('profilupdate.index', $user->user_id)}}" method="post" nctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12 form-group">
                            <p style=text-align:left >Nama :</p>
                            <input type="text" class="form-control" name="name" placeholder="Nama Anda">
                        </div>
                        <div class="col-md-12 form-group">
                            <p style=text-align:left >E-Mail :</p>
                            <input type="text" class="form-control" name="email" placeholder="Email Anda">
                        </div>
                        <div class="col-md-12 form-group">
                            <p style=text-align:left >Alamat :</p>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat Anda">
                        </div>
                        <div class="col-md-12 form-group">
                            <p style=text-align:left >No. Hp :</p>
                            <input type="number" class="form-control" name="nohp" placeholder="No.Hp Anda">
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Update Profil</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection