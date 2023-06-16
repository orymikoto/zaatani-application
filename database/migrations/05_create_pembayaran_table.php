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
    Schema::create('pembayaran', function (Blueprint $table) {
      $table->increments('id_pembayaran');
      $table->unsignedInteger('id_transaksi');
      $table->string('metode_pembayaran');
      $table->string('bukti_pembayaran')->nullable();
      $table->integer('jumlah_pembayaran');
      $table->boolean('status_pembayaran');
      $table->timestamps();

      $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('pembayaran');
  }
};
