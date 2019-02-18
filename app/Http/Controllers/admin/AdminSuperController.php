<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class AdminSuperController extends Controller
{

    public function index(){
	   
	     return view('');
    }

   
	public function logout (){
	/*Session::put('name',null);
    Session::put('id',null);*/
    /*Session::flush();
    return Redirect::to('admin');*/
	}
    
    public function AdminAuthCheck(){
        /* $id = Session::get('id');

    	if($id){
    		return true;
    	}
    	else{
           return Redirect::to('/admin')->send();
    	}*/
    }

}
