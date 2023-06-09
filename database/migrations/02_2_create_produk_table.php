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
    Schema::create('produk', function (Blueprint $table) {
      $table->id();
      $table->string('nama');
      $table->text('deskripsi');
      $table->decimal('harga', 12, 2);
      $table->string('satuan');
      $table->string('alamat');
      $table->unsignedBigInteger('id_pengguna');
      $table->unsignedBigInteger('id_kategori');
      $table->timestamps();

      $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna');
      $table->foreign('id_kategori')->references('id_kategori')->on('kategori_produk');
    });
  }



  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('produk');
  }
};
