 @extends('app')
 @section('Banner')
 <!-- Start Banner Area -->
 <section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Keranjang Belanja</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection
@section('Content')

<!--================Cart Area =================-->
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Produk</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Total</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pesananDetail as $item)
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img style="width: 90px; height: 90px" src="{{ asset('images/produk/'.$item->produk->foto)}}" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>{{$item->produk->nama_barang}}</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp. {{number_format($item->produk->harga, 0, ',', '.')}}</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                   
                                        {{$item->jumlah}} 
                                 
                                </div>
                            </td>
                            <td>
                                <h5>{{number_format($item->jumlah_harga, 0, ',', '.')}}</h5>
                            </td>
                            <td>
                                <div class="checkout_btn_inner d-flex align-items-center">
                                    <form action="{{route ('checkoutdelete.index',$item->pesanandetail_id)}}" method="POST" class="d-inline" onsubmit="return confirm('Anda yakin ingin cancel pesanan ini ?')">
                                        @method('delete')
                                        @csrf
                                        <button style="border: 0px; border-radius: 50px" type="submit">
                                            <i class="fa fa-close"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                       
                        <tr class="bottom_button">
                            <td>          
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                                   
                            </td>
                            <td><a class="primary-btn" href="#">Tambah</a> 
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                               
                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5> {{number_format($item->jumlah_harga, 0, ',', '.')}}</h5>
                            </td>
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                               
                            </td>
                            <td>
                                {{-- <h5>Ongkir</h5> --}}
                            </td>
                            <td>
                                {{-- <div class="flex justify-between text-dark font-medium my-4">
                                    <p class="pt-3">Kurir</p>
                                    <select name="kurir" id="kurir" class="select bg-gray-100 active:border-none w-32 max-w-xs">
                                        <option disabled selected>Pilih Kurir</option>
                                        <option value="JNT">JNT</option>
                                        <option value="SiCepat">SiCepat</option>
                                    </select>
                                </div> --}}
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td>

                            </td>
                            <td>
                                
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                <h6>Keranjang Total</h6>
                            </td>
                            <td>
                            <div class="col-lg-4">
                                <div class="cart__total">  
                                 
                                <h6><span>{{number_format($pesanan->jumlah_harga, 0, ',', '.')}}</span></h6>
                                  
                                </div>
                                </div>
                            </td>
                            
                        </tr>
                        <tr class="out_button_area">
                            <td>

                            </td>
                            <td>
                              
                            </td>
                            <td>
                                
                            </td>
                            <td>
                            </td>
                            <td>
                                <a class="primary-btn" href="{{route ('konfirmasi.index')}}" onsubmit="return confirm('Anda yakin ingin check out ?')">Pesan</a>  
                            </td>
                        </tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!--================End Cart Area =================-->

@endsection