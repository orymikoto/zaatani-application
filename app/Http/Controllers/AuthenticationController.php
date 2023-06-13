<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
  // VIEW FUNCTION
  public function login()
  {
    return view('authentication.login');
  }
}
