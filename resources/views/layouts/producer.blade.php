<html>
@include('layouts.nav.nav')
<body>



<div id="main" class="wrapper style1">
    <div class="container">
        <div class="row">
        @foreach($producers->reverse() as $producer)
            <div class="col-sm-4 py-3">
<div class="card">
    <img src="{{$producer->image}}" class="card-img-top">
   <div class="card-body bg-dark">
<h3 class="card-title  d-flex justify-content-center h3">{{$producer->first_name}} {{$producer->last_name}}</h3>
       <a href="{{ url('producers/'.$producer->id) }}"
          class="btn btn-primary d-flex justify-content-center" >View more</a>
   </div>
</div>
</div>
  @endforeach
        </div>
    </div>
</div>


</body>

</html>
