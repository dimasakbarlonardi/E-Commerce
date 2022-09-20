@extends('app')
@section('Banner')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Login</h1>
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
            <div class="col-lg-12">
                <div class="login_form_inner">
                    <h3>Forgot Password</h3>
                    <form class="row login_form mb-5" method="POST" action="{{ route('password.email') }}" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="E-Mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                        <div class="col-md-12 d-flex mt-2">
                            <div class="col-md-6 form-group">
                                <a href="{{ route('login') }}" class="primary-btn mt-0 pt-0" style="color: #fff; padding: 0px">Kembali</a>
                            </div>
                            <div class="col-md-6 form-group">
                                <button type="submit" value="submit" class="primary-btn">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection