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
            <div class="col-sm-3">
<div class="card">
   <div class="card-body bg-dark">
       <img src="{{$producer->image}}" class="card-img-top">
<h3 class="card-title">{{$producer->first_name}} {{$producer->last_name}}</h3>
<p class="card-text">Hello</p>
       <a href="{{ url('producers/'.$producer->id) }}" class="btn btn-primary" >View more</a>
   </div>
</div>
</div>
  @endforeach
        </div>
    </div>
</div>


</body>

</html>
