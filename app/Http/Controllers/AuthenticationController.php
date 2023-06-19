<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Penjual;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
  // VIEW FUNCTION
  public function login()
  {
    return view('authentication.login');
  }

  public function register()
  {
    $province = \Indonesia::allProvinces();
    $city = \Indonesia::allCities()->sortBy('name');
    return view('authentication.register')->with(array(
      'city' => $city, 'province' => $province
    ));
  }

  // ACTION FUNCTION
  public function login_post(Request $request)
  {
    $validation = $request->validate([
      'email' => 'required',
      'password' => 'required'
    ]);
    // dd(request()->role);
    if (request()->role == 'admin') {
      if (Auth::guard('admin')->attempt($validation)) {
        return redirect('/');
      }
      session()->flash('pesan', 'Username atau password salah');
      return redirect('/login');
    } elseif (request()->role == 'penjual') {
      if (Auth::guard('penjual')->attempt($validation)) {
        return redirect('/');
      }
      session()->flash('pesan', 'Username atau password salah');
      return redirect('/login');
    } elseif (request()->role == 'pengguna') {
      if (Auth::guard('pengguna')->attempt($validation)) {
        // dd(auth('pengguna')->user());
        return redirect('/');
      }
      session()->flash('pesan', 'Username atau password salah');
      return redirect('/login');
    } else {
      session()->flash('pesan', 'Silahkan pilih role terlebih dahulu');
      return redirect('/login');
    }
  }

  public function register_post(Request $request)
  {
    $validation = $request->validate([
      'nama_lengkap' => 'required',
      'email' => 'required',
      'password' => 'required'
    ]);
    if (request()->role == 'penjual') {
      $check = Penjual::whereEmail($request->email)->first();
      if (!empty($check)) {
        session()->flash('pesan', 'Email telah digunakan, silakan masukkan email lain atau login dengan akun yang sudah ada');
        return redirect('/register');
      }
      $users = Penjual::create([
        'nama_lengkap' => $request->nama_lengkap,
        'email' => $request->email,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'password' => Hash::make($request->password),
        'nomor_telepon' => $request['nomor_telepon'],
        'nomor_rekening' => $request['nomor_rekening'],
        'alamat' => $request['alamat'],
        'kota' => $request['kota'],
        'provinsi' => $request['provinsi'],
      ]);

      session()->flash('pesan', 'Register berhasil dilakukan silahkan login!');
      return redirect('/login');
    } elseif (request()->role == 'pengguna') {
      $check = Pengguna::whereEmail($request->email)->first();
      if (!empty($check)) {
        session()->flash('pesan', 'Email telah digunakan, silakan masukkan email lain atau login dengan akun yang sudah ada');
        return redirect('/register');
      }

      $users = Pengguna::create([
        'nama_lengkap' => $request->nama_lengkap,
        'email' => $request->email,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jenis_kelamin' => $request->jenis_kelamin,
        'password' => Hash::make($request->password),
        'nomor_telepon' => $request['nomor_telepon'],
        'alamat' => $request['alamat'],
        'kota' => $request['kota'],
        'provinsi' => $request['provinsi'],
      ]);
      session()->flash('pesan', 'Berhasil');
      return redirect('/login');
    } else {
      session()->flash('pesan', 'Silahkan Pilih Role');
      return redirect('/register');
    }
  }



  public function logout()
  {
    if (auth('admin')->check()) {
      session()->flash('pesan', 'Pengguna telah keluar, silahkan login kembali untuk mengakses fitur lengkap aplikasi Vestry');
      auth('admin')->logout();
      return redirect('/');
    } elseif (auth('penjual')->check()) {
      session()->flash('pesan', 'Pengguna telah keluar, silahkan login kembali untuk mengakses fitur lengkap aplikasi Vestry');
      auth('penjual')->logout();
      return redirect('/');
    } elseif (auth('pengguna')->check()) {
      session()->flash('pesan', 'Pengguna telah keluar, silahkan login kembali untuk mengakses fitur lengkap aplikasi Vestry');
      auth('pengguna')->logout();
      return redirect('/');
    }
  }
}
