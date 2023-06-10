<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Penjual extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;


  protected $table = 'penjual';

  // Define the fillable fields
  protected $fillable = [
    'email',
    'password',
    'nama_lengkap',
    'nomor_telepon',
    'nomor_rekening',
    'jenis_kelamin',
    'tanggal_lahir',
    'provinsi',
    'kota',
    'foto_profil',
    'banner_profil',
  ];

  protected $hidden = [
    'password'
  ];
}
