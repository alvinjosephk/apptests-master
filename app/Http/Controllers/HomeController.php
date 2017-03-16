<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function choose()
  {
      return view('choose_sim');
  }

//bypass fix
  public function idea()
{
  return view('choose_sim-idea');
}

public function bsnl()
{
  return view('choose_sim-bsnl');
}

public function airtel()
{
  return view('choose_sim-airtel');
}

public function vodafone()
{
  return view('choose_sim-vodafone');
}


public function dashboard()
{
  return view('homes');
}


}
