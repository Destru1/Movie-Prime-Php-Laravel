<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;

class ProducerController extends Controller
{
    public function getAll(){
    $producers = Producer::all();

    return view('layouts/producer',compact('producers'));
    }
}
