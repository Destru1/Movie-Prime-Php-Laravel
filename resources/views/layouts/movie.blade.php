<html>
<head>
    <title>List of movies</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body>

<header id="header">
    @include('layouts.nav.nav')
</header>
<br><br>
<div>
    @foreach($movies->reverse() as $movie)
        <p>{{$movie->movie_name}}</p>
        <p>{{$movie->release_year}}</p>
        <p>{{$movie->language}}</p>
        <p>{{$movie->is_age_restricted}}</p>

</div>
@endforeach


</body>

</html>
