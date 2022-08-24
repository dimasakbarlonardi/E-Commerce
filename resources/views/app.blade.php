
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{ asset('assets/front-end/img/LOGO1.jpg') }}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Eland Jersey Sports</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/linearicons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/nice-select.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/nouislider.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/ion.rangeSlider.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/ion.rangeSlider.skinFlat.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/front-end/css/main.css') }}">
</head>

<body>
@yield('Banner')

<!-- Start Header Area -->
<header class="header_area sticky-header">
    <div class="main_menu"> 
        <nav class="navbar navbar-expand-lg navbar-light main_box"> 
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand logo_h" href="index.html"><img src="{{ asset('assets/front-end/img/LOGO1.jpg') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route ('home.index') }}">Beranda</a></li>
                        <li class="nav-item submenu dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route ('produks.index')}}">Produk</a>
                        </li>
						<li class="nav-item"><a class="nav-link" href="{{route ('about.index')}}">Tentang Kami</a></li>
                        <li class="nav-item submenu dropdown">
                            <a class="nav-link dropdown-toggle" href="{{route ('contact.index')}}">Kontak Kami</a>
                        </li>
						@if (Route::has('login'))
                        @auth
						
						<li class="nav-item submenu dropdown">
                            <a class="nav-link dropdown-toggle" href="#">{{ Auth::user()->name}}</a>
                            <ul class="dropdown-menu">
								<li class="nav-item"><a class="nav-link" href="{{route('profil.index')}}">Profil</a></li>
								<li class="nav-item"><a class="nav-link" href="{{route('riwayat.index')}}">Riwayat Pemesanan</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf</form>
								</li>
                            </ul>
                        </li>
						<ul class="nav navbar-nav navbar">
						<li class="nav-item"><a href="{{route('cart.index')}}" class="cart"><span class="ti-bag"></span></a></li>
						</ul>
						@else
                        <li class="nav-item"><a class="nav-link" href="{{route('login')}}">LogIn</a></li>
                        @endauth
                        @endif

                    </ul>
                   
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Header Area -->
	
	@yield('Content')

	<!-- start footer Area -->
		<footer class="footer-area section_gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-3  col-md-5 col-sm-6">
						<div class="single-footer-widget">
							<h6>Tentang Kami</h6>
							<p>
								Eland Jersey Sports yaitu sebuah tempat penjualan baju bola yang sangat berkualitas.
							</p>
						</div>
					</div>
					
					<div class="col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Ikuti Kami</h6>
							<p>Let us be social</p>
							<div class="footer-social d-flex align-items-center">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
					<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy; All rights reserved | <a href="https://www.instagram.com/dimasakbarlonardi/" target="_blank">DIAKLO</a>
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</footer>
	<!-- End footer Area -->

	<script src="{{ asset('assets/front-end/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{ asset('assets/front-end/js/vendor/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/nouislider.min.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/countdown.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/owl.carousel.min.js') }}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{ asset('assets/front-end/js/gmaps.min.js') }}"></script>
	<script src="{{ asset('assets/front-end/js/main.js') }}"></script>
</body>

</html>