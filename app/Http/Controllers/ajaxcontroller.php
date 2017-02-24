<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AjaxController extends Controller {
   public function index($n){
      $msg = DB::table('mobile_numbers')->select('number')->where('type','=',$n)->get();;
      return response()->json(array('msg'=> $msg), 200);
   }
}
