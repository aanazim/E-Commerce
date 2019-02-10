<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	$categories = Category::where('status',1)->get();
    	$products = Product::where('status',1)->get();
    	return view ('pages.home_content',compact('products'));
    
               }


}
