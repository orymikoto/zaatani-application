<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
  // VIEW METHOD
  public function mart()
  {
    $produk = Produk::all();
    return view('produk.daftar-produk')->with(array('produk' => $produk));
  }

  public function kategori($id_kategori)
  {
    $produk_kategori = Produk::whereIdKategori($id_kategori)->get();
    return view('produk.daftar-produk-kategori')->with(array('produk' => $produk_kategori));
  }

  public function detail_produk($id_produk)
  {
    $produk_detail = Produk::whereIdProduk($id_produk)->first();
    return view('produk.daftar-produk-kategori')->with(array('produk' => $produk_detail));
  }

  public function beli_produk($id_produk)
  {
    $produk_detail = Produk::whereIdProduk($id_produk)->first();
    return view('produk.beli-produk')->with(array('produk' =>  $produk_detail));
  }

  public function tambah_produk()
  {
    return view('produk.tambah-produk');
  }

  public function edit_produk($id_produk)
  {
    $produk_detail = Produk::whereIdProduk($id_produk)->first();
    return view('produk.edit-produk')->with(array('produk' => $produk_detail));
  }

  // ACTION METHOD
  public function tambah_produk_post(Request $request)
  {
    try {
    } catch (\Throwable $th) {
      throw $th;
    }
  }
}
