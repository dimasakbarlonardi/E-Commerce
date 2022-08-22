<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Elend Jersey Sport </title>
    <link rel="shortcut icon" href="{{ asset('assets/front-end/img/LOGO1.jpg') }}">
    <!-- GLOBAL MAINLY STYLES-->
    <link href="{{asset('/assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/admin/vendors/themify-icons/css/themify-icons.css')}}" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="{{asset('/assets/admin/vendors/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="{{asset('/assets/admin/css/main.min.css')}}" rel="stylesheet" />
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
    <!-- PAGE LEVEL STYLES-->
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- awal navbar-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="{{url('/')}}">
                    <span class="brand">Menu Admin
                        <span class="brand-tip"></span>
                    </span>
                </a>
            </div>
            <div class="flexbox flex-1">
            </div>
        </header>
        <!-- akhir navbar -->
        <!-- awal sisi sub menu-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a href="{{route ('dashboard.index')}}"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="heading">Data Toko</li>
                    <li>
                        <a href="{{route('produk.index')}}">
                            <i class="sidebar-item-icon fas fa-store "></i>  <span class="nav-label">Produk</span>
                        </a>
                        <a href="{{route('transaksi.index')}}">
                            <i class="sidebar-item-icon fas fa-store "></i>  <span class="nav-label">Transaksi</span>
                        </a>
                        <a href="{{route('transaksidetail.index')}}">
                            <i class="sidebar-item-icon fas fa-store "></i>  <span class="nav-label">Transaksi Detail</span>
                        </a>
                    </li>
                    <li>
                        {{-- <a href="{{route('adminuser')}}"> --}}
                            <i class="sidebar-item-icon fas fa-boxes"></i>  <span class="nav-label">Data User</span>
                        </a>
                    </li>
                    <li class="heading">User</li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-envelope"></i>
                            <span class="nav-label">Admin</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li class="dropdown dropdown-user">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                            </li>   
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- akhir isi sub menu-->
        <div class="content-wrapper">
       <!--Star content--> 
            @yield('content')
            </div>
    </div>
    <!-- awal loading-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- akhir loading-->
    <!-- CORE PLUGINS-->
    <script src="{{asset('/assets/admin/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS-->
    <script src="{{asset('/assets/admin/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
    <script src="{{asset('/assets/admin/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="{{asset('/assets/admin/js/app.min.js')}}" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script src="{{asset('/assets/admin/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>
</body>
</html>