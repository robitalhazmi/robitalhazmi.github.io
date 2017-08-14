<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function __contruct()
  {
    # code...
  }

  public function getHome()
  {
    return view('home');
  }
}
