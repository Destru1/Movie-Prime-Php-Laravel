<html>
<head>
    <title>List of producers</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="public/packages" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>


</head>
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
