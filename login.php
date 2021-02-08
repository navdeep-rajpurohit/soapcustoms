<?php
 session_start();  
    $flag=0;
    include("config.php");
 
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);
      $sql =  ("SELECT * FROM users WHERE username = '".$myusername."'");
      $result = mysqli_query($db,$sql); 
      $row = mysqli_fetch_array($result);
if($row["username"]==$myusername && $row["password"]==$mypassword)
   { $_SESSION['username']=$myusername; 
    header("location: index.php"); 
  }
else
    $message = "Username or Password incorrect.\\nTry again.";
  echo "<script type='text/javascript'>alert('$message');</script>";
}
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
  </div>

</nav>
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="jumbotron">
        <h2 class="text-center">Login Here</h2>
       
   <div class="login-container text-center">
  <form action="" method="POST">
    <div class="login-row">
     <div class="login-col">
    <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login" id="logbtn">

      </div>
      
    </div>
  </form>
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
