
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
  </head>
    <body>
      <div class="wrapper fade-in">
        <nav class="navbar">
          <img class="logo" src="/images/logo.png" alt=""> 
          <span class ="logoWords">LoveInc!</span>
          <br/>
          <div class="underLogo">LoveInc!</div>  
          <span class="bannerTitle">"Rockfest 2021"</span>
          <div class="menu-bar">
            <div class="menu" id="menu" onclick="onClickMenu()">
              <div id="bar1" class="bar"></div>
              <div id="bar2" class="bar"></div>
              <div id="bar3" class="bar"></div>
            </div>
          </div>
          <div >
            <ul class="myLinks" id="myLinks">
              <li class = "link" id="link"><a href="/" id="link">Home</a></li>
              <li class = "link" id="link"><a href="https://www.ticketmaster.com/ruoff-music-center-tickets-noblesville/venue/41099">Tickets</a></li>
              <li class = "link" id="link"><a href="/schedule">Schedule</a></li>
              <li class = "link" id="link"><a href="/map">Map</a></li>
            </ul>
          </div>
        </nav>
        @yield('content')
    </body>
    <script>
      function onClickMenu(){
         document.getElementById("menu").classList.toggle("change");    
         //this works for one    
        //document.getElementById("link").classList.toggle("link");    
         document.getElementById("myLinks").classList.toggle("change");        
      }

    </script>
</html>

