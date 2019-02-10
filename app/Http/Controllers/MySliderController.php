<?php

namespace App\Http\Controllers;

use App\Slider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class MySliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view ('slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('slider.create');
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
          'image' => 'required|image',
        ],
        [ 
         'image.required' => 'Please Provide a Image ',
           
        ]
    );

        $sliders = new Slider ();
        $sliders->status = "0";

         //image insert
       
        if($request->file('image')){
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path ('slider/'.$img);
            Image::make($image)->save($location);
            $sliders->image = $img;

        }


        $sliders->save();
        
        Toastr::success('Data Inserted Successfully','Success');
        return redirect()->route('myslider.index');
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
  
 public function status($id)
    {
        $status = Slider::findOrFail($id);
        $status->status = 1;
        $status->save();

        Toastr::success('Status Updated Successfully', 'Success');
        return redirect()->back();
    }


   public function destroy($id)
    {
        $slider = Slider::find($id);

        if(File::exists('slider/'.$slider->image)){
        File::delete('slider/'.$slider->image);
       }

        $slider->delete();
        

        Toastr::error('Data Inserted Successfully','error');
        return redirect()->route('myslider.index'); 
    }



}
