<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;
use App\Models\Producer;
use App\Models\Movie_producers;
use App\Models\Movie_genres;


class MovieController extends Controller {

public function getAll(){
$movies = Movie::all();

return view('layouts/movie',compact('movies'));
}

public function getById($id){

$movie = Movie::where('id',$id)->first();

//Producers
$movie_producers = Movie_producers::where('movie_id',$id)->pluck('producer_id');

$producers = array();
foreach($movie_producers as $movie_producer)
{
$producers[] = Producer::all()->where('id',(int)$movie_producer);
}
//Genres

$movie_genres = Movie_genres::where('movie_id',$id)->pluck('genre_id');

$genres = array();
foreach($movie_genres as $movie_genre)
{
$genres[] = Genre::all()->where('id',(int)$movie_genre);
}
return view('layouts.partial.movies.current-movie',compact('movie','producers','genres'));
}

}



