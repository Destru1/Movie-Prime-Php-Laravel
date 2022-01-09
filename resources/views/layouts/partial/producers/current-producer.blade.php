<html>

<head>
    <title>Producer: {{$producer->first_name}} {{$producer->last_name}}</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

</head>
@include('layouts.nav.nav')

   <body>

   <div id="main" class="wrapper style2">

       <div class="container d-flex justify-content-center ">
           <div class="card d-flex " style="width: 25rem">
               <div class="card-body bg-dark text-white ">

                   <p class="card-text"><span class="bold">First name : </span>{{$producer->first_name}} </p>
                   <p class="card-text"><span class="bold">Last name : </span>{{$producer->last_name}} </p>
                   <p class="card-text"><span class="bold">Age: </span>{{$producer->age}}</p>
                   <p class="card-text"><span class="bold">Nationality: </span>{{$producer->nationality}}</p>
                   @if(!empty($movies))<p class="card-text"><span class="bold"> Movies:</span>
                       @foreach($movies as $movie)
                           @foreach($movie as $currentMovie)
                                {{$currentMovie['movie_name']}}
                   </p>
                   @endforeach
                   @endforeach
                   @endif
                   <a class="btn btn-primary fs-6 d-flex justify-content-center" href="/producers">Go back to producers</a>
               </div>
           </div>
       </div>
   </div>

   </body>



</html>
