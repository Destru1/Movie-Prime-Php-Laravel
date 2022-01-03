@foreach($genres as $genre)
    @foreach($genre as $currentGenre)
        {{$currentGenre['name']}}<br>
    @endforeach
    @endforeach
