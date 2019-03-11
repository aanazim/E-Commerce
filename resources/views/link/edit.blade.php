@extends('admin_layout')

@section('admin_content')

<div id="content" class="span10">
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Edit Links</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<form action="{{route('link.update',$link->id)}}" class="form-horizontal" method="post">
							@csrf

							@method('PUT')
						  <fieldset>
							
							<div class="control-group">
							  <label class="control-label" for="name">Facebook</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="name" name="facebook" class="form-control" value="{{$link->facebook}}">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="name">Twitter</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="name" name="twitter" class="form-control" value="{{$link->twitter}}">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="name">Linked In</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="name" name="linkedin" class="form-control" value="{{$link->linkedin}}">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="name">Dribbble</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="name" name="dribbble" class="form-control" value="{{$link->dribbble}}">
							  </div>
							</div>


							<div class="control-group">
							  <label class="control-label" for="name">Google Plus</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="name" name="google" class="form-control" value="{{$link->google}}">
							  </div>
							</div>





							       

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Edit Links</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection