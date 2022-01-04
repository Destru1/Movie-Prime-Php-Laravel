<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\GenreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [IndexController::class, 'index']);


Route::get('/search-year',[MovieController::class,'searchByYear'])->name('search-year');
Route::get('/search-name',[MovieController::class,'searchByMovieName'])->name('search-name');
Route::get('/extended-search',[MovieController::class,'searchByProducer']);

//Movies
Route::get('/movies',[MovieController::class,'getAll']);
Route::get('/movies/{id}',[MovieController::class,'getById']);


//Producers
Route::get('/producers',[ProducerController::class,'getAll']);

Route::get('/producers/{id}',[ProducerController::class,'getById']);

//Genres
Route::get('/genres',[GenreController::class,'getAll']);
Route::get('/genres/{id}',[GenreController::class,'getById']);
