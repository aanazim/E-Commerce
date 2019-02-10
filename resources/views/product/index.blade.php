@extends('admin_layout')
@section('admin_content')
<!-- start: Content -->
<div id="content" class="span10">
	
	
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a>
			<i class="icon-angle-right"></i>
		</li>
		<li><a href="#">Tables</a></li>
	</ul>
	
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th>Product Id</th>
							<th>Product Name</th>
							<th>Product Image</th>
							<th>Product Price</th>
							<th>Category Name</th>
							<th>Manufacture Name</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($rates as $rate)
						<tr>
							<td class="center">{{$rate->id}}</td>
							<td class="center">{{$rate->name}}</td>
							<td class="center"><img src="{{asset('product/'.$rate->image)}}" alt="" style="height: 70px;width:100px;" class="img-fluid"></td>
							<td class="center">{{$rate->price}}</td>
							<td class="center">{{$rate->category->name}}</td>
							<td class="center">{{$rate->manufacture->name}}</td>
							<td class="center">
								@if($rate->status==1)
								
								<span class="label label-success">Active</span>
								
								@else
								<span class="label label-warning">Deactive</span>
								
								@endif
								
							</td>
							<td class="center">
								<!-- status task start -->
								@if($rate->status == 0)
								<a class="btn btn-success" href="{{ route('status.approved', $rate->id) }}" onclick="
									if(confirm('Are you want to update your status?'))
									{
									event.preventDefault();
									document.getElementById('product-status-{{ $rate->id }}').submit();
									}
									else{
									event.preventDefault();
									}
									">
									
									<i class="fas fa-calendar-check"></i>
									
									
									
								</a>
								<form action="{{ route('status.approved', $rate->id) }}" id="product-status-{{ $rate->id }}" method="post" style="display: none;">
									@csrf
									@method('put')
								</form>
								@else
								@endif
								<!-- status task End -->
								
								<a class="btn btn-info" href="{{route('rate.edit',$rate->id)}}">
									<i class="halflings-icon white edit"></i>
								</a>
								<!-- Delete start -->
								<a href="{{ route('rate.destroy', $rate->id) }}" class="btn btn-danger" onclick="if(confirm('Are you sure want to delete category?')){
									event.preventDefault();
									document.getElementById('product-delete-{{ $rate->id }}').submit();} else{
									event.preventDefault();
									}">
									<i class="halflings-icon white trash"></i>
								</a>
								<form action="{{ route('rate.destroy', $rate->id) }}" method="post" id="product-delete-{{ $rate->id }}" style="display: none;">
									@csrf
									@method('delete')
								</form>
								<!-- Delete End -->
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
				<div class="pagination pagination-centered">
					<ul>
						<li><a href="#">Prev</a></li>
						<li class="active">
							<a href="#">1</a>
						</li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	
</div>

<!-- end: Content -->
@endsection