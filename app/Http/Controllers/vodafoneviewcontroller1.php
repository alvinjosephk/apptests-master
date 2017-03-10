<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class vodafoneviewcontroller1 extends Controller
{
  public function index(){
   // $users = DB::select('select * from mobile_numbers');
//$users= DB::table('mobile_numbers')->where('number', '12345');
$users = DB::table('mobnum')->join('newservices', 'mobnum.service_id', '=', 'newservices.service_id')->select('number')->where('sim_type','=','prepaid')->where('num_type','=','fancy')->where('provider_name','=','vodafone')->where('sim_status','=','not selected')->get();

/*$users= DB::table('mobile_numbers')->where([
   ['type', '=', $t],
   ['number_type', '=', $nt],)->get();*/
     return view('viewvodafone',['users'=>$users]);
   //  $roles = DB::table('mobile_numbers')->lists('number');

  }
    //
}
