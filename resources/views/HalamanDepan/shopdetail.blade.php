@extends('app')
@section('Banner')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Produk Detail</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection
@section('Content')

<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
            <div class="col-lg-6">
                <div class="">
                    <div class="single-prd-item mb-5">
                        <img class="img-fluid" src="{{ asset('images/produk/'.$produks->foto)}}"  alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
                <div class="s_product_text">
                    <h3>{{$produks->nama_barang}}</h3>
                    <h2>Rp.{{number_format($produks->harga, 0, ',', '.')}}</h2>
                    <ul class="list">
                        <li><a><span>Kategori</span> : {{$produks->kategori}}</a></li>
                        <li><a><span>Stok</span> : {{$produks->stok}}</a></li>
                    </ul>
                    <p><b>{{$produks->keterangan}}</b></p>
                        @if (session('status'))
                         <p>{{session('status')}}</p>
                        @endif
                      <form action="{{route('pesan' , $produks->produk_id)}}"  method="POST" enctype="multipart/form-data">
								@csrf
							<div class="one-eight text-center">
								<div class="display-tc">
									<h4>Jumlah yang dipesan</h4>
									<input type="text" id="quantity" name="jumlah" class="form-control input-number text-center" value="1" min="1" max="100">
								</div>
							</div>
                            <div class="single-element-widget mt-30">
                                <h3 class="mb-30 mt-3">Ukuran</h3>
                                <div class="default-select" id="default-select">
                                            <select name="size">
                                                <option value="">Pilih</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    </select>
                                </div>
                            </div>
                              <div class="card_area align-items-center  ">
                              <button class="primary-btn w-100 mt-3 mb-3" type="submit">Masukkan Keranjang</button>
                              </div>
							</form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->
@endsection