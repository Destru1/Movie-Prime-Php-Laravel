<html>
<head>
    <title>List of genres</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
@include('layouts.nav.nav')
<body>

<br><br><br>

<div>
    @foreach($genres->reverse() as $genre)
        <p>{{$genre->name}}</p>



</div>
@endforeach
</body>

</html>
