<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;


class MovieController extends Controller {

public function getAll(){
$movies = Movie::all();

return view('layouts/movie',compact('movies'));

}
}


