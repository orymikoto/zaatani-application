<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KeranjangPengguna extends Model
{
  use HasFactory;

  protected $table = 'keranjang_pengguna';
  protected $primaryKey = 'id_keranjang_pengguna';
  // Define the fillable fields
  protected $fillable = [
    'id_produk',
    'id_pengguna',
    'jumlah',
    'total_harga',
  ];

  // Define the relationships
  public function produk()
  {
    return $this->belongsTo(Produk::class, 'id_produk');
  }

  public function pengguna()
  {
    return $this->belongsTo(Pengguna::class, 'id_pengguna');
  }
}
