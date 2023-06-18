<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
  use HasFactory;

  protected $table = 'produk';

  // Define the fillable fields
  protected $fillable = [
    'nama',
    'deskripsi',
    'harga',
    'satuan',
    'alamat',
    'foto_produk',
    'id_penjual',
    'id_kategori',
  ];

  // Define the relationships
  public function penjual()
  {
    return $this->belongsTo(Penjual::class, 'id_penjual', 'id_penjual');
  }

  public function kategoriProduk()
  {
    return $this->belongsTo(KategoriProduk::class, 'id_kategori', 'id_kategori');
  }
}
