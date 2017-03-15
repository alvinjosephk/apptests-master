<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class vodafoneviewcontroller extends Controller {
   public function index(){

$users = DB::table('mobnum')->join('newservices', 'mobnum.service_id', '=', 'newservices.service_id')->select('number','price')->where('sim_type','=','prepaid')->where('num_type','=','ordinary')->where('provider_name','=','vodafone')->where('sim_status','=','not selected')->get();

      return view('viewvodafone',['users'=>$users]);


   }
}
