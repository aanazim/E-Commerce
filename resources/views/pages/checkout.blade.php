@extends('layout')

@section('content')
<section>
	
	<div class="shopper-informations">
		@include('message')
				<div class="row">	
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form action="{{route('shipping.store')}}" method="post">
									@csrf
								
									<input type="email" placeholder="Email*" name="email" >	
									<input type="text" placeholder="First Name *" name="first_name">
									<input type="text" placeholder="Last Name *" name="last_name">
									<input type="text" placeholder="Address  *" name="address">
								   <input type="number" placeholder="Mobile Number" name="number">
									<input type="text" placeholder="City" name="city">
									<input type="submit" class="btn btn-info" value="Done">
								</form>
							</div>
							
						</div>
					</div>				
			    </div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
           </div>
            
</section>



@endsection