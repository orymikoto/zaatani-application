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
    Schema::create('admin', function (Blueprint $table) {
      $table->increments('id_admin');
      $table->string('email')->unique();
      $table->string('nama');
      $table->string('password');
      $table->string('nomor_telepon');
      $table->string('foto_profil')->nullable();
      $table->string('banner_profil')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('admin');
  }
};
