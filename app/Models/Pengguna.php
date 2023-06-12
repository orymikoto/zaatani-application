<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pengguna extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $table = 'pengguna';

  // Define the fillable fields
  protected $fillable = [
    'email',
    'password',
    'nama_lengkap',
    'nomor_telepon',
    'jenis_kelamin',
    'tanggal_lahir',
    'provinsi',
    'kota',
    'alamat',
    'foto_profil',
    'banner_profil',
  ];

  // Define the hidden fields
  protected $hidden = [
    'password',
  ];
}
