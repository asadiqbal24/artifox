<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome()
    {
     return view('user.welcome');
    }
    public function get_started()
    {
      return view('user.get_started');
    }
}
