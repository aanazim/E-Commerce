@extends('layout')

@section('content')


<!-- <script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>paypal.Buttons().render('body');</script> -->

 @include('message')
<form action="" method="post">
 @csrf
 <label for="paypal">Enter Your Amount</label>
 <input type="text" id="paypal" class="form-control" name="amount">
 <button class="btn btn-info" style="margin-top: 10px;">Submit</button>

</form>
@endsection
