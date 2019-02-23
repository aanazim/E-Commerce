<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manufacture;
use Brian2694\Toastr\Facades\Toastr;

class Manufacture_PostController extends Controller
{
     public function post ($id){
       $manufacture = Manufacture::find($id);

       $manufacture_products = $manufacture->products()->where('status',1)->get();

       return view ('pages.manufactureshow',compact('manufacture','manufacture_products'));
    }
}
