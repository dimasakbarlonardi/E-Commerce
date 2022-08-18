<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function index()
    {
        // $barang = Barang::all();
        // $user = User::all();
        // $pesanan = pesanan::all();
        return view('Admin.dashboard');
    }
    

}
