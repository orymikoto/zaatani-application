<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('detail_transaksi', function (Blueprint $table) {
      $table->increments('id_detail_transaksi');
      $table->unsignedInteger('id_transaksi');
      $table->unsignedInteger('id_produk');
      $table->integer('harga_barang');
      $table->integer('jumlah');
      $table->integer('harga_total');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('detail_transaksi_keranjang');
  }
};
