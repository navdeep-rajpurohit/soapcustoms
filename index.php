<?php
    include('config.php');
    session_start();
    
    if(!isset($_SESSION['username'])) 
    {
      header("location:login.php");
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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
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
          <li><a href="edit.php">Edit Items</a></li>
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
       
        <h2 class="text-center">Welcome <?php echo $_SESSION['username'];; ?></h2><br>
        <div class="indtab">
  <button class="indtablinks" onclick="openCity(event, 'Oils')" id="defaultOpen">Oils</button>
  <button class="indtablinks" onclick="openCity(event, 'Lye')">Lye</button>
  <button class="indtablinks" onclick="openCity(event, 'Additives')">Additives</button>
  <button class="indtablinks" onclick="openCity(event, 'EssentialOils')">Essential Oils</button>
  <button class="indtablinks" onclick="openCity(event, 'Coloring')">Coloring</button>
  <button class="indtablinks" onclick="openCity(event, 'Brew')">Brew</button>
  <button class="indtablinks" onclick="openCity(event, 'Packaging')">Packaging</button>
</div>

<?php echo "<form action='' method='POST'> 
               "; 
?>
<div id="Oils" class="indtabcontent">

  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Oils'";
    $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {  
        echo "<td>
              <input type='checkbox' name='list[]' value='".$row['id']."'>
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  
}
?>

  </table>

 
</div>
<div id="Lye" class="indtabcontent">
  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
     $sql = "SELECT * FROM Items WHERE Category = 'Lye'";
     $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {
      echo "<td>
              <input type='checkbox' name='list[]' value='".$row['id']."'>
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  

     
}
?>

  </table>
</div>

<div id="Additives" class="indtabcontent">
  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
     $sql = "SELECT * FROM Items WHERE Category = 'Additives'";
    $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {
       
        echo  "<td>
               <input type='checkbox' name='list[]' value='".$row['id']."'>
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  

     
}
?>

  </table>
</div>
<div id="EssentialOils" class="indtabcontent">
  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
     $sql = "SELECT * FROM Items WHERE Category = 'Essential Oils'";
    $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {
       
        echo  "<td>
               <input type='checkbox' name='list[]' value='".$row['id']."'>
          
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  

     
}
?>
</table>
</div>
<div id="Coloring" class="indtabcontent">
  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
    $sql = "SELECT * FROM Items WHERE Category = 'Coloring'";
    $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {
       
        echo  "<td>
               <input type='checkbox' name='list[]' value='".$row['id']."'>
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  

     
}
?>

  </table>
</div>
<div id="Brew" class="indtabcontent">

  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Ounces</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
     $sql = "SELECT * FROM Items WHERE Category = 'Brew'";
    $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {
       
        echo  "<td>
               <input type='checkbox' name='list[]' value='".$row['id']."'>
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  

     
}
?>

  </table>
</div>
<div id="Packaging" class="indtabcontent">
  <table id="navii">
    <tr>
      <th width="4%"></th>
      <th width="30%">Item</th>
      <th width="30%">Brand</th>
      <th width="10%">Feet/Qty</th>
      <th width="10%">Cost</th>
      <th width="10%">Cost per Ounce</th>
     </tr>
    <tr>
    <?php
     $sql = "SELECT * FROM Items WHERE Category = 'Packaging'";
    $result = $db->query($sql);

     if ($result->num_rows > 0) 
     {
    // output data of each row
      while($row = $result->fetch_assoc()) 
       {
       
        echo  "<td>
               <input type='checkbox' name='list[]' value='".$row['id']."'>
              </td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td>". $row["Ounces"]."</td>
              <td>". $row["Cost"]."</td>
              <td>". $row["CostperOunce"]."</td>
               </tr>
              ";
       }  

     
}
?>


  </table>
</div>
<input type="submit" name="subs" value="Add to List" id="addtolist">
<?php echo "</form>";?>
<!-- End of Items -->
<div>
    <div ng-app="">
  <h3>Reciepe Cost</h3>
  <h4>Items</h4>
    <table id="naviilist">
    <tr>
      <th width="15%">Category</th>
      <th width="20%">Item</th>
      <th width="20%">Brand</th>
      <th width="10%">Cost per Ounce</th>
      <th width="10%">Recipe Ounces</th>
      <th width="10%">Cost in Recipe</th>
     </tr>
  <?php 
       if(isset($_POST['subs'])){
    $i=0;
    foreach($_POST['list'] as $value)
    {
    
    $sql = "SELECT * FROM Items WHERE id = '".$value."' ";
    $result = $db->query($sql);
    // while($row = $result->fetch_assoc()) 
    // {
    $row = $result->fetch_assoc();
      $cpr = $row["CostperOunce"];  
        echo  "<tr>
              <td>". $row['Category'] ."</td>
              <td>". $row["Item"]."</td>
              <td>". $row["Brand"]."</td>
              <td><input type='text' id='cpr_'$i'' value='".$row['CostperOunce']."' disabled></td>
              <td><input type='text' id='rec_o_'$i'' class='rec_oz' onkeyup='showHint()'></td>
              <td>₹   <span id='cost_rec_'$i''></span></td>
              </tr>";
              $i++;
  // }
  
}
    }
  ?>
</table>
<br><br><br><br>
<h4>Costs</h4>
<div class="naviitb">
<div class="naviiLeft">
  <table id="naviitbl">
  <tr><th width="30%">Recipe Total Cost</th>
      <th width="30%">Cost per Bar</th>
  </tr>
  <tr><td width="30%">₹ <span id='recipe_total_cost'></span></td>
      <td width="30%">₹ <span id='cost_per_bar'></span></td>
  </tr>
</table>
  
</div>
<div class="naviiRight">
  <table id="naviitbl">
  <tr><th width="30%">Total oz</th>
      <th width="30%">Sale Price</th>
      <th width="30%">Wholesale Price</th>
  </tr>
  <tr><td width="30%"><span id='total_oz'></span></td>
      <td width="30%"><input type="text" id="sale_price" onkeyup='showHint()'></td>
      <td width="30%"><input type="text" id="wholesale_price" onkeyup='showHint()'></td>
  </tr>
  <tr>
      <th width="30%">Cost Per oz</th>
      <th width="30%">Bar Profit</th>
      <th width="30%">Bar Profit</th>
  </tr>
  <tr><td width="30%">₹ <span id='cost_per_oz'></span></td>
      <td width="30%">₹ <span id='sale_bar_profit'></span></td>
      <td width="30%">₹ <span id='wholesale_bar_profit'></span></td>
  </tr>
  <tr>
      <th width="30%">How Many Bars?</th>
      <th width="30%">Batch Profit</th>
      <th width="30%">Batch Profit</th>
  </tr>
  <tr><td width="30%"><input type="number" id='total_bars' onkeyup='showHint()'></td>
      <td width="30%">₹ <span id='sale_batch_profit'></span></td>
      <td width="30%">₹ <span id='wholesale_batch_profit'></span></td>
  </tr>
</table>
</div>
</div>
</div>
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
  <script>
function openCity(evt, cityName) {
  var i, indtabcontent, indtablinks;
  indtabcontent = document.getElementsByClassName("indtabcontent");
  for (i = 0; i < indtabcontent.length; i++) 
  {
    indtabcontent[i].style.display = "none";
  }
  indtablinks = document.getElementsByClassName("indtablinks");
  for (i = 0; i < indtablinks.length; i++) 
  {
    indtablinks[i].className = indtablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
function showHint() 
{
  //var cpr = <?php echo $cpr; ?>;

  var rec_oz = document.getElementsByClassName("rec_oz");
  var tb = document.getElementById("total_bars").value;
  var sp = document.getElementById("sale_price").value ;
  var wsp = document.getElementById("wholesale_price").value;
  //document.getElementById("cost_rec").innerHTML = str;
  var total_ouc = 0;
  var rtc = 0;
  for (var i=0; i<rec_oz.length; i++)
  {
     var cpr = cpr_[i].value;
     var temp = rec_o_[i].value;
     cost_rec_[i].innerHTML = (temp*cpr).toFixed(4);
     var total_ouc = total_ouc+parseFloat(rec_o_[i].value);
     var rtc = rtc+parseFloat(cost_rec_[i].innerHTML) ;
     
  }
  recipe_total_cost.innerHTML = (rtc).toFixed(4);
  if((rtc/tb)>0 && (rtc/tb)< 99999)
  {
  cost_per_bar.innerHTML = (rtc/tb).toFixed(4);
  }

  total_oz.innerHTML = (total_ouc).toFixed(4);
  cost_per_oz.innerHTML = (rtc/total_ouc).toFixed(4);
  //
  //
  sale_bar_profit.innerHTML = (sp-(rtc/tb)).toFixed(4);
  sale_batch_profit.innerHTML = (tb*(sp-(rtc/tb))).toFixed(4);
  //
  wholesale_bar_profit.innerHTML = (wsp-(rtc/tb)).toFixed(4);
  wholesale_batch_profit.innerHTML = (tb*(wsp-(rtc/tb))).toFixed(4);

  
  

}
function calc()
{

}
</script>
</footer>
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/bootstrap.js"></script>
</body>
</html>
