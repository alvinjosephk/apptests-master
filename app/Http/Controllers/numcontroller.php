<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
class numcontroller extends Controller
{
  function insert(Request $req)
  {
      $number= $req->input('num');

    $data= array('number'=>$number);


            DB::table('sim')->insert($data);
     return view('confirm');

  }  //
  function update(Request $req)
  {
    $name = $req->input('status');

   DB::update('update mobnum set sim_status =?  where number = ?',['selected','{{$user->number}}']);

    return view('customers');

  }
}
