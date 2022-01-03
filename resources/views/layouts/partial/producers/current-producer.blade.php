<html>

<head>
    <title>List of producers</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css">

    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

</head>
@include('layouts.nav.nav')

   <body>
   <div class="d-flex justify-content-center">
   <div class="card box-shadow d-flex bg-dark">
   <p style="color: red" class="card-text text-danger">{{$producer->first_name}} {{$producer->last_name}} {{$producer->age}} {{$producer->nationality}}</p>
   </div>
   </div>

   </body>



</html>
