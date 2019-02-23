<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class Product_detailsController extends Controller
{
     public function details ($id){

      
      $products = Product::find($id);
     
    
      return view ('pages.details',compact('products'));
    }
}
