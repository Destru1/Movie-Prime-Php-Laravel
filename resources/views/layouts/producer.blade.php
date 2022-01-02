<html>
<head>
    <title>List of movies</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
@include('layouts.nav.nav')
<body>

<br><br><br>

<div>
    @foreach($producers->reverse() as $producer)
        <p>{{$producer->first_name}}</p>
        <p>{{$producer->last_name}}</p>
        <p>{{$producer->age}}</p>


</div>
@endforeach
</body>

</html>
