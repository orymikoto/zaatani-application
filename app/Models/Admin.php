<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  protected $table = 'admin';
  protected $primaryKey = 'id_admin';
  protected $fillable = [
    'email',
    'password',
    'nama',
    'password',
    'nomor_telepon',
    'foto_profil',
    'banner_profil',
  ];

  protected $hidden = [
    'password',
    'remember_token',
  ];
}
