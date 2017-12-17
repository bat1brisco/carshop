<!DOCTYPE html>
<html>
<head>
    <?php 
        require_once 'function.php';
    ?>
	<title>ASITI</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">

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
<div>
    <div class="left" align="left">
        <article>
            <p>This is a test for text pages.</p>
        </article>
    </div>

    <div class="right" align="right">
        <form id="contact-form" action="" method="POST">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input class="submit" type="submit" name="submit" value="Login">
        </form>
        <?php 
            if(isset($_POST['submit'])){
                $checkUser = new database();
                $check = $checkUser->checkUser($_POST['username'], $_POST['password']);
                if($check){
                        header("location:home.php");
                }else{
                    echo "<p>Wrong Password</p>";
                }
            }

         ?>
    </div>
</div>  
</body>
</html>