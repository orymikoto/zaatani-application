<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\KeranjangPenggunaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\Authenticate;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::put('/keranjang/{id}/increase', [KeranjangController::class, 'increaseQuantity'])->name('keranjang.increase');
Route::put('/keranjang/{id}/decrease', [KeranjangController::class, 'decreaseQuantity'])->name('keranjang.decrease');

// AUTHENTICATION
Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');
Route::post('/login', [AuthenticationController::class, 'login_post'])->name('login_post');
Route::post('/register', [AuthenticationController::class, 'register_post'])->name('register_post');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout')->middleware('signed');

// PROFILE 
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware('signed');
Route::get('/profile/edit', [ProfileController::class, 'profile_edit'])->name('profile_edit')->middleware('signed');
Route::post('/profile/edit', [ProfileController::class, 'profile_edit_post'])->name('profile_edit')->middleware('signed');

// MART
Route::get('/mart', [ProdukController::class, 'mart'])->name('mart');
Route::get('/mart/kategori-produk/{id_kategori}', [ProdukController::class, 'kategori'])->name('kategori');
Route::get('/mart/detail-produk/{id_produk}', [ProdukController::class, 'detail_produk'])->name('produk_detail');
Route::get('/mart/beli-produk/{id_produk}', [ProdukController::class, 'beli_produk'])->name('beli_produk')->middleware('pengguna');

// PRODUK PENJUAL
Route::get('/penjual/daftar-produk/{id_penjual}', [ProdukController::class, 'penjual'])->name('produk_penjual')->middleware('penjual');
Route::get('/penjual/tambah-produk', [ProdukController::class, 'tambah_produk'])->name('tambah_produk_penjual')->middleware('penjual');
Route::get('/penjual/edit-produk/{id_produk}', [ProdukController::class, 'tambah_produk'])->name('edit_produk_penjual')->middleware('penjual');
Route::post('/penjual/tambah-produk', [ProdukController::class, 'tambah_produk_post'])->name('tambah_produk_penjual_post')->middleware('penjual');
Route::post('/penjual/edit-produk/{id_produk}', [ProdukController::class, 'edit_produk_post'])->name('edit_produk_penjual_post')->middleware('penjual');
Route::get('/penjual/hapus-produk/{id_produk}', [ProdukController::class, 'hapus_produk'])->name('hapus_produk_penjual')->middleware('penjual');

// TRANSAKSI
Route::get('/daftar-transaksi/{id_pengguna}', [TransaksiController::class, 'daftar_transaksi'])->name('daftar_transaksi');
Route::get('/detail-transaksi/{id_transaksi}', [TransaksiController::class, 'detail_transaksi'])->name('detail_transaksi');
Route::get('/bayar/transaksi/{id_transaksi}', [TransaksiController::class, 'bayar_transaksi'])->name('bayar_transaksi');
Route::post('/bayar/tranksaksi/{id_transaksi}', [TransaksiController::class, 'bayar_transaksi_post'])->name('bayar_transaksi_post');
