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
    Schema::create('pengguna', function (Blueprint $table) {
      $table->increments('id_pengguna');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('nama_lengkap');
      $table->string('nomor_telepon');
      $table->string('jenis_kelamin');
      $table->date('tanggal_lahir');
      $table->string('provinsi');
      $table->string('kota');
      $table->string('alamat');
      $table->string('foto_profil')->nullable();
      $table->string('banner_profil')->nullable();
      $table->timestamps();
    });
  }


  /**
   * Reverse the migrations.
   */
  public function down()
  {
    Schema::dropIfExists('pengguna');
  }
};
