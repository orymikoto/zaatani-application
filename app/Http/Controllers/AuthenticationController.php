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
      'nama' => 'required',
      'email' => 'required',
      'username' => 'required',
      'password' => 'required'
    ]);
    if (request()->role == 'penjual') {
      $check = Penjual::whereEmail($request->email)->first();
      if (!empty($check)) {
        session()->flash('gagal', 'Email telah digunakan, silakan masukkan email lain atau login dengan akun yang sudah ada');
        return view('auth.register');
      }

      $users = Penjual::create([
        'nama' => $request->nama,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'no_ktp' => $request['no_ktp'],
        'no_hp' => $request['no_hp'],
        'alamat_rumah' => $request['alamat_rumah'],
        'kecamatan' => $request['kecamatan'],
        'kota' => $request['kota'],
        'no_rekening' => $request['no_rekening'],
        'id_bank' => $request['id_bank']
      ]);

      session()->flash('pesan', 'Register berhasil dilakukan silahkan login!');
      return view('auth.login');
    } elseif (request()->role == 'pengusaha') {
      $check = Pengguna::whereEmail($request->email)->first();
      if (!empty($check)) {
        session()->flash('gagal', 'Email telah digunakan, silakan masukkan email lain atau login dengan akun yang sudah ada');
        return view('auth.register');
      }

      $users = Pengguna::create([
        'nama' => $request->nama,
        'username' => $request->username,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'no_ktp' => $request['no_ktp'],
        'no_hp' => $request['no_hp'],
        'alamat_rumah' => $request['alamat_rumah'],
        'kecamatan' => $request['kecamatan'],
        'kota' => $request['kota'],
        'no_rekening' => $request['no_rekening'],
        'id_bank' => $request['id_bank']
      ]);
      return view('auth.login')->with('registered', 'Register berhasil dilakukan silahkan login!');
    } else {
      return view('auth.register')->with('failed', 'Silahkan pilih jenis akun terlebih dahulu');
    }
  }



  public function logout()
  {
    if (auth('admin')->check()) {
      session()->flash('logout', 'Pengguna telah keluar, silahkan login kembali untuk mengakses fitur lengkap aplikasi Vestry');
      auth('admin')->logout();
      return redirect('/');
    } elseif (auth('pendana')->check()) {
      session()->flash('logout', 'Pengguna telah keluar, silahkan login kembali untuk mengakses fitur lengkap aplikasi Vestry');
      auth('pendana')->logout();
      return redirect('/');
    } elseif (auth('pengusaha')->check()) {
      session()->flash('logout', 'Pengguna telah keluar, silahkan login kembali untuk mengakses fitur lengkap aplikasi Vestry');
      auth('pengusaha')->logout();
      return redirect('/');
    }
  }
}
