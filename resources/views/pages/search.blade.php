@extends('layout')

@section('content')

<div id="content" class="span10">
	
	<div class="row-fluid sortable">
		<div class="box span12">
			
			<div class="box-content">
				<h3 style="margin-bottom: 20px;color: black;">Products Description({{request('search')}})</h3>
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Product Name</th>
							<th>Product Image</th>
							<th>Product Price</th>
							<th>Product Color</th>
							<th>Product Size</th>
							<th>Category Name</th>
							<th>Manufacture Name</th>
							<th>Short Description</th>
							<th>Long Description</th>
							
						</tr>
					</thead>
					<tbody>
						
						@foreach($products as $product)
						<tr>
							<td class="center"><a href="{{route('product.details',$product->id)}}">{{$product->name}}</a></td>
							<td class="center"><a href="{{route('product.details',$product->id)}}"><img src="{{asset('product/'.$product->image)}}" alt="" style="height: 70px;width:100px;" class="img-fluid"></a></td>
							<td class="center">{{$product->price}}</td>
							<td class="center">{{$product->size}}</td>
							<td class="center">{{$product->color}}</td>
							<td class="center">{{$product->category->name}}</td>
							<td class="center">{{$product->manufacture->name}}</td>
							<td class="center">{{$product->short_description}}</td>
							<td class="center">{{$product->long_description}}</td>
							
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
	
</div>



@endsection