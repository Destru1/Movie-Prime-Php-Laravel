<html>
<head>
    <title>{{$movie->movie_name}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


</head>
<body>
@include('layouts.nav.nav')
<div id="main" class="wrapper style2">

    <h2 style="text-align: center">More info for: {{$movie->movie_name}} </h2>

    <div class="container d-flex justify-content-center ">
    <div class="card d-flex " style="width: 25rem">
        <div class="card-body bg-dark text-white ">
            <p class="card-text"><span class="bold">Year: </span>{{$movie->release_year}}</p>
            <p class="card-text"><span class="bold">Language: </span>{{$movie->language}}</p>
        @if($movie->is_age_restricted == 1)
            <p class="card-text"><span class="bold">Age restricted: </span>Yes</p>
            @else
                <p class="card-text"><span class="bold">Age restricted: </span>No</p>
            @endif
          <!--  <img src="{{ asset('storage/articles/'.$movie->image) }}"> -->
            <p class="card-text"><span class="bold">Genre: </span>@include('layouts.partial.movies.current-movie-genres')</p>
            <p class="card-text"><span class="bold">Producer: </span>@include('layouts.partial.movies.current-movie-producers')</p>
            <a class="btn btn-primary fs-6 d-flex justify-content-center" href="/movies">Go back to movies</a>
        </div>
    </div>
</div>
</div>
</body>

</html>
