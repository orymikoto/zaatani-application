<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Penjual;
use App\Models\Produk;
use Illuminate\Http\Request;
use Indonesia;

class   ProdukController extends Controller
{
  // VIEW METHOD
  public function mart()
  {
    $produk = Produk::join('penjual', 'penjual.id_penjual', '=', 'produk.id_penjual')->join('indonesia_cities',  'indonesia_cities.code', '=', 'penjual.kota')->get();
    // $kota = \Indonesia::allCities();
    return view('produk.daftar-produk')->with(array('produk' => $produk,));
  }

  public function kategori(Request $request, $id_kategori)
  {
    $produk = Produk::whereIdKategori($id_kategori)->join('penjual', 'penjual.id_penjual', '=', 'produk.id_penjual')->join('indonesia_cities',  'indonesia_cities.code', '=', 'penjual.kota');

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
    $produk_detail = Produk::whereIdProduk($id_produk)->with('penjual', 'kategoriProduk')->join('penjual', 'penjual.id_penjual', '=', 'produk.id_penjual')->join('indonesia_cities',  'indonesia_cities.code', '=', 'penjual.kota')->first();
    $recommend_produk = Produk::whereIdKategori($produk_detail->id_kategori)->join('penjual', 'penjual.id_penjual', '=', 'produk.id_penjual')->join('indonesia_cities',  'indonesia_cities.code', '=', 'penjual.kota')->limit(12)->get();
    return view('produk.detail-produk')->with(array('produk' => $produk_detail, 'recommend_produk' => $recommend_produk));
  }

  public function beli_produk($id_produk)
  {
    $produk_detail = Produk::whereIdProduk($id_produk)->first();
    return view('produk.beli-produk')->with(array('produk' =>  $produk_detail));
  }

  public function tambah_produk()
  {
    $kategori = KategoriProduk::all();
    return view('produk.tambah-produk')->with(array('kategori' => $kategori));
  }

  // public function edit_produk($id_produk)
  // {
  //   $produk_detail = Produk::whereIdProduk($id_produk)->first();
  //   return view('produk.edit-produk')->with(array('produk' => $produk_detail));
  // }

  public function edit_produk($id_produk)
  {
    $produk = Produk::whereIdProduk($id_produk)->with('penjual', 'kategoriProduk')->first();
    $kategori = KategoriProduk::all();

    return view('produk.edit-produk')->with(array('produk' => $produk, 'kategori' => $kategori));
  }

  // ACTION METHOD
  public function tambah_produk_post(Request $request)
  {
    try {
      if ($request->hasFile('foto_produk')) {
        $file = $request->file('foto_produk');
        $filename = $file->getClientOriginalName();
        $filetype = $file->extension();
        $file->storeAs('upload/foto_produk', $filename . '.' . $filetype, 'public');
      }

      $produk = new Produk();
      $produk->nama = $request['nama'];
      $produk->deskripsi = $request['deskripsi'];
      $produk->harga = $request['harga'];
      $produk->satuan = $request['satuan'];
      $produk->foto_produk = '/storage/upload/foto_produk/' . $filename . '.' . $filetype;
      $produk->id_penjual = auth('penjual')->id();
      $produk->id_kategori = $request['id_kategori'];
      $produk->save();

      session()->flash('pesan', 'Data Pendana Berhasil Diperbarui');
      return redirect('/penjual/tambah-produk');
    } catch (\Throwable $th) {
      throw $th;
    }
  }

  public function penjual(Request $request, $id_penjual)
  {
    $produk = Produk::whereIdPenjual($id_penjual);
    // $penjual = Penjual::whereIdPenjual($id_penjual)->first();
    // $kota = \Indonesia::findCity($penjual->kota);

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
    return view('produk.produk-penjual')->with(array('produk' => $produk_kategori, 'total_data' => $total_data));
    // return view('produk.produk-penjual')->with(array('produk' => $produk));
  }
}
