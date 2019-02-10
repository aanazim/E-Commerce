

@if(session('success'))
  
  <div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>  {{ session('success') }}
  </div>
  @endif


   @if ($errors->any())
  
       @foreach ($errors->all() as $error)
      
    <div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>{{ $error }}</strong>  
  </div>
       @endforeach
     @endif
