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
    Schema::create('transaksi', function (Blueprint $table) {
      $table->increments('id_transaksi');
      $table->unsignedInteger('id_produk');
      $table->unsignedInteger('id_pengguna');
      $table->unsignedInteger('id_penjual');
      $table->date('tanggal_pemesanan');
      $table->string('alamat_pengiriman');
      $table->integer('biaya_aplikasi');
      $table->integer('total_harga');
      $table->boolean('status_pembayaran');
      $table->timestamps();

      $table->foreign('id_produk')->references('id_produk')->on('produk');
      $table->foreign('id_pengguna')->references('id_pengguna')->on('pengguna');
      $table->foreign('id_penjual')->references('id_penjual')->on('penjual');
    });
  }



  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('transaksi');
  }
};
