<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;
use App\Category;
use App\Manufacture;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use File;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
       $rates = Product::all();
       return view ('product.index',compact('rates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('product.create');
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
       
          'category_id' => 'required',
          'manufacture_id' => 'required',
          'short_description' => 'required',
          'long_description' => 'required',
           'name' => 'required',
           'price' => 'required',
           'image' =>'required|image',
           'size' => 'required',
           'color' => 'required',
       
        ],
        [ 'category_id.required' => 'Please Provide a Name',
         'manufacture_id.required' => 'Please Provide a Manufacture_id ',
         'short_description.required' => 'Please Provide a Short Description',
          'long_description.required' => 'Please Provide a Long Description',
           'name.required'  => 'Please Provide a Name',
           'price.required' => 'Please Provide a Price',
           'image.required' =>'Please provide a Image',
           'size.required' => 'Please provide a Size',
           'color.required' => 'Please Provide a Color',
            
        ]
    );

        $products = new Product ();
        $products->category_id = $request->category_id;
    $products->manufacture_id = $request->manufacture_id;
    $products->short_description = $request->short_description;
    $products->long_description = $request->long_description;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->size  = $request->size;
        $products->color = $request->color;
        $products->status = "0";



         //image insert
       
        if($request->file('image')){
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path ('product/'.$img);
            Image::make($image)->save($location);
            $products->image = $img;

        }


        $products->save();

       Toastr::success('Data inserted Successfully','success');
        return redirect()->route('rate.index');
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

      $rate = Product::find($id);
      return view ('product.edit', compact('rate'));
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

        $products = Product::find($id);

         $this->validate($request,[
       
          'category_id' => 'required',
          'manufacture_id' => 'required',
          'short_description.required' => 'Please Provide a Short Description',
          'long_description.required' => 'Please Provide a Long Description',
            'name' => 'required',
           'price' => 'required',
           'image' =>'required|image',
           'size' => 'required',
           'color' => 'required',
       
        ],
        [ 'category_id.required' => 'Please Provide a Name',
         'manufacture_id.required' => 'Please Provide a Manufacture_id ',
         'short_description.required' => 'Please Provide a Short Description',
          'long_description.required' => 'Please provide a Long Description',
           'name.required'  => 'Please Provide a Name',
           'price.required' => 'Please Provide a Price',
           'image.required' =>'Please provide a Image',
           'size.required' => 'Please provide a Size',
           'color.required' => 'Please Provide a Color',
            
        ]
    );

        
        $products->category_id = $request->category_id;
    $products->manufacture_id = $request->manufacture_id;
    $products->short_description = $request->short_description;
    $products->long_description = $request->long_description;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->size  = $request->size;
        $products->color = $request->color;
        $products->status = "0";



         //image insert
       
        if($request->file('image')){
            $image = $request->file('image');
            $img = time().'.'.$image->getClientOriginalExtension();
            $location = public_path ('product/'.$img);

            if(!$img){
              Image::make($image)->save($location);  
                   }
                 else{
               File::delete('product/'.$products->image);
               Image::make($image)->save($location);
                       }

            $products->image = $img;

        }


        $products->save();

       Toastr::success('Data Edited Successfully','success');
        return redirect()->route('rate.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rate = Product::find($id);

        if(File::exists('product/'.$rate->image)){
        File::delete('product/'.$rate->image);
       }

        $rate->delete();

        return redirect()->route('rate.index')->with('success','Deleted Successfully !!');
    }


    public function status($id)
    {
        $status = Product::findOrFail($id);
        $status->status = 1;
        $status->save();

        Toastr::success('Status Updated Successfully', 'Success');
        return redirect()->back();
    }

    
}
