@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
                <h2 class="align-center">{{$title}}</h2>
            </header>
            {!! $text !!}
            <div class="row" >
                <div class="col-sm-6">
                    <div class="card text-white bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title text-white ">All the movies</h5>
                            <p class="card-text">Click the button down to see our variety of movies. <br>We guarantee you will like them.  </p>
                            <a href="/movies" class="btn btn-primary">Go to movies</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-white bg-secondary">
                        <div class="card-body">
                            <h5 class="card-title text-white">Producers</h5>
                            <p class="card-text">Want to watch a movie by your favourite producer? <br> We got you covered.</p>
                            <a href="/producers" class="btn btn-primary">Go to producers</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
