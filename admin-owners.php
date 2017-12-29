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
            <li><a  href="admin-carunits.php">Car Units</a></li>
            <li><a href="repair.php">Repairs</a></li>
            <li><a class="active" href="admin-owners.php">Car Owners</a></li>
              </ul>
            <div class='center'>
                <img onclick="document.getElementById('id01').style.display='block' " src='images/imagess.png' alt='Smiley face' width='50' height='50' align='right' >
            <div id="id01" class="w3-modal">
              <div class="w3-modal-content">
                <div class="w3-container">
                  <span onclick="document.getElementById('id01').style.display='none' " class="w3-button w3-display-topright">&times;</span>
                    <img src="images/imagess.png" align="center" class="center"><br>
                    <a href="logout.php">Sign Out</a>
                </div>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!--==============================content================================-->
        <table class="main">
          <center><h2>CAR UNIT OWNER</h2></center>
          <tr>
              <td class="taas"><h4>Name</h4></td>
              <td class="taas"><h4>Address</h4></td>
              <td class="medyo"><h4>Contact</h4></td>
              <td class="medyo"><h4>Email</h4></td>
              <td class="mubokaayo"><img onclick="document.getElementById('addCarOwner').style.display='block' " src='images/add.png' alt='Smiley face' width='30' height='30' align='right' ></td>
            </tr>
          <?php 
            $carowners = new database();
            $owns = $carowners->showowners();
            while ($owners = mysqli_fetch_assoc($owns)) {
              if($owners['flag'] == 1){
                echo "<tr>";
                echo "<td> <h5>".$owners['carowner_fname']." ".$owners['carowner_lname']."</h5></td>";
                echo "<td> <h5>".$owners['carOwner_address']."</h5></td>";
                echo "<td> <h5>".$owners['carOwner_contact']."</h5></td>";
                echo "<td> <h5>".$owners['email']."</h5></td>";
                echo "<td><h5 ><a href='addcars.php?id=".$owners['carOwner_id']."'><img src='images/cars.png' alt='Smiley face' width='40' height='40'  ></a></h5>";
                echo "<td><h5 ><a href='delete.php?id=".$owners['carOwner_id']."'><img src='images/delete.png' alt='Smiley face' width='25' height='25'  ></a></h5>";
                echo "<td><h5 ><a href='edit.php?id=".$owners['carOwner_id']."'><img src='images/edit.png' alt='Smiley face' width='25' height='25' ></a></h5>";
                echo "<td><h5 ><a href='notify.php?id=".$owners['carOwner_id']."'><img src='images/notify.png' alt='Smiley face' width='25' height='25' ></a></h5>";
                echo "</tr>";
              }
              
            }
           ?> 
        </table>

          <div id="addCarOwner" class="w3-modal">
              <div id="form-main">
                <div id="form-div">
                  <span onclick="document.getElementById('addCarOwner').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <form class="form" id="form1" action="" method="POST">
                      <input type="text" name="fname" placeholder="First Name" required/> <br>
                      <input type="text" name="lname" placeholder="Last Name" required/> <br>
                      <input type="text" name="address" placeholder="Address" required> <br>
                      <input type="email" name="email" placeholder="Email"> <br>
                      <input type="text" name="contact" placeholder="Contact #" required> <br>
                      <input type="text" name="username" placeholder="Username" required> <br>
                      <input type="password" name="password" placeholder="Password" required>  <br>
                      <input type="submit" name="submit" value="Register" id="button-blue"/> 
                   
                    </form>

                    <?php 
                      $add = new database();
                      if (isset($_POST['submit'])) {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $address = $_POST['address'];
                        $contact = $_POST['contact'];
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $owners = $add->createAccounts($fname, $lname, $address, $contact, $email, $username, $password);
                      }
                        
                     ?>
                   </div>
                </div>
              </div>
          </div>
    <!--==============================footer=================================-->
    <footer>
      <div class="main"> <span>Copyright &copy; <a href="#">ASITI</a> All Rights Reserved</span> Design by ASITI <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
</body>
</html>