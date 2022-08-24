@extends('app')
@section('Banner')
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Produk</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection
@section('Content')
<div class="container">
    <div class="row">
        <div class=" col-lg-3 col-md-5">
            <div class="sidebar-categories mb-5 mt-5">
                <ul class="main-categories">
                    <form action="{{ route('produks.index') }}" method="GET">
                        @csrf
                        <h3><b>Kategori Liga</b></h3>
                        <select name="kategori" class="form-select-md-9 center mt-3 mb-3" aria-label="Default select example">
                            <option value="" selected>Pilih Liga</option>
                            <option value="Liga Spanyol">Liga Spanyol</option>
                            <option value="Liga Italy">Liga Italy</option>
                            <option vlue="Liga Inggris">Liga Inggris</option>
                            <option value="Liga paris">Liga paris</option>
                            <option value="Liga German">Liga German</option>
                            <option value="Negara">Negara</option>
                          </select>
                          <div class="col-md-15 mt-3 mb-3 form-group">
                         <button type="submit" value="submit" class="primary-btn sm-3 mb-3">Cari Kategori</button>
                    </div>
                    </form>
                </ul>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          
            <!-- Start Best Seller -->
            <section class="lattest-product-area pb-40 category-list">
                <div class="row">
                    <!-- single product -->
                    @forelse ($produks as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-product">
                            <a href="{{route('produkdetail.index',$item->produk_id)}}" class="prod-img">
                                <img src="{{ asset('images/produk/'.$item->foto)}}"  width="300" height="250" alt="">
                            </a>
                            <div class="product-details">
                                <h6><a href="#">{{$item->nama_barang}}</a></h6>
                                <div class="price">
                                    <h6>Stok : {{$item->stok}}</h6>
                                </div>
                                <div class="price">
                                    <h6>Rp.{{number_format($item->harga, 0, ',', '.')}}</h6>
                                </div>
                                <div class="prd-bottom">

                                    <a href="{{route('cart.index',$item->produk_id)}}" class="social-info">
                                        <span class="ti-bag"></span>
                                        <p class="hover-text">Keranjang</p>
                                    </a>
                                    <a href="{{route('produkdetail.index',$item->produk_id)}}" class="social-info">
                                        <span class="lnr lnr-move"></span>
                                        <p class="hover-text">Lihat Detail</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                    <!-- single product -->
            </section>
            <!-- End Best Seller -->
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                
                <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End Filter Bar -->
        </div>
    </div>
</div>
@endsection