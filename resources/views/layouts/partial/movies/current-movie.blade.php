<html>
<head>
    <title>List of movies</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href=" {{ asset('assets/css/main.css') }}" />
</head>
<body>
@include('layouts.nav.nav')
<div id="main" class="wrapper style1">
    <div class="card" style="width: 18rem">
        <div class="card-body">
            <p class="card-text"><span class="bold">Movie name:</span>{{$movie->movie_name}}</p>
            <p class="card-text"><span class="bold">Year:</span>{{$movie->movie_name}}</p>
            <p class="card-text"><span class="bold">Movie name:</span>{{$movie->movie_name}}</p>

            <p class="card-text"><span class="bold">Age restricted:</span>{{$movie->is_age_restricted}}</p>

            <p class="card-text"><span class="bold">Movie genre:</span>@include('layouts.partial.movies.current-movie-genres')</p>
            <p class="card-text"><span class="bold">Producer:</span>@include('layouts.partial.movies.current-movie-producers')</p>
        </div>
    </div>
</div>
</body>

</html>
