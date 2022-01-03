<html>

<head>
    <title>List of producers</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

</head>
@include('layouts.nav.nav')

   <body>

   <div id="main" class="wrapper style2">
       <a class="btn btn-primary m-2 " href="/producers">Go back</a>

       <div class="container d-flex justify-content-center ">
           <div class="card d-flex " style="width: 25rem">
               <div class="card-body bg-dark text-white ">

                   <p class="card-text"><span class="bold">First name : </span>{{$producer->first_name}} </p>
                   <p class="card-text"><span class="bold">Last name : </span>{{$producer->last_name}} </p>
                   <p class="card-text"><span class="bold">Age: </span>{{$producer->age}}</p>
                   <p class="card-text"><span class="bold">Nationality: </span>{{$producer->nationality}}</p>


               </div>
           </div>
       </div>
   </div>

   </body>



</html>
