<?php 
require_once 'function.php';

  session_start();

  if(!isset($_SESSION['admin'])){
      header("location:index.php");
    }
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Repair | Locations</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/w3.css">

<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Vegur_500.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>

</head>
<body id="page6">
<div class="main-bg">
  <div class="bg">
    <!--==============================header=================================-->
    <header>
      <div class="main">
        <div class="wrapper">
          <a href="home.php"><img src='images/ASITI.png' alt='Smiley face' width='200' height='200'></a>
          <div class="fright">
            <div class="indent"> <span class="address">8901 Marmora Road, Glasgow, D04 89GR</span> <span class="phone">Tel: +1 959 552 5963</span> </div>
          </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a href="home.php">Home</a></li>
            <li><a class="active" href="admin-carunits.php">Car Units</a></li>
            <li><a href="repair.php">Repairs</a></li>
            <li><a href="admin-owners.php">Car Owners</a></li>
              </ul>
            <div class='center'>
                <img onclick="document.getElementById('id01').style.display='block' " src='images/imagess.png' alt='Smiley face' width='50' height='50' align='right' >

            <div id="id01" class="w3-modal">
              <div class="w3-modal-content">
                <div class="w3-container">
                  <span onclick="document.getElementById('id01').style.display='none' " class="w3-button w3-display-topright">&times;</span>
                    <img src="images/imagess.png" align="center" class="center"><br>
                    <button onclick="">Logout</button>
                </div>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!--==============================content================================-->
        <table class="main">
          <tr>
            <td><h4>Car Unit Type</h4></td>
            <td><h4>Car Brand</h4></td>
            <td><h4>Car Model</h4></td>
            <td><h4>Owners ID</h4></td>
            </tr>
          <?php 
            $carunit = new database();

            $cars = $carunit->showcars();
            while ($car = mysqli_fetch_assoc($cars)) {
              echo "<tr>";
              echo "<td> <h5>".$car['carUnitType']."</h5></td>";
              echo "<td> <h5>".$car['car_brand']."</h5></td>";
              echo "<td> <h5>".$car['car_model']."</h5></td>";
              echo "<td> <h5>".$car['carOwner_id']."</h5></td>";
              echo "</tr>";
            }
           ?>
        </table>
    <!--==============================footer=================================-->
    <footer>
      <div class="main"> <span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</span> Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>