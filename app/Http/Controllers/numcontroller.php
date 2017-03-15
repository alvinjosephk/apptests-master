<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;


class numcontroller extends Controller
{
  function insert(Request $req)
  {
      $number= $req->input('num');

    $data= array('number'=>$number);


            DB::table('sim')->insert($data);
          //  $number = DB::table('sim')->select('number')->where('reg-id','=','NULL')->get();
          DB::table('mobnum')
                   ->where('number',$number)
                  ->update(['sim_status' =>'selected']);
     return view('customers');

  }  /////
  function update(Request $req)
  {


$number= $req->input('num');
  //  $number = DB::table('sim')->select('number')->where('reg-id','=','null')->get();




  }
}
