<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('status',1)->get();
        $products = Product::where('status',1)->get();
        return view ('pages.add-to-cart',compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    
        $qty = $request->qty;
        $product_id = $request->product_id;
        $product_info = Product::find($product_id);

       /*$data['qty']=$request->qty;
       $data['id']=$product_info->product_id;
       $data['name']=$product_info->name;
       $data['price']=$product_info->price;
       $data['options']['image']=$product_info->image;*/
       Cart::add($product_info->id, $product_info->name, $qty, $product_info->price, [
            'image' => $product_info->image,
       ]);
       // return 'Successfull';
       // return Cart::add($data);
       return  redirect()->route('add-to-cart.index');

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($rowId)
    {  

         
      Cart::update($rowId,0);
    return  redirect()->route('add-to-cart.index');
          
       
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
    public function update(Request $request,$rowId)
    {
         $qty = $request->qty;
      
         Cart::update($rowId, $qty);

      return  redirect()->route('add-to-cart.index');

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
