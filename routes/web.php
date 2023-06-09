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

Route::get('/keranjang', [KeranjangController::class, 'index'])->name('keranjang.index');
Route::put('/keranjang/{id}/increase', [KeranjangController::class, 'increaseQuantity'])->name('keranjang.increase');
Route::put('/keranjang/{id}/decrease', [KeranjangController::class, 'decreaseQuantity'])->name('keranjang.decrease');

Route::get('/login', [Authenc::class, 'index'])->name('keranjang.index');
