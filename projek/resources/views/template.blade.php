<<<<<<< HEAD
@extends('nav')
@section('title', 'index')
    
@section('konten')
<body>
    <div class="wrapper">
        <!-- untuk home -->
        <section id="">
            <div class="kolom">
                <br><br><br>
                <br>
                <h2> Hi, pretty soul!</h2>
                <p>Are you a flower lover? let’s learn about flowers.</p>
                <p><a href="/flowerpedia/fotd" class="tbl-pink">Flower of the Day</a></p>
            </div>
            <img src="\img\org.png" width="500"/>
        </section>
    </div>
    <div id="aboutus" >
        <div class="wrapper">
            <div class="footer">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>FlowerPedia is a web-based application that provides informations about flower, dedicated for the one who loves flower.</p>
                </div>
                <div class="footer-section">
                    <h3>Disclaimer</h3>
                    <p><b>All the contents are taken from another website.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div id="copyright">
        <div class="wrapper">
            &copy; 2022. <b>Shafira & Shyva.</b> All Rights Reserved.
        </div>
    </div>
</body>
        @endsection
=======
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\template.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <title>@yield('title')</title>
  </head>
  <body>
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link" href="/search">Search</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/aboutus">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/disclaimer">Disclaimer</a>
        </li>
    </ul>

    @yield('konten')
  </body>
</html>
>>>>>>> main
