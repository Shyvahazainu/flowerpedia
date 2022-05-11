<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="\css\nav.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav>
    
    <div class="wrapper">
            <div class="logo"><a href=''>flowerpedia</a></div>
            <div class="menu">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#aboutus">About Us & Disclaimer</a></li>
                <li><a href="#list">List</a></li>
                <li><a href="/search">Search</a></li>
            </ul>
        </div>
    </div>
</nav>
    @yield('konten')
  </body>
</html>