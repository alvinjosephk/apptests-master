<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use DB;

class AdminController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }



    public function admin()
    {
      $user=0;
      return view('admin')->withUser($user);
    }

    public function search(Request $request)
       {
           $id= $request->input('id');
        //   $user =Customer::where('regid',$id)->get();
    $user=DB::table('sim')->join('mobnum','sim.number','=','mobnum.number')->join('customer','sim.reg-id','=','customer.regid')->select('*')->select('number')->where('regid',$id)->get();
           return view('admin')->withUser($user);
       }









}
