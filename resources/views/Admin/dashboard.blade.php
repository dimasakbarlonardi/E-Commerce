@extends('appAdmin')
@section('content')
{{-- status bar --}}
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-success color-white widget-stat">
                <div class="ibox-body">
                    {{-- <h2 class="m-b-5 font-strong">{{$barang->count()}}</h2> --}}
                    <div class="m-b-5">PRODUK</div><i class="ti-shopping-cart widget-stat-icon"></i>
                    <div><small>jumlah produk</small></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="ibox bg-danger color-white widget-stat">
                <div class="ibox-body">
                    {{-- <h2 class="m-b-5 font-strong">{{$user->count()}}</h2> --}}
                    <div class="m-b-5">USER</div><i class="ti-user widget-stat-icon"></i>
                    <div><small>jumlah admin</small></div>
                </div>
            </div>
        </div>
    </div>
{{-- akhir status --}}
{{-- tabel jenis --}}
<div class="ibox mt-5">
    <div class="ibox-head mt-5">
        <div class="ibox-title text-center">Data Pesanan </div>
    </div>
    <div class="ibox-body">
        {{-- @forelse ($pesanan as $item) --}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th width="50px"></th>
                        <th>No.</th>
                        <th width="50px"></th>
                        <th>Nama User</th>
                        <th width="50px"></th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td width="50px"></td>
                            {{-- <td>{{$loop->iteration}}</td> --}}
                            <td width="50px"></td>
                            {{-- <td>{{ $item->user->name }}</td> --}}
                            <td width="50px"></td>
                            {{-- <td>Rp. {{ number_format($item->total_harga, 0, ',', '.') }}</td> --}}
                        </tr>    
                    </div>
    </div>
    {{-- @empty  
    @endforelse --}}
</div>

{{-- akhir tabel jenis --}}
{{-- tabel produk --}}
@endsection