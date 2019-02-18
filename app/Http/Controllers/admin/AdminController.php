<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
// use session;
session_start();
class AdminController extends Controller
{
    public function index (){
    	/*return view('admin_login');*/
    }
    

    public function admin_login (Request $request){
      
     /* $this->validate($request,[
      	      'email' => 'required|email',
             'password' => 'required|min:6',

      ],[
      	'email.required' => 'Please Insert a Email',
      	'password.required' => 'Please Insert a Password',
      ]
  );

         
      $admin = new Admin();
      $admin->name = "Nazim";
      $admin->email = $request->email;
      $admin->phone = "01724074076";
      $admin->password = $request->password;
      $admin->save();

      
      if($admin){
        Session::put('name', $request->name);
        Session::put('phone', $request->phone);
        Session::put('id', $request->id);
         return view ('admin.dashboard');
      }else{
        Session::put('message','Email or Password invalid');
        return Redirect()->route('admin');
      }

     /* return view('admin.dashboard');*/

    }
*/

}
