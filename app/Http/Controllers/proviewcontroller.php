<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class proviewcontroller extends Controller {
   public function index(){
    // $users = DB::select('select * from mobile_numbers');
 //$users= DB::table('mobile_numbers')->where('number', '12345');
$users = DB::table('mobile_numbers')->select('number','type')->where('number','=','1234')->get();

      return view('proviewtable',['users'=>$users]);
   }
}
