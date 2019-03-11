<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Link;
use Illuminate\Support\Facades\Redirect;
use Brian2694\Toastr\Facades\Toastr;
class LinksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $link = Link::findOrFail(1);
      
   return view ('link.index',compact('link')) ;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       Toastr::error('You can not Delete','error');
        return redirect()->route('link.index'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $link = Link::findOrFail(1);

      return view ('link.edit',compact('link'));
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
         $link = link::findOrFail(1);
       $this->validate($request,[

            'facebook' => 'required',
            'twitter'  => 'required',
            'linkedin'=> 'required',
            'dribbble'=> 'required',
            'google'  =>  'required',
       ]);
      
      $link->facebook = $request->facebook;
      $link->twitter  = $request->twitter;
      $link->linkedin = $request->linkedin;
      $link->dribbble = $request->dribbble;
      $link->google   = $request->google;
      $link->save();

      Toastr::success('Edited Successfully', 'success');
      return redirect()->route('link.index');

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
