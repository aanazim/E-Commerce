<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function search (Request $request){

         $search=$request->search;

       $products = Product::where('name','like','%'.$search.'%')
        ->orWhere('short_description','like','%'.$search.'%')
         ->orWhere('price','like','%'.$search.'%')
        ->orderBy('id','desc')->get();
        return view('pages.search',compact('search','products'));

    }
}
