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
    Schema::create('barang', function (Blueprint $table) {
      $table->increments('id_barang');
      $table->string('nama_produk');
      $table->string('deskripsi');
      $table->string('berat');
      $table->string('komposisi');
      $table->string('harga');
      $table->string('satuan');

      // FOREIGN KEY COLUMN
      $table->integer('id_kategori')->unsigned();
      $table->integer('id_username')->unsigned();

      // FOREIGN KEY RELATION
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('barang');
  }
};
