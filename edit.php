<?php 
require_once 'function.php';
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
          <h1><a href="index.php">Car Repair</a></h1>
          <div class="fright">
            <div class="indent"> <span class="address">8901 Marmora Road, Glasgow, D04 89GR</span> <span class="phone">Tel: +1 959 552 5963</span> </div>
          </div>
        </div>
        <nav>
          <ul class="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="carunits.php">Car Units</a></li>
            <li><a href="maintenance.php">Car Owners </a></li>
            <li><a href="repair.php">Repairs</a></li>
            <li><a class="active" href="locations.php">Car Units</a></li>
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

    		<?php 
						require_once 'function.php';
						$database = new database();
						$id = $_GET['id'];
						$ret = $database->showOwner($id);

					 ?>
          <div>
              <div id="form-main">
                <div id="form-div">
                    <form class="form" id="form1" action="" method="POST">
                      <input type="text" name="name" placeholder="Full Name" <?php echo "value=".$ret['carOwner_fullName'].""; ?> required/> <br>
                      <input type="text" name="address" placeholder="Address" <?php echo "value=".$ret['carOwner_address'].""; ?>  required> <br>
                      <input type="email" name="email" placeholder="Email" <?php echo "value=".$ret['email'].""; ?> > <br>
                      <input type="text" name="contact" placeholder="Contact #" <?php echo "value=".$ret['carOwner_contact'].""; ?>  required> <br>
                      <input type="text" name="username" placeholder="Username" <?php echo "value=".$ret['username'].""; ?>  required> <br>
                      <input type="submit" name="submit" value="Register" id="button-blue"/> 
                    </form>
                    
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
