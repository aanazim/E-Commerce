@extends('admin_layout')

@section('admin_content')

<div id="content" class="span10">
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Manufactures</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						@include('message')
						<form action="{{route('manufacture.update',$manufactures->id)}}" class="form-horizontal" method="post">
							@csrf

							@method('PUT')
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="name">Manufacture Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="name" name="name" class="form-control" value="{{$manufactures->name}}">
							  </div>
							</div>

							       
							<div class="control-group hidden-phone">
							  <label class="control-label" for="description">Manufacture Description</label>
							  <div class="controls">
								<textarea class="cleditor" id="description" rows="12" name="description" class="form-control" cols="8" >{{$manufactures->description }}</textarea>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Edit Manufactures</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection