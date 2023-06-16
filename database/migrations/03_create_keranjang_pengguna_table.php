<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up()
  {
    Schema::create('keranjang_pengguna', function (Blueprint $table) {
      $table->increments('id_keranjang_pengguna');
      $table->unsignedInteger('id_produk');
      $table->unsignedInteger('id_pengguna');
      $table->integer('jumlah');
      $table->integer('total_harga');
      $table->timestamps();

      $table->foreign('id_produk')->references('id_produk')->on('produk');
      $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('keranjang_pengguna');
  }
};
