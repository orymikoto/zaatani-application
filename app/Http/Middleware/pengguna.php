<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class pengguna
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (auth('pengguna')->check()) {
      return $next($request);
    }
    session()->flash('pesan', 'Silahkan login sebagai pengguna untuk membuka laman tersebut');
    return redirect('/');
  }
}
