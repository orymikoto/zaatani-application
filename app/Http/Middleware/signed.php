<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class signed
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (auth('pengguna')->check() || auth('admin')->check() || auth('penjual')->check()) {
      return $next($request);
    }
    session()->flash('pesan', 'Silahkan login akun terlebih dahulu');
    return redirect('/login');
  }
}
