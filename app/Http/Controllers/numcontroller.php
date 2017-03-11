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
     return view('confirmidea',['number'=>$number]);

  }  //
  function update(Request $req)
  {

    //$users = DB::table('sim')->select('number')->where('reg-id','=','null')->get();

$number= $req->input('number');
//  DB::update('update mobnum set sim_status =?  where number = ?',['selected',$number]);
  DB::table('mobnum')
            ->where('number', $number)
            ->update(['sim_status' => 'selected']);

   return view('customers');

  }
}
