@extends('app')
@section('Banner')
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
            <div class="col-first">
                <h1>Riwayat Pemesanan Detail</h1>
            </div>
        </div>
    </div>
</section>
<!-- End Banner Area -->
@endsection

@section('Content')
<!-- History Detail Section End -->
<section class="order_details section_gap">
    <div class="container">
<center>
    <div class="cart__discount mt-5 mb-3">
        <h4 style="color: red; margin-bottom: 0px"><b>Pembayaran</b></h4>
        <h4 style="color: #212121; margin-top: 15px">Silahkan anda transfer di rekening <b>BANK MANDIRI Nomor Rekening : 115000-7138235</b>
            <br>
            dengan nominal : <b> Rp. {{number_format($pesanan->jumlah_harga + $pesanan->ongkir, 0, ',', '.')}}</b></h4> 
            <h5>Kemudian konfirmasi melalui via Whatsapp dengan nomor: <b>081282803075</b> <br> 
                cantumkan nama <b>(Nama harus sesuai dengan akun Eland Jersey Sports) jika status sudah berubah menjadi <b> sudah bayar </b> resi akan dikirim melalui whatsapp </b></h5>
    </div>
</center>
    <div class="order_details_table">
        <h2>Order Details</h2>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Size</th>
                        <th>Pesanan</th>
                        <th>Jumlah Harga</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($PesananDetail as $item)
                    <tr>
                        <td>
                            <h6>{{$item->produk->nama_barang}}</h6><h5>(Rp. {{number_format($item->produk->harga, 0, ',', '.')}})</h5>
                            
                        </td>
                        <td>
                            <h5>{{$item->size}}</h5>
                        </td>
                        <td>
                            <p>{{$item->jumlah}}</p>
                        </td>
                        <td>
                            <p> Rp. {{number_format($item->jumlah_harga, 0, ',', '.')}}</p>
                        </td>
                    </tr>
            
                    @empty
                    @endforelse
                    <tr>
                        <td>
                            <h4>Ongkir</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p> Rp. {{number_format($pesanan->ongkir, 0, ',', '.')}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Kurir</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p>{{($pesanan->kurir)}}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Total</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p> Rp. {{number_format($pesanan->jumlah_harga + $pesanan->ongkir, 0, ',', '.')}}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
@endsection
<!--================End Order Details Area =================-->