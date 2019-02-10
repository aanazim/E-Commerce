@extends('admin_layout')

@section('admin_content')

<div id="content" class="span10">
			
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<form action="{{route('myslider.store')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
							@csrf
						  <fieldset>
							
							<div class="control-group">
								<label class="control-label" for="name">Slider Image</label>
								<div class="controls">
									<input type="file" class="input-xlarge datepicker" id="name" name="image" class="form-control">
								</div>
							</div>

							       
							

							<div class="control-group">
							  <label class="control-label" for="status">Publication status</label>
							  <div class="controls">
								<input type="checkbox" class="input-xlarge datepicker" id="status" name="status" value="1" class="form-control">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Slider</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>

						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection