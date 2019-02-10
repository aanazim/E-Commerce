@extends('admin_layout')

@section('admin_content')


<!-- start: Content -->
			<div id="content" class="span10">
			
			@include('message')
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
							  	  <th>Category Id</th>
								  <th>Category Name</th>
							<th>Category Description</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  	@foreach($categories as $category)
							<tr>
								<td>{{$category->id}}</td>
								<td class="center">{{$category->name}}</td>
								<td class="center">{{$category->description}}</td>
								<td class="center">
									@if($category->status==1)
									
									<span class="label label-success">Active</span>
									
									@else
                                      <span class="label label-success">Dective</span>
								      
								      @endif
									
								</td>
								<td class="center">
									<!-- status task start -->
									@if($category->status == 0)
								<a class="btn btn-success" href="{{ route('cstatus.approved', $category->id) }}" onclick="
									if(confirm('Are you want to update your status?'))
									{
									event.preventDefault();
									document.getElementById('category-status-{{ $category->id }}').submit();
									}
									else{
									event.preventDefault();
									}
									">
									
									<i class="fas fa-calendar-check"></i>
									
									
									
								</a>
								<form action="{{ route('cstatus.approved', $category->id) }}" id="category-status-{{ $category->id }}" method="post" style="display: none;">
									@csrf
									@method('put')
								</form>
								@else
								@endif
                                  <!-- status task  End -->


									<a class="btn btn-info" href="{{route('category.edit',$category->id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>


									<!-- Delete start -->
								<a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger" onclick="if(confirm('Are you sure want to delete category?')){
									event.preventDefault();
									document.getElementById('category-delete-{{ $category->id }}').submit();} else{
									event.preventDefault();
									}">
									<i class="halflings-icon white trash"></i>
								</a>
								<form action="{{ route('category.destroy', $category->id) }}" method="post" id="category-delete-{{ $category->id }}" style="display: none;">
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
				</div><!--/span-->
			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
@endsection
