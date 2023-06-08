<?php

use App\Http\Controllers\KeranjangPenggunaController;
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

Route::get('/keranjang', [KeranjangPenggunaController::class, 'index'])->name('cart.index');
Route::post('/keranjang/increment/{id_keranjang}', [KeranjangPenggunaController::class, 'incrementQuantity'])->name('cart.increment');
Route::post('/keranjang/decrement/{id_keranjang}', [KeranjangPenggunaController::class, 'decrementQuantity'])->name('cart.decrement');
