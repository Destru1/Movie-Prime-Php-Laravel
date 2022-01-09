@extends('layouts.nav.nav')
<head>
    <title>Genre: {{$genre->name}}</title>
</head>
<br> <br>
<body style="background-color: #e44c65">
<h2 class="text-center text" >List of {{$genre->name}} movies</h2>


<table class="table table-dark table-striped">
       <thead>
       <tr>
       <th>Movie</th>
       <th>Year</th>
       <th>Language</th>
       </tr>
       </thead>
<tbody>
@if(!empty($movies))
    <tr class="text-white">
    @foreach($movies as $movie )
    @foreach($movie as $currentMovie)
    <td>{{$currentMovie['movie_name']}}</td>
    <td>{{$currentMovie['release_year']}}</td>
    <td>{{$currentMovie['language']}}</td>

    </tr>
    @endforeach
    @endforeach
@endif
</tbody>

</table>

</body>
