<?php

namespace App\Http\Controllers;


use App\Product;
use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        
        /*$link = Link::findOrFail(1);*/
        return view('layout');
    }

/*public function user()
    {
        return view('admin.dashboard');
    }*/


}
