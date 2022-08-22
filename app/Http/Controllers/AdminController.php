<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Pesanan;

class AdminController extends Controller
{
    
    public function index()
    {
        $produks = Produk::all();
        $user = User::all();
        $pesanan = pesanan::all();
        return view('Admin.dashboard' , compact('produks','user','pesanan'));
    }
    

}
