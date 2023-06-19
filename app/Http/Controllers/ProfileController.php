<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Pengguna;
use App\Models\Penjual;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

  private function upload_foto_profil($file)
  {
    $filename = uniqid('foto_profil_');
    $filetype = $file->extension();
    $destinationPath = 'upload/foto_profil';
    $file->storeAs('upload/foto_profil/', $filename . '.' . $filetype, 'public');

    return '/storage/upload/foto_profil/' . $filename . '.' . $filetype;
  }

  public function profile()
  {
    $province = \Indonesia::allProvinces()->sortBy('name');
    $city = \Indonesia::allCities();
    if (auth('admin')->check()) {
      $user = Admin::whereIdAdmin(auth('admin')->id())->first();
      return view('profile.index')->with(array('detailUser' => $user, 'city' => $city, 'province' => $province));
    } elseif (auth('pengguna')) {
      $user = Pengguna::whereIdPengguna(auth('pengguna')->id())->first();
      return view('profile.index')->with(array('detailUser' => $user, 'city' => $city, 'province' => $province));
    } elseif (auth('penjual')) {
      $user = Penjual::whereIdPenjual(auth('penjual')->id())->first();
      return view('profile.index')->with(array('detailUser' => $user, 'city' => $city, 'province' => $province));
    }
  }

  public function profile_edit_post(Request $request)
  {
    try {
      $validate = $request->validate([
        'email' => 'required',
      ]);

      $foto_profil = $request->file('foto_profil');
      // dd($foto_profil);
      if (!empty($foto_profil)) {
        $path_foto_profil = $this->upload_foto_profil($foto_profil);
      }
      if (auth('admin')->check()) {
        $old_admin = Admin::whereIdAdmin(auth('admin')->id())->first();
        $admin = Admin::where('id_admin', auth('admin')->user()->id_admin)->update([
          'nama' => $request->nama,
          'email' => $request->email,
          'nomor_telepon' => $request['nomor_telepon'],
          'kota' => $request['kota'],
          'provinsi' => $request['provinsi'],
          'foto_profil' => !empty($foto_profil) ? (string)$path_foto_profil : $old_admin->foto_profil
        ]);

        session()->flash('updated', 'Data Admin Berhasil Diperbarui');
        return $this->profile();
      } elseif (auth('penjual')->check()) {
        $old_penjual = Penjual::whereIdPenjual(auth('penjual')->id())->first();
        $pendana = Penjual::where('id_penjual', auth('penjual')->user()->id_penjual)->update([
          'nama_lengkap' => $request->nama_lengkap,
          'email' => $request->email,
          'tanggal_lahir' => $request->tanggal_lahir,
          'jenis_kelamin' => $request->jenis_kelamin,
          'nomor_telepon' => $request['nomor_telepon'],
          'nomor_rekening' => $request['nomor_rekening'],
          'alamat' => $request['alamat'],
          'foto_profil' => !empty($foto_profil) ? (string)$path_foto_profil : $old_penjual->foto_profil,
          'kota' => $request['kota'],
          'provinsi' => $request['provinsi'],
        ]);

        session()->flash('updated', 'Data Pendana Berhasil Diperbarui');
        return $this->profile();
      } elseif (auth('pengguna')->check()) {
        $old_penjual = Penjual::whereIdPenjual(auth('penjual')->id())->first();
        $pengusaha = Pengguna::where('id_pengguna', auth('pengguna')->user()->id_pengguna)->update([
          'nama_lengkap' => $request->nama_lengkap,
          'email' => $request->email,
          'tanggal_lahir' => $request->tanggal_lahir,
          'jenis_kelamin' => $request->jenis_kelamin,
          'nomor_telepon' => $request['nomor_telepon'],
          'foto_profil' => !empty($foto_profil) ? (string)$path_foto_profil : $old_penjual->foto_profil,
          'alamat' => $request['alamat'],
          'kota' => $request['kota'],
          'provinsi' => $request['provinsi'],
        ]);

        session()->flash('updated', 'Data Pengusaha Berhasil Diperbarui');
        return $this->profile();
      }
    } catch (\Throwable $th) {
      dd($th);
    }
  }
}
