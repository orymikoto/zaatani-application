<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class penjual
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (auth('penjual')->check()) {
      return $next($request);
    }
    session()->flash('pesan', 'Silahkan login sebagai penjual untuk membuka laman tersebut');
    return redirect('/');
  }
}
