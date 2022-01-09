<html>
<head>
    <title>List of movies</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>

    </style>
</head>
@include('layouts.nav.nav')
<body>

<div id="main" class="wrapper style2">
    <div class="container">
<div class="row">
    <h2 class="bold align-center">List of movies</h2>
    @foreach($movies->reverse() as $movie)
    <div class="col-sm-4  py-3">
<div class="card">
    <img src="{{$movie->image}}" class="card-img-top">
    <div class="card-body  bg-dark" >
        <h2 class="card-title">{{$movie->movie_name}}</h2>
        <p class="card-text h5">Year: {{$movie->release_year}}</p>
        <p class="card-text h5 ">Language: {{$movie->language}}</p>
        <a href="{{ url('movies/'.$movie->id) }}
            " class="btn btn-primary d-flex justify-content-center align-items-center p-2 mt-4" >View more</a>
    </div>
</div>
    </div>
    @endforeach
</div>
    </div>
</div>

</body>

</html>
