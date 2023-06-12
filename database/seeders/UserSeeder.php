<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Pengguna;
use App\Models\Penjual;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */

  public function run(): void
  {
    // ADMIN SEEDER
    Admin::create([
      'email' => 'admin@example.com',
      'nama' => 'Admin User',
      'password' => Hash::make('123456'),
      'nomor_telepon' => '123456789',
      'foto_profil' => '/images/foto_profil/admin.jpg',
      'banner_profil' => '/images/banner/admin.jpg',
    ]);

    //  PENGGUNA SEEDER
    Pengguna::insert([
      [
        'email' => 'user1@zaatani.com',
        'password' => Hash::make('123456'),
        'nama_lengkap' => 'Lintang Semesta',
        'nomor_telepon' => '08123456789',
        'jenis_kelamin' => 'Perempuan',
        'tanggal_lahir' => '2003-3-3',
        'provinsi' => 'Jakarta',
        'kota' => 'Jakarta Selatan',
        'alamat' => 'Kemayoran Baru no 123',
        'foto_profil' => '/images/foto_profil/pengguna1.jpg',
        'banner_profil' => '/images/banner/pengguna1.jpg',
      ],
      [
        'email' => 'user2@zaatani.com',
        'password' => Hash::make('123456'),
        'nama_lengkap' => 'Harry Potter',
        'nomor_telepon' => '08987654321',
        'jenis_kelamin' => 'Laki-laki',
        'tanggal_lahir' => '1995-5-5',
        'provinsi' => 'Jakarta',
        'kota' => 'Jakarta Selatan',
        'alamat' => 'Kemayoran Baru no 124',
        'foto_profil' => '/images/foto_profil/pengguna2.jpg',
        'banner_profil' => '/images/banner/pengguna2.jpg',
      ],
    ]);

    // PENJUAL SEEDER
    Penjual::insert([
      [
        'email' => 'penjual1@zaatani.com',
        'password' => Hash::make('123456'),
        'nama_lengkap' => 'Lintang Semesta',
        'nomor_telepon' => '08123456789',
        'nomor_rekening' => '985500004466',
        'jenis_kelamin' => 'Perempuan',
        'tanggal_lahir' => '2003-3-3',
        'provinsi' => 'Jakarta',
        'kota' => 'Jakarta Selatan',
        'alamat' => 'Kemayoran Baru no 123',
        'foto_profil' => '/images/foto_profil/penjual1.jpg',
        'banner_profil' => '/images/banner/penjual1.jpg',
      ],
      [
        'email' => 'penjual2@zaatani.com',
        'password' => Hash::make('123456'),
        'nama_lengkap' => 'Godzilla Seller',
        'nomor_telepon' => '08987654321',
        'nomor_rekening' => 1234567890,
        'jenis_kelamin' => 'Laki-laki',
        'tanggal_lahir' => '1995-5-5',
        'provinsi' => 'Jakarta',
        'kota' => 'Jakarta Selatan',
        'alamat' => 'Kemayoran Baru no 124',
        'foto_profil' => '/images/foto_profil/penjual2.jpg',
        'banner_profil' => '/images/banner/penjual2.jpg',
      ],
    ]);
  }
}
