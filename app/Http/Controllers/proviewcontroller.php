<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class proviewcontroller extends Controller {
   public function index(){
    //  $users = DB::select('select * from mobile_numbers');
    $user= DB::table('users')->where('numbers', '12345')

      return view('proviewtable',['users'=>$users]);
   }
}
