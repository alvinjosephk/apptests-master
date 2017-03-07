<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customers_controller extends Controller
{
  public function form()
  {
      return view('customers');
  }  //

 public function insert(Request $req)
{
    $regid= $req->input('regid');

    $name=$req->input('name');
    $DoB=$req->input('DoB');
    $gender=$req->input('gender');
    $houseno= $req->input('houseno');
    $street= $req->input('street');
    $locality= $req->input('locality');
    $city= $req->input('city');
    $district= $req->input('district');
    $state= $req->input('state');
    $emailid= $req->input('email');
    $nationality= $req->input('nationality');
    $aadhaar= $req->input('aadhaar');



    $data= array('regid'=>$regid,'name'=>$name,'DoB'=>$DoB,'gender'=>$gender,'houseno'=>$houseno,'street'=>$street,'locality'=>$locality,'city'=>$city,'district'=>$district,'state'=>$state,'emailid'=>$emailid,'nationality'=>$nationality,'aadhaar'=>$aadhaar);

    DB::table('customer')->insert($data);


    echo 'Data Entered Successfully';


  }}
