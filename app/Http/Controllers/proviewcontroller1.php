<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class proviewcontroller1 extends Controller
{
  public function index(){
   // $users = DB::select('select * from mobile_numbers');
//$users= DB::table('mobile_numbers')->where('number', '12345');
$users = DB::table('mobnum')->join('newservices', 'mobnum.service_id', '=', 'newservices.service_id')->select('number')->where('provider_name','=','idea')->where('sim_type','=','prepaid')->where('num_type','=','fancy')->where('sim_status','=','not selected')->get();

/*$users= DB::table('mobile_numbers')->where([
   ['type', '=', $t],
   ['number_type', '=', $nt],)->get();*/
     return view('viewidea',['users'=>$users]);
   //  $roles = DB::table('mobile_numbers')->lists('number');

  }
    //
}
