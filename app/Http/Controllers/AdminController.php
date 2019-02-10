<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
Session_start();
class AdminController extends Controller
{
    public function index (){
    	return view('admin_login');
    }
    

    public function admin_login (Request $request){
      
      $this->validate($request,[
      	      'email' => 'required',
             'password' => 'required|min:6',

      ],[
      	'name.required' => 'Please Insert a Name',
      	'password.required' => 'Please Insert a Password'
      ]
  );

         
      $admin = new Admin();
      $admin->name = "Nazim";
      $admin->email = $request->email;
      $admin->phone = "01724074076";
      $admin->password = $request->password;
      $admin->save();

/*
      if($admin){
        Session::put('name',$request->name);
         Session::put('phone',$request->phone);
        Session::put('id',$request->id);
         return Redirect::to ('dashboard/');
      }else{
        Session::put('message','Email or Password invalid');
        return Redirect::to('admin');
      }*/


     
 


    }


}
