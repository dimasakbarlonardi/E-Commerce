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
                    <h3>Reset Password</h3>
                    <form class="row login_form mb-5" method="POST" action="{{ route('password.update') }}" id="contactForm" novalidate="novalidate">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="col-md-12 form-group">
                            <input type="hidden" class="form-control" id="email" name="email" placeholder="E-Mail" value="{{ $email }}" onfocus="this.placeholder = ''">
                        </div>

                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>

                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="email" name="password_confirmation" placeholder="Konfirmasi Password">
                        </div>
                        
                            <div class="col-md-12 form-group mt-2">
                                <button type="submit" value="submit" class="primary-btn">Reset</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->
@endsection