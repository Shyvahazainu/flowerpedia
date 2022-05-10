@extends('template')
@section('title', 'FlowerPedia')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootsrap.min.css" rel="stylesheet" id="bootstrap.css">
<link rel="stylesheet" href="css/disclaimer.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootsrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container">
    <a class="dis">Flower Of The Day</a>
    <a class="close" onclick="window.history.back();">X</a>
    
    <div class = "container">
        <div class="box"><p> All the contents are taken
        from another website.</p></div>
    </div>
</div>

@endsection