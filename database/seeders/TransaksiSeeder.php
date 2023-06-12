<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Penjual;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $produk = Produk::first();
    $pengguna = Pengguna::first();
    $penjual = Penjual::first();

    Transaksi::create([
      'id_produk' => $produk->id_produk,
      'id_pengguna' => $pengguna->id_pengguna,
      'id_penjual' => $penjual->id_penjual,
      'tanggal_pemesanan' => now()->subDays(7),
      'alamat_pengiriman' => $pengguna->alamat,
      'biaya_aplikasi' => 2000,
      'total_harga' => 87000,
      'status_pembayaran' => false
    ]);

    Transaksi::create([
      'id_produk' => 2,
      'id_pengguna' => $pengguna->id_pengguna,
      'id_penjual' => $penjual->id_penjual,
      'tanggal_pemesanan' => now()->subDays(7),
      'alamat_pengiriman' => $pengguna->alamat,
      'biaya_aplikasi' => 2000,
      'total_harga' => 66000,
      'status_pembayaran' => false
    ]);
  }
}
