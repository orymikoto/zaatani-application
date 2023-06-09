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
      $table->unsignedBigInteger('penjual_id');
      $table->unsignedBigInteger('kategori_id');
      $table->timestamps();

      $table->foreign('penjual_id')->references('id')->on('penjual');
      $table->foreign('kategori_id')->references('id')->on('kategori_produk');
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
