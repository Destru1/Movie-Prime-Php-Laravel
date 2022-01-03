<html>
<head>
    <title>{{$movie->movie_name}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href=" {{ asset('assets/css/main.css') }}" />
</head>
<body>
@include('layouts.nav.nav')
<div id="main" class="wrapper style2">
    <a class="btn btn-primary m-2 " href="/movies">Go back</a>
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
            <img src="{{ asset('storage/articles/'.$movie->image) }}"></img>
            <p class="card-text"><span class="bold">Movie genre: </span>@include('layouts.partial.movies.current-movie-genres')</p>
            <p class="card-text"><span class="bold">Producer: </span>@include('layouts.partial.movies.current-movie-producers')</p>

        </div>
    </div>
</div>
</div>
</body>

</html>
