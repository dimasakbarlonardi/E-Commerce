<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;

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
Route::get('/produk', [UserController::class, 'produk'])->name('produk.index'); 
Route::get('/about', [UserController::class, 'about'])->name('about.index');
Route::get('/contact', [UserController::class, 'contact'])->name('contact.index');
Route::post('produkdetail/{id}', [UserController::class, 'shopdetail'])->name('produkdetail.index');
Route::get('profil',[UserController::class, 'user'])->name('profil.index');
Route::post('HalamanDepan/profil-{id}',[UserController::class, 'profilupdate'])->name('profilupdate.index');
Route::get('cart', [UserController::class, 'cart'])->name('cart.index');
Route::get('riwayatpemesanan', [UserController::class, 'riwayat'])->name('riwayat.index');

// Route::get('/login', [UserController::class, 'login'])->name('login.index');
// Route::get('/register', [UserController::class, 'register'])->name('register.index');

// login admin
Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.index');
Route::post('admin/login', [AdminLoginController::class, 'login'])->name('loginadmin.index');

// ADMIN
Route::middleware('auth:admin')->group(function () {
Route::get('/dashboard-admin', [AdminController::class, 'index'])->name('dashboard.index');
Route::resource('admin/produk/produk', ProdukController::class);
    
});
Auth::routes();

