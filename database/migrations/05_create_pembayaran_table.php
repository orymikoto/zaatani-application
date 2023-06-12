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
      $table->enum('metode_pembayaran', ['Transfer Bank', 'Transfer E-Money', 'COD']);
      $table->string('bukti_pembayaran')->nullable();
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
