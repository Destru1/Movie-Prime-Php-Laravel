@extends('layouts.nav.nav')
<div class="wrapper style1" id="main">
    <div class="container" >
<div class="container bg-danger p-2">
    <div class="offset-4">
        <div class="py-lg-1">
            <button id="buttonName" class="active btn-sm" onclick="showName()">Movie name</button>
            <button id="buttonYear" class="element btn-sm  " onclick="showYear()">Movie year</button>
            <button id="buttonProducer" class="element btn-sm" onclick="showProducer()">Producer</button>
        </div>
        <div id="searchName">
            <form action="{{route('search-name')}}" method="GET" class="d-inline align-items-start">
                <input class="input-group-text d-inline bg-secondary" style="width: 25rem" type="text" name="search-name" placeholder="Movie name: "required/>
                <br> <button class="btn text-white btn-primary m-1" type="submit">Search by name</button>
            </form>
        </div>
        <div id="searchYear" style="display: none">
            <form action="{{route('search-year')}}" method="GET" class="d-inline align-items-start">
                <input class="input-group-text d-inline bg-secondary text-white" style="width: 25rem" type="number" name="search-year" placeholder="Movie year:" required />
                <br><button class="btn text-white btn-primary m-1" type="submit">Search by year</button>
            </form>
        </div>
        <div  id="searchProducer" style="display:none">

            @foreach($producers as $producer)
                <a class="producerButton btn btn-primary m-1" href="{{ url('producers/'.$producer->id) }}">{{$producer->first_name}} {{$producer->last_name}}</a>
            @endforeach
        </div>
    </div>
</div>
    </div>
</div>
<script>

    function showName(){
        document.getElementById("buttonName").style.backgroundColor = "#eeeeee";
        document.getElementById("buttonYear").style.backgroundColor = "rgb(136,155,208)";
        document.getElementById("buttonProducer").style.backgroundColor = "rgb(136,155,208)";

        document.getElementById("searchName").style.display = "block";
        document.getElementById("searchYear").style.display = "none";
        document.getElementById("searchProducer").style.display = "none";
    }
    function showYear(){
        document.getElementById("buttonName").style.backgroundColor = "rgb(136,155,208)";
        document.getElementById("buttonYear").style.backgroundColor = "#eeeeee";
        document.getElementById("buttonProducer").style.backgroundColor = "rgb(136,155,208)";

        document.getElementById("searchName").style.display = "none";
        document.getElementById("searchYear").style.display = "block";
        document.getElementById("searchProducer").style.display = "none";
    }
    function showProducer(){
        document.getElementById("buttonName").style.backgroundColor = " rgb(136,155,208)";
        document.getElementById("buttonYear").style.backgroundColor = " rgb(136,155,208)";
        document.getElementById("buttonProducer").style.backgroundColor = "#eeeeee";

        document.getElementById("searchName").style.display = "none";
        document.getElementById("searchYear").style.display = "none";
        document.getElementById("searchProducer").style.display = "block";
    }
</script>
