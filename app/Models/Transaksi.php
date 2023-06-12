<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
  use HasFactory;

  protected $table = 'transaksi';

  // Define the fillable fields
  protected $fillable = [
    'id_produk',
    'id_pengguna',
    'id_penjual',
    'alamat_pengiriman',
    'harga_barang',
    'ongkos_kirim',
    'biaya_aplikasi',
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

  public function penjual()
  {
    return $this->belongsTo(Penjual::class, 'id_penjual');
  }
}
