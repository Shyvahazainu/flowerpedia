@extends('template')
@section('title', 'FlowerPedia')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootsrap.min.css" rel="stylesheet" id="bootstrap.css">
<link rel="stylesheet" href="css/welcome.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootsrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <div class="content"><a class="txt1" style="margin-top: 70%;">Hi, pretty soul!</a></div>
    <div class="content">
        <img class="pic" src="img/home.png" style="height: 30%; width: 25%; margin-top: 0px; style=float:right;">
    </div>
    <div class="content"><a href="/fotd" id="afotd" style="overflow:visible;">
        <button type="button" id="FOTD">Flower of The Day</button>
    </a></div>
    
</div>


@endsection