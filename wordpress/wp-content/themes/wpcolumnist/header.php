<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>


</head>

<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">RSS Feed</a>
    </li>    
     <li class="nav-item">
      <a class="nav-link" href="#">Archived News</a>
    </li>   
  </ul>
<ul class="navbar-nav ml-auto">
  <li class="nav-item">
    <div class="has-search">
      <span class="fa fa-search form-control-feedback"></span>
      <input type="text" class="form-control" placeholder="Search">
    </div>
  </li>
</ul>
</nav>
<br><br>
<div class="container-fluid bg-4 text-center">    
  <div class="row"> 
    <div class="col-sm-12"> 
      <img src="http://localhost/wordpress/wp-content/uploads/2018/06/times-black.png" class="img-responsive" style="width:50%;" alt="Image">
      <p>    
        <SCRIPT LANGUAGE="Javascript">
          var dayNames = new Array("Sunday","Monday","Tuesday","Wednesday",
                  "Thursday","Friday","Saturday");

          // Array of month Names
          var monthNames = new Array(
          "January","February","March","April","May","June","July",
          "August","September","October","November","December");
          var now = new Date();
          document.write(dayNames[now.getDay()] + ", " + 
          monthNames[now.getMonth()] + " " + 
          now.getDate() + ", " + now.getFullYear());
        </SCRIPT>   
      </p>
    </div>
  </div>
</div><br><br>
<hr>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/wordpress/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" http://localhost/wordpress/About">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" http://localhost/wordpress/people/">People</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>              
    </ul>
  </div>
</nav>

<hr><br>