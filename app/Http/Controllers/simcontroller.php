<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Requests;


class simcontroller extends Controller
{
  function index()
  {
    $user= DB::table('customer')->select('reg-id')->where('reg-id',DB::raw("(select max(`reg-id`) from customer)"))->get();
    DB::table('sim')
             ->where('reg-id','NULL')
            ->update(['reg-id' =>$user]);

  }}
