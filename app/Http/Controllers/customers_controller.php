<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customers_controller extends Controller
{
  public function form()
  {
      return view('customers');
  }
}
