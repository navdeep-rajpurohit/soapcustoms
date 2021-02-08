<?php
    session_start();
    
    if(!isset($_SESSION['username'])) 
    {
      header("location:login.php");
    }
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Soap Customization</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
<nav class="navbar navbar-default navbar-inverse">
  <div class="container-fluid"> 
    <div class="navbar-header">
      <img class="navbar-logo" src="./images/logo.png">
      <a class="navbar-brand" id="high" href="">Soap Customizaztion</a> 
     
    </div>
   <div class="myoptn">
     <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
       
        <div class="navii1"></div>
        <div class="navii2"></div>
        <div class="navii3"></div>
        </a>

        <ul class="dropdown-menu naviipb">
          <li><a href="index.php">Home page</a></li>
          <li><a href="edit.php">Edit Items</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
       
      </li>
      </ul>
      </div>
  </div>
   
</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h2 class="text-center">Recipes</h2>
       
       <div class="login-container">
 
</div>
       </div>
    </div>
  </div>
</div>

<footer class="text-center myfooter">
  <hr>
   <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © Navdeep. All rights reserved.</p>
  
       </div>
    </div>
  </div>
  
</footer>
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
