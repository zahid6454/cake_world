<?php

session_start();
if(isset($_SESSION['flag']))
{
    header('Location: index.php');    
}

include_once("connection.php");



if(isset($_POST['signupSubmit']))
{
    // session_start();

    $name = $_POST['form-name'];
    $email = $_POST['form-email'];
    $mobile = $_POST['form-mobile'];
    $password = $_POST['form-password'];

    $temp=round(microtime(true) * 1000);
    $userid='user'.(string)$temp;

    $_SESSION['userid'] = $userid;
    $_SESSION['username'] = $row['name'];
    

    $query = "INSERT INTO user (userid, name, password, email, phone, discount) 
              VALUES ('$userid', '$name', '$password', '$email', '$mobile', '50')";

    
    $msg = "Dear ".$name.", We serve the best cake in Jaipur. Don't wait for ordering your first cake and get special discount. Congratulations, you just got INR 50 discount for signing up.";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail($email,"Welcome to Cake World",$msg);

    mysqli_query($conn, $query);
    
    header('Location: index.php');
    

}
else if(isset($_POST['loginSubmit']))
{
    // session_start();
    

    $email = $_POST['form-login-email'];
    $password = $_POST['form-login-password'];


    // $_SESSION['userid'] = $userid;

    $query = "SELECT user.email,user.password,user.userid,user.name FROM user WHERE user.email='$email' AND user.password='$password'";

    $result = mysqli_query($conn,$query);
    
    while($row = mysqli_fetch_assoc($result))
    {
        
        if($row['email']==$email && $row['password']==$password)
        {
            $_SESSION['userid'] = $row['userid'];
            $_SESSION['username'] = $row['name'];
            header('Location: index.php');  
        }
    }
    
    

}





?>







<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cake World - Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="icon" href="images/cakeworld_logo.png">
        
        <!--Other Links-->
        <link rel="stylesheet" href="font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="masterslider/style/masterslider.css" type="text/css">
        <link rel="stylesheet" href="masterslider/skins/default/style.css" type="text/css">
        <link rel="stylesheet" href="styles/main.css" type="text/css">

        <script type="text/javascript" src="js/modernizr.js"></script>

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <header class="page-header">
                <div class="page-header-content container">
                    <div class="menu-button-container">
                        <i id="menu-button" class="menu-button fa fa-reorder"></i>
                    </div>
                    <nav id="nav-top" class="nav-top">
                        <h1 style="float:left;" class="logo-primary"><a href="index.php"><img id="logo-1" alt="Bakery" src="images/cakeworld_logo.png"></a></h1>
                        <div style="float:left;" class="logo-secondary">
                            <a  href="index.php"><img id="logo-2" alt="Bakery" src="images/logo_secondary.png"></a>
                        </div>
                        <ul style="float:right;">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shop.php">All Products</a></li>
                            <li><a href="about.php">About Us</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            
            <div class="margin-40"></div>
            <div class="margin-10"></div>
            
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">

                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3 style="font-size: 25px;">Login To Our Site</h3>
                                        <p>Enter Email &amp; Password To Log On</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="login.php" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-login-email">Email</label>
                                            <input type="text" name="form-login-email" placeholder="Email..." class="form-login-email form-control" id="form-login-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-login-password">Password</label>
                                            <input type="password" name="form-login-password" placeholder="Password..." class="form-login-password form-control" id="form-login-password">
                                        </div>
                                        <button name=loginSubmit type="submit" class="btn">Log-In</button><br><br>
                                        <div align="center" class="row">
                                            <a style="text-decoration:none;color:white;" href="admin_login.php">Admin Login</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-5">

                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3 style="font-size: 25px;">Sign up now</h3>
                                        <p>Fill In The Form Below To Sign Up</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-name">Name</label>
                                            <input type="text" name="form-name" placeholder="Name..." class="form-name form-control" id="form-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-mobile">Mobile No</label>
                                            <input  pattern=".{5,}" required title="Enter valid phone number" type="text" name="form-mobile" placeholder="Mobile No..." class="form-mobile form-control" id="form-mobile">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input pattern=".{5,}" required title="Password must be at least 5 length" type="password" name="form-password" placeholder="Password" class="form-password form-control" id="form-password">
                                        </div>
                                        <button name=signupSubmit type="submit" class="btn">Sign Me Up</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="margin-10"></div>
            <div class="margin-10"></div>
            <div class="margin-10"></div>
            
        </div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>




