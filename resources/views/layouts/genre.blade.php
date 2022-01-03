<html>
<head>
    <title>List of genres</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <style>

        #table{
            background-color: rgba(52,16,50,0.58);
            text-align: center;

        }
        #title{
            text-align: center;
        }
    </style>
</head>
@include('layouts.nav.nav')
<body>

<div id="main" class="wrapper style1">
    <div class="container">


        <h2 id="title">List of all genres</h2>
        <div class="card">
            <ul class="list-group list-group-flush">
            @foreach($genres->reverse() as $genre)
                    <li id="table" class="list-group-item"><strong>{{$genre->name}}</strong></li>
            @endforeach
        </div>
        </ul>

    </div>
</div>
</body>

</html>
