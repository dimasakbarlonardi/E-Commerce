<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PesananDetail;

class TransaksiDetailController extends Controller
{
    public function index()
    {
    $pesanan_details = PesananDetail::all();
    return view('Admin.transaksi.transaksidetail', compact('pesanan_details'));
    }
}