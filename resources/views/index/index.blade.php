@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
                <h2 class="align-center">{{$title}}</h2>
            </header>
            <h4 class="align-center">Find the best movie for you</h4>
            {!! $text !!}
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="100000">
                        <img src="https://wallpapercave.com/wp/wp5768288.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption  d-none d-md-block">
                            <h1 >Movies</h1>
                            <a href="/movies" class=" btn btn-primary">Go to movies</a>
                        </div>
                    </div>

                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="https://img.freepik.com/free-photo/movie-clapper-red-background-with-copy-space_23-2148416747.jpg?size=626&ext=jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Producers</h5>
                            <a href="#producers" class=" btn btn-primary">Go to producers</a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://wallpaperaccess.com/full/229832.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Genres</h5>
                            <a href="#genres" class=" btn btn-primary">Go to genres</a>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
@endsection
