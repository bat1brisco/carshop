<!DOCTYPE html>
<html>
<head>
    <?php 
        require_once 'function.php';
        
        session_start();


        if(isset($_SESSION['login-user'])){
          header('location:home.php');
        }
        if(isset($_SESSION['admin'])){
            header("location:admin-owners.php");   
        }
       

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
            <input style="width: 30%" type="text" name="username" placeholder="Username"><br>
            <input style="width: 30%" type="password" name="password" placeholder="Password"><br>
            <input class="submit" type="submit" name="submit" value="Login">
        </form>
        <?php 
            if(isset($_POST['submit'])){
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $checkUser = new database();
                $check = $checkUser->checkUser($user, $pass);
               
                $userTest = $check['user'];
                $passTest = $check['pass'];
                $admin = $check['admin'];
                $flag = $check['flag'];
                if($flag == 1){    
                    if($user == $userTest && $pass == $passTest){
                        if($admin == 1){
                            $_SESSION['admin'] = true;
                            header("location:admin-owners.php");
                        }
                        else if($admin == 0){
                            $_SESSION['login-user'] = true;
                            header("location:home.php");
                        }
                    }else{
                        echo "Wrong Username";
                    }
                }else{  
                    echo "Account Deleted";
                }
            }
         ?>
    </div>
</div>  
</body>
</html>