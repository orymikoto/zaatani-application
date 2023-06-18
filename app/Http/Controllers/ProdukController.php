<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class   ProdukController extends Controller
{
  // VIEW METHOD
  public function mart()
  {
    $produk = Produk::with('penjual', 'kategoriProduk')->get();
    return view('produk.daftar-produk')->with(array('produk' => $produk));
  }

  public function kategori(Request $request, $id_kategori)
  {
    $produk = Produk::whereIdKategori($id_kategori);

    if ($request->has('harga')) {
      $produk->where('harga', '<=', $request->harga);
    }
    if ($request->has('sort')) {
      if ($request->sort == 'price_asc') {
        $produk->orderBy('harga', 'ASC');
      } elseif ($request->sort == 'price_desc') {
        $produk->orderBy('harga', 'DESC');
      } elseif ($request->sort == 'new') {
        $produk->orderBy('created_at', 'DESC');
      } elseif ($request->sort == 'old') {
        $produk->orderBy('created_at', 'ASC');
      }
    }
    $total_data = count($produk->get());
    $produk_kategori = $produk->paginate(24);
    return view('produk.daftar-produk-kategori')->with(array('produk' => $produk_kategori, 'total_data' => $total_data));
  }

  public function detail_produk($id_produk)
  {
    $produk_detail = Produk::whereIdProduk($id_produk)->with('penjual', 'kategoriProduk')->first();
    $recommend_produk = Produk::whereIdKategori($produk_detail->id_kategori)->limit(12)->get();
    return view('produk.detail-produk')->with(array('produk' => $produk_detail, 'recommend_produk' => $recommend_produk));
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
