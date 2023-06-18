<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class admin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next): Response
  {
    if (auth('admin')->check()) {
      return $next($request);
    }
    session()->flash('pesan', 'Anda tidak memiliki akses terhadap laman tersebut');
    return redirect('/');
  }
}
