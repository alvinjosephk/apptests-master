<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;

class customers_controller extends Controller
{
  public function form()
  {
      return view('customers');
  }  //

 public function insert(Request $req)
{


    $name=$req->input('name');
    $DoB=$req->input('dob');
    $gender=$req->input('gender');
    $houseno= $req->input('house-no');
    $street= $req->input('street');
    $locality= $req->input('locality');
    $city= $req->input('city');
    $district= $req->input('district');
    $state= $req->input('state');

    $nationality= $req->input('nationality');
    $aadhaar= $req->input('aadhaar');



    $data= array('name'=>$name,'dob'=>$DoB,'gender'=>$gender,'house-no'=>$houseno,'street'=>$street,'locality'=>$locality,'city'=>$city,'district'=>$district,'state'=>$state,'nationality'=>$nationality,'aadhaar'=>$aadhaar);

    DB::table('customer')->insert($data);

    $user= DB::table('customer')->select('regid','name')->where('regid',DB::raw("(select max(`regid`) from customer)"))->get();
    //$num=DB::table('sim')->select('simId')->where('simId',DB::raw("(select max(`simId`) from sim)"))->get()

  foreach ($user as $u) {
    # code...
    DB::table('sim')
            ->where('reg-id',0)
          ->update(['reg-id' =>DB::raw($u->regid)]);

  }
  return view('viewformid',['user'=>$user]);
//   DB::table('sim')
//           ->where('reg-id',0)
//         ->update(['reg-id' =>$u]);

  //  $user=DB::table('sim')->select('simId')->where('reg-id','')->get();
  //  return $user;
  //DB::table('sim')->insert(
    //['reg-id' => 7777]
//)->where('simid',$num);


  }
}
