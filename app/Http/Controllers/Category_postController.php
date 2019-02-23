<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Category_postController extends Controller
{
     public function post($id){

        $category = Category::find($id);
        $category_products = $category->products()->where('status', 1)->get();
        return view ('pages.categoryshow',compact('category', 'category_products'));
          
      }
}
