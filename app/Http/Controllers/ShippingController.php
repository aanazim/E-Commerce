<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shipping;
use Illuminate\Support\Facades\Session;
class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
               'email' => 'required|email',
               'first_name' => 'required',
               'last_name' => 'required',
               'address' => 'required',
               'number' => 'required',
               'city' => 'required',
          ],    

                    [  
                        'email.required' => 'Please Provide a Email',
                       'first_name.required' => 'Please Provide a First Name',
                       'last_name.required' => 'Please Provide a Last Name',
                       'address.required' => 'Please Provide a Address',
                       'number.required' => 'Please Provide a Number',
                       'city.required' => 'Please Provide a City',
                       
                        ]
       );
        

        $shippings = new Shipping(); 
        $shippings->email = $request->email;
        $shippings->first_name = $request->first_name;
        $shippings->last_name = $request->last_name;
        $shippings->address = $request->address;
        $shippings->number = $request->number;
        $shippings->city = $request->city;
        $shippings->save();
        
       Session::put('id', $shippings->id);
      

    return redirect()->route('payment.index')->with('success','Data Inserted Successfully');
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
}
