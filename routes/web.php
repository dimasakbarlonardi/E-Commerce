<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TransaksiDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// USER
Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [UserController::class, 'home'])->name('home.index'); 
Route::get('/produk', [UserController::class, 'produk'])->name('produks.index'); 
Route::get('/about', [UserController::class, 'about'])->name('about.index');
Route::get('/contact', [UserController::class, 'contact'])->name('contact.index');


// Route::get('/login', [UserController::class, 'login'])->name('login.index');
// Route::get('/register', [UserController::class, 'register'])->name('register.index');
Auth::routes();
Route::middleware('auth')->group(function () {
Route::get('profil',[UserController::class, 'user'])->name('profil.index');
Route::post('HalamanDepan/profil-{id}',[UserController::class, 'profilupdate'])->name('profilupdate.index');
Route::get('HalamanDepan/cart', [UserController::class, 'cart'])->name('cart.index');
Route::post('HalamanDepan/cart-{id}', [UserController::class, 'pesan'])->name('pesan');
Route::get('produkdetail/{id}', [UserController::class, 'shopdetail'])->name('produkdetail.index');
Route::get('riwayatpemesanan', [UserController::class, 'riwayat'])->name('riwayat.index');
Route::get('riwayatpemesanan/{id}', [UserController::class, 'detail']);
Route::get('Check-Out', [UserController::class, 'checkout'])->name('checkout.index');
Route::delete('Check-Out/{id}', [UserController::class, 'delete'])->name('checkoutdelete.index');
Route::get('Konfirmasi', [UserController::class, 'konfirmasi'])->name('konfirmasi.index');
});

// login admin
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.index');
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('loginadmin.index');

// ADMIN
Route::middleware('auth:admin')->group(function () {
Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard.index');
Route::resource('admin/produk/produk', ProdukController::class);
Route::resource('admin/transaksi/transaksi', TransaksiController::class);
Route::get('/TransaksiDetail',  [TransaksiDetailController::class, 'index'])->name('transaksidetail.index');
    
});

