<?php
    session_start();
    include("config.php");
    
    if(!isset($_SESSION['username'])) 
    {
      header("location:login.php");
    }
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Soap Customization</title>
<link rel="stylesheet" href="css/bootstrap.css">
</head>

<!-- Oils Start -->
<?php
if(isset($_POST['addOil']))
{
  $item=$_POST['item'];
  $category = "Oils";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}

?>
<!-- Oils Over -->
<!-- Lye Start -->
<?php
if(isset($_POST['addLye']))
{

  $item=$_POST['item'];
  $category = "Lye";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}
?>
<!-- Lye Over -->
<!-- Additives Start -->
<?php
if(isset($_POST['addAdditives']))
{
  $item=$_POST['item'];
  $category = "Additives";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}

?>
<!-- Addititves Over -->
<!-- EssentialOils Start -->
<?php
if(isset($_POST['addEssentialOils']))
{
  $item=$_POST['item'];
  $category = "Essential Oils";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}
?>
<!-- EssentailOils Over -->
<!-- Coloring Start -->
<?php
if(isset($_POST['addColoring']))
{
  $item=$_POST['item'];
  $category = "Coloring";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}
?>
<!-- Coloring Over -->
<!-- Brew Start -->
<?php
if(isset($_POST['addBrew']))
{
  $item=$_POST['item'];
  $category = "Brew";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}

?>
<!-- Brew Over -->
<!-- Packaging Start -->
<?php
if(isset($_POST['addPackaging']))
{
  $item=$_POST['item'];
  $category = "Packaging";
  $brand=$_POST['brand'];
  $ounces=$_POST['ounces'];
  $cost=$_POST['cost'];
  $cpr= $cost/$ounces;
  $oils_tb = "CREATE TABLE Items (id int NOT NULL AUTO_INCREMENT PRIMARY KEY,Category varchar(20),Item varchar(40),Brand varchar(40),Ounces decimal(10,1),Cost decimal(10,2),CostperOunce decimal(10,4))";
  if ($db->query($oils_tb) === TRUE){}
  $sql= ("INSERT into Items (Item,Category,Brand,Ounces,Cost,CostperOunce) values ('".$item."','".$category."','".$brand."','".$ounces."','".$cost."','".$cost/$ounces."')");
 
  if ($db->query($sql) === TRUE) 
  {
    echo '<script language="javascript">';
    echo 'alert("Added")';
    echo '</script>';
  } 
  else 
  {
    echo "Error: " . $sql . "<br>" . $db->error;
  }

}
?>
<!-- Packaging Over -->
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
          <li><a href="recipes.php">My Recipes</a></li>
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
        <h2 class="text-center">Edit Items</h2>
  <div class="tab">
  <button class="tablinks" onclick="openItem(event, 'Oils')" id="defaultOpen">Oils</button>
  <button class="tablinks" onclick="openItem(event, 'Lye')">Lye</button>
  <button class="tablinks" onclick="openItem(event, 'Additives')">Additives</button>
  <button class="tablinks" onclick="openItem(event, 'EssentialOils')">Essential Oils</button>
  <button class="tablinks" onclick="openItem(event, 'Coloring')">Coloring</button>
  <button class="tablinks" onclick="openItem(event, 'Brew')">Brew</button>
  <button class="tablinks" onclick="openItem(event, 'Packaging')">Packaging</button>
  </div>
  
  


  <div id="Oils" class="tabcontent" >
  <h3>Oils</h3>
  <form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Oils'";
    $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deleteOil'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deleteOil'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Oils' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
   <br><br><br><br>
  <h4>Add Oils</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addOil" value="Add Oil"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>






<div id="Lye" class="tabcontent">
  <h3>Lye</h3>
<form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Lye'";
    $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deleteLye'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deleteLye'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Lye' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
     <br><br><br><br>
  <h4>Add Lye</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addLye" value="Add Lye"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>






<div id="Additives" class="tabcontent">
  <h3>Additives</h3>
 <form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
   $sql = "SELECT * FROM Items WHERE Category = 'Additives'";
    $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deleteAdditives'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deleteAdditives'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Additives' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
    <br><br><br><br>
  <h4>Add Additives</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addAdditives" value="Add Additives"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>






<div id="EssentialOils" class="tabcontent">
  <h3>Essential Oils</h3>
  <form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
$sql = "SELECT * FROM Items WHERE Category = 'Essential Oils'";
        $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deleteEssentialOils'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deleteEssentialOils'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Essential Oils' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
   <br><br><br><br>
  <h4>Add Essential Oils</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addEssentialOils" value="Add Essential Oils"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>


<div id="Coloring" class="tabcontent">
  <h3>Coloring</h3>
<form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Coloring'";
    $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deleteColoring'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deleteColoring'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Coloring' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
     <br><br><br><br>
  <h4>Add Coloring</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addColoring" value="Add Coloring"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>


<div id="Brew" class="tabcontent">
  <h3>Brew</h3>
<form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Brew'";
    $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deleteBrew'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deleteBrew'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Brew' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
     <br><br><br><br>
  <h4>Add Brew</h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addBrew" value="Add Brew"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>


<div id="Packaging" class="tabcontent">
  <h3>Packaging</h3>
<form method="POST" action="">
  <table id="navii">
    <tr>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
      <th width="5%">Remove</th>
    </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Packaging'";
    $result = mysqli_query($db,$sql);
    if($result)
    {
    if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       
        echo  "<td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
              <td><center>
              <form method='post' action=''>
              <input type='hidden' name='id' value='".$row["id"]."'>
              <button class='delbt' name='deletePackaging'><i class='fa fa-trash w3-large'></i></button>
              </form>
              </center>  
              </td>
              </tr>
              ";
             
                                        }   
       if(isset($_POST['deletePackaging'])){
      $id = $_POST['id'];
        $delete1 =("DELETE FROM `Items` WHERE Category = 'Packaging' AND id ='".$id."' ");
       if ($db->query($delete1) === TRUE) {
    echo '<script language="javascript">';
    echo 'alert("Deleted")';
    echo '</script>';
    header("Refresh:0");
    }
    }
}}
?>

  </table>
</form>
     <br><br><br><br>
  <h4>Add Packaging </h4>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <table id="navii">
    <tr>
      <th width="25%">Item</td>
      <th width="25%">Brand</td>
      <th width="10%">Ounces</td>
      <th width="10%">Cost</td>
      <th width="10%">Add</td>
    </tr>
    <tr>
      <td width="%"><input type="text" name="item" maxlength="40" required></td>
      <td width="%"><input type="text" name="brand" maxlength="40" required></td>
      <td width="%"><input type="text" name="ounces" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td width="%"><input type="text" name="cost"  maxlength="5" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))" required></td>
      <td><input class="naviibtn" type="submit" name="addPackaging" value="Add Packaging"></td>
    </tr>
    <tr>
    
  </tr>
  </table>
</form>
  </div>



<script>
function openItem(evt, itemName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(itemName).style.display = "block";
  evt.currentTarget.className += " active";
  
}
document.getElementById("defaultOpen").click();
</script>
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
