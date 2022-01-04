<html>
<head>
    <title>List of genres</title>
    <style>

        #table{
            background-color: rgba(52,16,50,0.58);
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

<div id="main" class="wrapper style1">
    <div class="container">


        <h2 id="title">List of all genres</h2>
        <div class="card">
            <ul class="list-group list-group-flush d-flex justify-content-between ">
            @foreach($genres->reverse() as $genre)
                    <li id="table" class="list-group-item"><strong>{{$genre->name}}</strong>
                        <span class="d-flex justify-content-sm-center">
                            <a id="more" class="badge btn-success rounded-pill" href="{{url ('genres/'.$genre->id)}}">
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
