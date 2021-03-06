<html>
<head>
    <title>List of genres</title>
    <style>

        #table{
            background-color: rgb(136, 155, 208);
            text-align:center;

        }
        #title{
            text-align: center;
        }
        #more{
            font-size: 15px;
            width: 15%;
        }

    </style>
</head>
@include('layouts.nav.nav')
<body>

<div id="main" class="wrapper style2">
    <div class="container">


        <h2 id="title">List of  genres</h2>
        <div class="card bg-transparent">
            <ul class="list-group list-group-flush d-flex justify-content-between ">
            @foreach($genres->reverse() as $genre)
                    <li id="table" class="list-group-item"><strong>{{$genre->name}}</strong>
                        <span class="d-flex justify-content-sm-center">
                            <a id="more" class="badge btn-dark rounded-pill " href="{{url ('genres/'.$genre->id)}}">
                                See more
                            </a>
                        </span>
                    </li>
            @endforeach
        </div>
        </ul>

    </div>
</div>
</body>

</html>
