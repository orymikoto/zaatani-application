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
    Schema::create('permintaan', function (Blueprint $table) {
      $table->increments('id_permintaan');
      $table->string('nama_barang');
      $table->string('deskripsi');
      $table->integer('budget_minimal');
      $table->integer('budget_maksimal');
      $table->string('satuan');
      $table->integer('kebutuhan');

      $table->
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('permintaan');
  }
};
