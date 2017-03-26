<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class AdminController extends Controller
{
  public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }



    public function admin()
    {
      $user=0;
      return view('admin')->withUser($user);
    }

    public function search(Request $request)
       {
           $id= $request->input('id');
           $user =Customer::where('regid',$id)->get();
           return view('admin')->withUser($user);

       }



       public function destroy($id)
       {
          // $user=Customer::find($id);

          Customer::where('regid',$id)->delete();


            // $user->delete();
            return redirect()->back();
           }




}
