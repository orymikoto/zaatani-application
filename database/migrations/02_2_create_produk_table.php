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
      $table->increments('id_produk');
      $table->string('nama');
      $table->text('deskripsi');
      $table->decimal('harga', 12, 2);
      $table->string('satuan');
      $table->string('alamat');

      $table->integer('id_penjual')->unsigned();
      $table->integer('id_kategori')->unsigned();

      $table->foreign('id_penjual')->references('id_penjual')->on('penjual');
      $table->foreign('id_kategori')->references('id_kategori')->on('kategori_produk');

      $table->timestamps();
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
