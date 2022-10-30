<?php
session_start();
include('connection.php');
if(isset($_SESSION['userid']))
{
    $userid = $_SESSION['userid'];

    $query = "SELECT * FROM user WHERE userid='$userid'";

    $result = mysqli_query($conn,$query);
}
else
{
    header('Location: logout.php');           
}

if(isset($_POST["loginout"]))
{
    header('Location: logout.php');
   
}

?>








<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Aleš Trunda alestrunda.cz">
        <meta name="robots" content="index, follow">
        <meta name="viewport" content="width=device-width, initial-scale=1">    

        <link rel="icon" href="images/cakeworld_logo.png">

        <!-- Icon-Font -->
        <link rel="stylesheet" href="font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <!--[if IE 7]>
            <link rel="stylesheet" href="font-awesome/font-awesome/css/font-awesome-ie7.min.css" type="text/css">
        <![endif]-->

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="masterslider/style/masterslider.css" type="text/css">
        <link rel="stylesheet" href="masterslider/skins/default/style.css" type="text/css">
        <link rel="stylesheet" href="styles/main.css" type="text/css">
        <link rel="stylesheet" href="styles/profile.css" type="text/css">

        <script type="text/javascript" src="js/modernizr.js"></script>

        <title>Cake World - Profile</title>
        
    </head>

    <body>
        <div class="all">
            
            <header class="page-header">
                <div class="page-header-content container">
                    <div class="menu-button-container">
                        <i id="menu-button" class="menu-button fa fa-reorder"></i>
                    </div>
                    <form method="post" action="profile.php">
                        <nav id="nav-top" class="nav-top">
                            <h1 style="float:left;" class="logo-primary"><a href="index.php"><img id="logo-1" alt="Bakery" src="images/cakeworld_logo.png"></a></h1>
                            <div style="float:left;" class="logo-secondary">
                                <a  href="index.php"><img id="logo-2" alt="Bakery" src="images/logo_secondary.png"></a>
                            </div>
                            <ul style="float:right;">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="shop.php">All Products</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="profile.php">Profile</a></li>
                                <?php if(isset($_SESSION['userid']))
                                { ?>
                                    <li><button id="logout" name="loginout">Log-Out</button></li>                            
                                <?php
                                } else
                                { ?>
                                    <li><button id="login"name="loginout">Log-In</button></li>
                                <?php } ?>
                                <li><a href="shopping_cart.php"><i class="fa fa-cart-plus fa-2x"></i></a></li>
                            </ul>
                        </nav>
                    </form>
                </div>
            </header>
            <div class="container">
                <div>
                    <div class="margin-100"></div>
                    <div class="margin-40"></div>
                    <div class="margin-10"></div>
                    <div class="margin-10"></div>
                    <footer id="footer"></footer>
                </div>
                <div class="container">
                    <div class="margin-40"></div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div id="profile_div" class="col-md-5">
                            <text id="profile_header">Basic Information</text><br><br><br>
                            <?php 
                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <text id="profile_name"><i style="font-weight:bold;color:#684f40" class="fa fa-user fa-lg"></i>&nbsp;&nbsp;&nbsp;<?php echo $row['name'] ?></text><br><br>
                            <text id="profile_email"><i style="font-weight:bold;color:#684f40" class="fa fa-envelope fa-lg"></i> &nbsp;&nbsp;&nbsp;<?php echo $row['email'] ?></text><br><br>
                            <text id="other_info"><i style="font-weight:bold;color:#684f40" class="fa fa-phone fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['phone'] ?></text><br><br>
                            <text id="other_info"><i style="font-weight:bold;color:#684f40" class="fa fa-lock fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['password'] ?></text><br><br>
                            <text id="other_info"><i style="font-weight:bold;color:#684f40" class="fa fa-money fa-lg"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Discount Remaining - INR <?php echo $row['discount'] ?></text>
                            <?php } ?>
                            <br><br>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="margin-40"></div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div align="center">
                                <text id="history">Order Status</text>
                            </div> 
                            <br>
                            <table>
                                <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Date</th>
                                      <th scope="col">View Order</th>
                                      <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                
                                $query1 = "SELECT ordertable.orderid,date(ordertable.date_time) AS date,ordertable.status FROM ordertable WHERE ordertable.userid='$userid' GROUP BY ordertable.orderid ORDER BY date DESC";
                                $result1 = mysqli_query($conn,$query1);
                                
                                while($row1 = mysqli_fetch_assoc($result1))
                                {
                                ?>

                                    <tr>
                                        <td data-label="ID"><?php echo $row1['orderid'] ?></td>
                                        <td data-label="ID"><?php echo $row1['date'] ?></td>
                                        <td data-label="View Order">
                                            <a href="invoice.php?orderid=<?php echo $row1['orderid'] ?>" class="btn btn-danger">View Order</a>
                                        </td>
                                        <td data-label="Status">
                                            <button  class="btn btn-warning"><?php echo $row1['status'] ?></button>
                                        </td>
                                    </tr>  
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
                <div>
                    <div class="margin-100"></div>
                    <footer id="footer"></footer>
                    <div class="margin-40"></div>
                    <div class="margin-10"></div>
                    <div class="margin-10"></div>
                </div>
            </div>
            
        </div>

        <!-- JavaScript -->
	
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="owl-carousel/owl.carousel.min.js"></script>
        <script type="text/javascript" src="masterslider/masterslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="js/placeholder-fallback.js"></script>
        <script type="text/javascript" src="js/jquery.inview.min.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
    </body>
</html>