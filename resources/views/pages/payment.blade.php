@extends('layout')

@section('content')


<!-- <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script> -->

<!-- <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tbody>
  	 @foreach(Cart::content() as $product)
    <tr>
      <td>{{$product->name}}</td>
      <td>{{$product->qty}}</td>
      <td>{{Cart::total()}}</td>
    </tr>
     @endforeach
  </tbody>
</table>

 @include('message')
<form action="{{route('payment.store')}}" method="post">
 @csrf
 <label for="paypal">Enter Your Amount</label>
 <input type="text" id="paypal" class="form-control" name="amount">
 <button class="btn btn-info" style="margin-top: 10px;">Submit</button>

</form> -->
@endsection
