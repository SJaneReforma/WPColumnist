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
      <a class="nav-link" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>    
    <li class="nav-item">
      <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/login/">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>    
    <li class="nav-item">
      <a class="nav-link" href="#">RSS Feed</a>
    </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
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
      <img src="<?php echo get_template_directory_uri(); ?>/image/times-black.png" class="img-responsive" style="width:50%;" alt="Image"><br>
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
</div><br>
<hr>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav nav mr-auto">
      <li class="nav-item" id="home">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/home/">Home <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/about/">About Us</a>
      </li>
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>      
      <li class="nav-item">
        <a class="nav-link" href=" <?php echo get_template_directory_uri(); ?>/people/">People</a>
      </li>  
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/event/">Events</a>
      </li> 
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/blog/">Blog</a>
      </li>       
    <li class="nav-item">
      <a class="nav-link">|</a>
    </li>       
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri(); ?>/contact-us/">Contact</a>
      </li>              
    </ul>
  </div>
</nav>


<hr><br>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" class="email" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" class="pass" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" class="respass" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label><br>
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="cancelbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


