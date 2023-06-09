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
      $table->unsignedBigInteger('id_produk');
      $table->unsignedBigInteger('id_pengguna');
      $table->integer('jumlah');
      $table->timestamps();

      $table->foreign('produk_id')->references('id')->on('produk');
      $table->foreign('user_id')->references('id')->on('users');
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
