<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Facades\Redirect;
// use session;
session_start();

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view ('pages.login-check');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pages.checkout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,[
               'name' => 'required',
               'email' => 'required|email',
               'password' => 'required|min:6',
               'mobile' => 'required',
          ],
                      [  
                        'name.required' => 'Please Provide a Name',
                       'email.required' => 'Please Provide a Email',
                       'password.required' => 'Please Provide a Password',
                       'mobile.required' => 'Please Provide a Number',
                       
                        ]
       );
        

        $checks = new Customer();
       
        $checks->name = $request->name;
        $checks->email = $request->name;
        $checks->password = $request->password;
        $checks->mobile = $request->mobile;
        $checks->save();
        
     
      

    return redirect()->route('check.create')->with('success','Data Inserted Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function user_logout()
    {
      Session::forget('id');

      return redirect()->route('layout');
    }
}
