<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
     public function getAll(){

        $genres = Genre::all();

        return view('layouts/genre',compact('genres'));
        }


}
