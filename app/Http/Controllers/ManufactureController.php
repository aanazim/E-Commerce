<?php

namespace App\Http\Controllers;

use App\Manufacture;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ManufactureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $manufactures = Manufacture::all();
        return view ('manufacture.index',compact('manufactures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('manufacture.create');
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
          'description' => 'required',
          
       
        ],
        [ 'name.required' => 'Please Provide a Name',
         'description.required' => 'Please Provide a Description ',
            
        ]
    );

        $manufactures = new Manufacture ();
        $manufactures->name = $request->name;
        $manufactures->description = $request->description;
        $manufactures->status = "0";
        $manufactures->save();
       Toastr::success('Data inserted Successfully','success');
        return redirect()->route('manufacture.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $manufactures = Manufacture::find($id);
        return view ('manufacture.edit',compact('manufactures'));
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
        $manufactures = Manufacture::find($id);
        $this->validate($request,[
       
          'name' => 'required',
          'description' => 'required',
          
       
        ],
        [ 'name.required' => 'Please Provide a Name',
         'description.required' => 'Please Provide a Description ',
            
        ]
    );

        
        $manufactures->name = $request->name;
        $manufactures->description = $request->description;
        $manufactures->status = "0";
        $manufactures->save();
       Toastr::success('Data Edited Successfully','success');
        return redirect()->route('manufacture.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Manufacture::find($id)->delete();
         Toastr::error('Data Deleted Successfully','error');
        return redirect()->route('manufacture.index');
    }


    public function status($id)
    {
        $status = Manufacture::findOrFail($id);
        $status->status = 1;
        $status->save();

        Toastr::success('Status Updated Successfully', 'Success');
        return redirect()->back();
    }


    public function post ($id){
       $manufacture = Manufacture::find($id);

       $manufacture_products = $manufacture->products()->where('status',1)->get();

       return view ('pages.manufactureshow',compact('manufacture','manufacture_products'));
    }

}
