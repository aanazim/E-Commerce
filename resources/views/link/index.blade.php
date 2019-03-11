@extends('admin_layout')

@section('admin_content')


<!-- start: Content -->
			<div id="content" class="span10">
			
			<!-- @include('message') -->
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
							  	   <th>Facebook</th>
								   <th>Twitter</th>
							       <th>Linked In</th>
							       <th>Dribbble</th>
							       <th>Google-Plus</th>
								   <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
						  
							<tr>
								<td class="center">{{$link->facebook}}</td>
								<td class="center">{{$link->twitter}}</td>
								<td class="center">{{$link->linkedin}}</td>
								<td class="center">{{$link->dribbble}}</td>
								<td class="center">{{$link->google}}</td>
								

								<td class="center">
							    <a href="{{route('link.show',$link->id)}}" class="btn btn-danger"><i class="halflings-icon white trash"></i></a>

							    <a href="{{route('link.edit',$link->id)}}" class="btn btn-info"><i class="halflings-icon white edit"></i></a>
								</td>
								
								
							</tr>
							                                 
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
				</div>/span
			</div><!-- row -->
    

	</div><!--/.fluid-container
	
			<!-- end: Content -->
@endsection
