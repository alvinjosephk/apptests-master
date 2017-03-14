<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class bsnlviewcontroller extends Controller {
   public function index(){

$users = DB::table('mobnum')->join('newservices', 'mobnum.service_id', '=', 'newservices.service_id')->select('number','price')->where('sim_type','=','prepaid')->where('num_type','=','ordinary')->where('provider_name','=','bsnl')->where('sim_status','=','not selected')->get();

      return view('viewbsnl',['users'=>$users]);


   }
}
