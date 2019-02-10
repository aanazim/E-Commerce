@extends('admin_layout')
@section('admin_content')
<div id="content" class="span10">
	
	
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Products</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				@include('message')
				<form action="{{ route('rate.store') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
					@csrf
					<fieldset>
						<div class="form-group" >
							<?php
							$categories = App\Category::all();
							?>
							<label class="control-label">Category Name</label>
							<select class="form-control" name="category_id" >
								@foreach($categories as $category)
								<option value="{{$category->id}}"> {{$category->name}}</option>
								@endforeach
							</select>
						</div>
						<?php
						$manufactures = App\Manufacture::all();
						?>
						<div class="form-group" style="margin-top: 10px;" >
							<div class="form-group" >
								<label class="control-label">Manufacture Name</label>
								<select class="form-control" name="manufacture_id" >
									@foreach($manufactures as $manufacture)
									<option value="{{$manufacture->id}}"> {{$manufacture->name}}</option>
									@endforeach
								</select>
							</div>
							
							<div class="control-group hidden-phone" style="margin-top: 10px;">
								<label class="control-label" for="description">Short Description</label>
								<div class="controls">
									<textarea class="cleditor" id="description" rows="12" name="short_description" class="form-control" cols="8"></textarea>
								</div>
							</div>
							<div class="control-group hidden-phone">
								<label class="control-label" for="description">Long Description</label>
								<div class="controls">
									<textarea class="cleditor" id="description" rows="12" name="long_description" class="form-control" cols="8"></textarea>
								</div>
							</div>


                           <div class="control-group">
								<label class="control-label" for="price">Product Name</label>
								<div class="controls">
									<input type="text" class="input-xlarge datepicker" id="name" name="name" class="form-control">
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="price">Product Price</label>
								<div class="controls">
									<input type="text" class="input-xlarge datepicker" id="name" name="price" class="form-control">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">Product Image</label>
								<div class="controls">
									<input type="file" class="input-xlarge datepicker" id="name" name="image" class="form-control">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">Product Size</label>
								<div class="controls">
									<input type="text" class="input-xlarge datepicker" id="name" name="size" class="form-control">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">Product Color</label>
								<div class="controls">
									<input type="text" class="input-xlarge datepicker" id="name" name="color" class="form-control">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="status">Publication Status</label>
								<div class="controls">
									<input type="checkbox" class="input-xlarge datepicker" id="status" name="status" value="0" class="form-control">
								</div>
							</div>
							<div class="form-actions">
								<button type="submit" class="btn btn-primary">Add Products</button>
								<button type="reset" class="btn">Cancel</button>
							</div>
						</fieldset>
					</form>
				</div>
				</div><!--/span-->
				</div><!--/row-->
				@endsection