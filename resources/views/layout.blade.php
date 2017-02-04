<!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>OSIRES</title>
 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery.js"></script>
 <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}">

<script type="text/javascript" src="{{ asset('js/scroll.js') }}"></script>




 </script>

 </head>
 <body>
 <header>
 <nav class="navbar navbar-inverse" role="navigation">
 <!-- Brand and toggle get grouped for better mobile display -->
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>

 </button>
 <a class="navbar-brand" href="/">ONLINE SIM REGISTRATION</a>
 </div>

 <!-- Collect the nav links, forms, and other content for toggling -->
 <div class="collapse navbar-collapse" id ="bs-example-navbar-collapse-1">

 <ul class="nav navbar-nav navbar-right">
   <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
 </ul>
 </div><!-- /.navbar-collapse -->
 </nav>
 </header>

 <img src="img/osires.jpg"  style="width:100%; height:">



 <footer class="footer">
   <a class="up-arrow" href="#top" data-toggle="tooltip" title="TO TOP">
     <span class="glyphicon glyphicon-chevron-up"></span>
   </a><br><br>
   <p>Developed by <br>Alvin Joseph| Dhanya T|Adarsh S| Dimal Joseph </p>
 </footer>

 @yield('content')
 </body>
 </html>
