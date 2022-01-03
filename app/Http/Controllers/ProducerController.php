<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Movie;
use App\Models\Movie_producers;

class ProducerController extends Controller
{
    public function getAll(){
    $producers = Producer::all();

    return view('layouts/producer',compact('producers'));
    }

    public function getById($id){

    $producer = Producer::where('id',$id)->first();

    $movie_producers = Movie_producers::where('producer_id',$id)->pluck('movie_id');

    $movies = array();
    foreach($movie_producers as $movie_producer){
    $movies[] = Movie::all()->where('id',(int)$movie_producer);
    }
    return view('layouts.partial.producers.current-producer',compact('producer','movie_producers','movies'));
    }
}
