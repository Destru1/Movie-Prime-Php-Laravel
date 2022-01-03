<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\Movie_genres;

class GenreController extends Controller
{
     public function getAll(){

        $genres = Genre::all();

        return view('layouts/genre',compact('genres'));
        }

   public function getById($id){

       $genre = Genre::where('id',$id)->first();

       $movie_genres = Movie_genres::where('genre_id',$id)->pluck('movie_id');

       $movies = array();
       foreach($movie_genres as $movie_genre){
       $movies[] = Movie::all()->where('id',(int)$movie_genre);
       }
       return view('layouts.partial.genres.current-genre',compact('genre','movie_genres','movies'));
       }


}
