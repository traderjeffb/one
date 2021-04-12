
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Calligraffitti&family=Finger+Paint&family=Meddon&family=Permanent+Marker&display=swap" rel="stylesheet">
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
  </head>
    <body>
      <div class="wrapper fade-in">
        <nav class="navbar">
          <img class="logo" src="/images/logo.png" alt="Petzel"> 
          <span class ="logoWords">LoveInc!</span>
          <span class="bannerTitle">"Rockfest 2021"</span>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="https://www.ticketmaster.com/ruoff-music-center-tickets-noblesville/venue/41099">Tickets</a></li>
              <li><a href="/schedule">Schedule</a></li>
              <li><a href="/map">Map</a></li>
            </ul>
        </nav>
        @yield('content')
    </body>
    <script>
      function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
    </script>
</html>



{{--  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styles.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Calligraffitti&family=Finger+Paint&family=Meddon&family=Permanent+Marker&display=swap" rel="stylesheet">
  {{--  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <title>@yield('title')</title>
</head>
<body>
  <div class="wrapper">
    <div class="navbar">
      {{--  <img class="logo" src="/images/logo.jpg" alt="">  
      <label for="#tooggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>
      <span class ="logoWords">End World Hunger</span>
      <span class="bannerTitle">"Roxfest 2021"</span>
      <ul class="menu">
        <a href="/">Home</a>
        <a href="https://www.ticketmaster.com/ruoff-music-center-tickets-noblesville/venue/41099">Tickets</a>
        <a href="/schedule">Schedule</a>
        <a href="/map">Map</a>
      </ul>
    </div>
    <div class="subtitle">A Intiment Fundraising Experience!</div>
    @yield('content')
  </div>
</body>
</html>
  --}}






{{--  
<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <title>Responsive Navbar | CodingNepal</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>@yield('title')</title>
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo">DesignX</label>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="https://www.ticketmaster.com/ruoff-music-center-tickets-noblesville/venue/41099">Tickets</a></li>
        <li><a href="/schedule">Schedule</a></li>
        <li><a href="/map">Map</a></li>
      </ul>
    </nav>
    <section></section>
    <div class="subtitle">A Pre-Born! Fundraising Experience!</div>
    @yield('content')
  </div>
  </body>
</html>  --}}



{{--  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="styles.css"/>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Aguafina+Script&family=Calligraffitti&family=Finger+Paint&family=Meddon&family=Permanent+Marker&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <title>@yield('title')</title>
</head>
<body>
    <div class="navbar">
      <img class="logo" src="/images/logo.jpg" alt=""> 
      {{--  <label for="#tooggle">&#9776;</label>
      <input type="checkbox" id="toggle"/>  --}}
      {{--  <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
        <div class ="logoWords">Pre-Born!</div>
        <div class="bannerTitle">"Roxfest 2021"</div>
      <div class="menu">
        <a href="/">Home</a>
        <a href="https://www.ticketmaster.com/ruoff-music-center-tickets-noblesville/venue/41099">Tickets</a>
        <a href="/schedule">Schedule</a>
        <a href="/map">Map</a>
      </div>
    </div>
    <div class="subtitle">A Pre-Born! Fundraising Experience!</div>
    @yield('content')
  </div>
</body>
</html>    --}}