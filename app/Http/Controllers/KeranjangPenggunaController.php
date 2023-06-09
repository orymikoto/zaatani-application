<?php

namespace App\Http\Controllers;

use App\Models\KeranjangPengguna;
use Illuminate\Http\Request;

class KeranjangPenggunaController extends Controller
{
  public function index()
  {
    $keranjangItems = KeranjangPengguna::all();

    return view('keranjang.index', compact('keranjangItems'));
  }

  public function increaseQuantity(Request $request, $id)
  {
    $keranjangItem = KeranjangPengguna::findOrFail($id);
    $keranjangItem->jumlah += 1;
    $keranjangItem->save();

    return redirect()->route('keranjang.index');
  }

  public function decreaseQuantity(Request $request, $id)
  {
    $keranjangItem = KeranjangPengguna::findOrFail($id);
    if ($keranjangItem->jumlah > 1) {
      $keranjangItem->jumlah -= 1;
      $keranjangItem->save();
    }

    return redirect()->route('keranjang.index');
  }
}
