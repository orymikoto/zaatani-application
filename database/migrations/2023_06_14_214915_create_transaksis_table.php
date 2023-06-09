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
      $table->id();
      $table->unsignedBigInteger('produk_id');
      $table->unsignedBigInteger('user_id');
      $table->decimal('jumlah', 8, 2);
      $table->timestamps();

      $table->foreign('produk_id')->references('id')->on('produk');
      $table->foreign('user_id')->references('id')->on('users');
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
