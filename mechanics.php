<!DOCTYPE html>
<?php 
    require_once 'calendar.php';
    session_start();

    if (!isset($_SESSION['login-user'])) {
      header("location:index.php");
    }
 ?>
<html lang="en">
<head>
<title>Car Repair</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/stylecal.css">



<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Vegur_500.font.js" type="text/javascript"></script>
<script src="js/FF-cash.js" type="text/javascript"></script>
<script src="js/tms-0.3.js" type="text/javascript"></script>
<script src="js/tms_presets.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.equalheights.js" type="text/javascript"></script>

</head>
<body id="page1">
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
            <li><a  href="home.php">Home</a></li>
            <li><a class="active" href="mechanics.php">Mechanics</a></li>
            <li><a href="#">My Car</a></li>
            <li><a href="#">About</a></li>
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
      </div>
    </header>
    <!--==============================content================================-->
    <section id="content">
      <div class="main">
        <center>
          <?php 
            $calendar = new Calendar(12, 2017);
            $calendar->show();
          ?>
        </center>  
      </div>
    </section>
    <!--==============================footer=================================-->
    <footer>
      <div class="main"> <span>Copyright &copy; <a href="#">Domain Name</a> All Rights Reserved</span> Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a> </div>
    </footer>
  </div>
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(window).load(function () {
    $('.slider')._TMS({
        duration: 1000,
        easing: 'easeOutQuint',
        preset: 'simpleFade',
        slideshow: 7000,
        banners: false,
        pauseOnHover: true,
        pagination: false,
        pagNums: false,
        nextBu: '.next',
        prevBu: '.prev'
    });
});
</script>
</body>
</html>