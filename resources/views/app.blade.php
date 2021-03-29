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
  <title>@yield('title')</title>
</head>
<body>
  <div class="wrapper">
    <nav class="navbar">
      <img class="logo" src="/images/logo.jpg" alt="Petzel"> 
      <span class ="logoWords">Pre-Born!</span>
      <span class="bannerTitle">"Roxfest 2021"</span>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="https://www.ticketmaster.com/ruoff-music-center-tickets-noblesville/venue/41099">Tickets</a></li>
          <li><a href="/schedule">Schedule</a></li>
          <li><a href="/map">Map</a></li>
        </ul>
    </nav>
    <div class="subtitle">A Pre-Born! Fundraising Experience!</div>
    @yield('content')
  </div>
</body>
</html>