@extends('template')
@section('title', 'FlowerPedia')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootsrap.min.css" rel="stylesheet" id="bootstrap.css">
<link rel="stylesheet" href="css/search.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootsrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>

<div class="container" style="margin-left:23%;">
    <div class="src" style="margin-left:15px;">
        <input type="text" placeholder="Enter Flower Name" name="search" style="height:42px; width: 90%">
        <button type="submit" href="/aboutus" class="btn" style="height: 41px; width: 40px; margin-bottom:3px;">></button>
    </div>
</div>

@endsection