<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class proviewcontroller3 extends Controller
{
  public function index(){
   // $users = DB::select('select * from mobile_numbers');
//$users= DB::table('mobile_numbers')->where('number', '12345');
$users = DB::table('mobile_numbers')->select('number')->where('type','=','postpaid')->where('num_type','=','fancy')->get();
/*$users= DB::table('mobile_numbers')->where([
   ['type', '=', $t],
   ['number_type', '=', $nt],)->get();*/
     return view('viewidea',['users'=>$users]);
   //  $roles = DB::table('mobile_numbers')->lists('number');

  }//
}
