<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {


        $categories = Category::all();
        return view ('category.index',compact('categories')) ; 
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
      return view ('category.create');
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
          /*'status' => 'required',*/
       
        ],
        [ 'name.required' => 'Please Provide a Name',
         'description.required' => 'Please Provide a Description ',
            /*'status.required' => 'Please Provide a Status',*/
        ]
    );

        $categories = new Category ();
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->status = "0";
        $categories->save();

        return redirect()->route('category.index')->with('success','Data Inserted Successfully');
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
        
        $categories = Category::find($id);
        return view('category.edit',compact('categories'));
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

        $categories = Category::find($id);
         $this->validate($request,[
       
          'name' => 'required',
          'description' => 'required',
         
       
        ],
        [ 'name.required' => 'Please Provide a Name',
         'description.required' => 'Please provide a Description ',
        ]
    );

       
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->status = "0";
        $categories->save();

        return redirect()->route('category.index')->with('success','Data Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    
    public function destroy($id)
     {
         Category::find($id)->delete();
        Toastr::error('Deleted Successfully','error');
       return redirect()->route('category.index')->with('success','Deleted Successfully');
    }


    public function status($id)
    {
        $status = Category::findOrFail($id);
        $status->status = 1;
        $status->save();

        Toastr::success('Status Updated Successfully', 'Success');
        return redirect()->back();
    }

   



      /*public function AdminAuthCheck(){
           $id = Session::get('id');

        if($id){
            return true;
        }
        else{
             return Redirect::to('/admin')->send();
        }
      }*/
   

}      

