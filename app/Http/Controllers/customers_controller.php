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


    echo 'Data Entered Successfully';


  }}
