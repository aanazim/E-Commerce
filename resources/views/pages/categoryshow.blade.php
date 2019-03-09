@extends('layout')
@section('content')
<div class="features_items" ><!--features_items-->
<h2 class="title text-center">Features Items</h2>
@foreach($category_products as $product)
<div class="col-sm-4">
    <div class="product-image-wrapper" >
        <div class="single-products">
            <div class="productinfo text-center">
                
                <img src="{{asset('product/'.$product->image)}}" alt="" >
                <h2>{{$product->price}} TK</h2>
                <p>{{$product->name}}</p>
                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{$product->price}} TK</h2>
                   <a style="text-decoration: none" href="{{route('product.details',$product->id)}}"><p>{{$product->name}}</p></a>
                    <a href="{{route('product.details',$product->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
            </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="{{route('product.details',$product->id)}}"><i class="fa fa-plus-square"></i>{{$product->name}}</a></li>
                <li><a href="{{route('product.details',$product->id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
            </ul>
        </div>
    </div>
    
</div>
@endforeach

</div>

<!-- 
<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
<i class="fa fa-angle-left"></i>
</a>
<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
<i class="fa fa-angle-right"></i>
</a> -->
</div>
</div><!--/recommended_items-->
@endsection