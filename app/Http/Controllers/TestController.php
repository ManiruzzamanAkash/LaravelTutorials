<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
      $username = "ManiruzzamanAkash";
      // return view('pages.index')->with('username1', $username);
      return view('pages.index')->withUsername($username);
    }
}
