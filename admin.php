<?php

include_once('connection.php');

$query = "SELECT COUNT(*) AS total FROM product";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalcakes = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM product";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalusers = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM
(SELECT DISTINCT ordertable.orderid FROM ordertable WHERE ordertable.status='Pending' GROUP BY ordertable.orderid) AS t1";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalNeworders = $row['total'];
}



$query = "SELECT COUNT(*) AS total FROM
(SELECT DISTINCT ordertable.orderid FROM ordertable WHERE ordertable.status='Received' GROUP BY ordertable.orderid) AS t1";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalReceived = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM
(SELECT DISTINCT ordertable.orderid FROM ordertable WHERE ordertable.status='Completed' GROUP BY ordertable.orderid) AS t1";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalCompleted = $row['total'];
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
    
    <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="masterslider/style/masterslider.css" type="text/css">
    <link rel="stylesheet" href="masterslider/skins/default/style.css" type="text/css">
    <link rel="stylesheet" href="styles/admin.css" type="text/css">
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    
    <script type="text/javascript" src="js/modernizr.js"></script>
    
	<title>Cake World - Admin</title>
   
</head>

<body>
    
    
    <div class="all">
        <header class="page-header">
            <div class="page-header-content container">
                <div class="menu-button-container">
                    <i id="menu-button" class="menu-button fa fa-reorder"></i>
                </div>
                <nav id="nav-top" class="nav-top">
                    <h1 style="float:left;" class="logo-primary"><a href="admin.php"><img id="logo-1" alt="Bakery" src="images/cakeworld_logo.png"></a></h1>
                        <div style="float:left;" class="logo-secondary">
                            <a  href="admin.php"><img id="logo-2" alt="Bakery" src="images/logo_secondary.png"></a>
                        </div>
                        <ul style="float:right;">
                            <li><a id="navbar_options" class="" href="admin.php">Home</a></li>
                            <li><a id="navbar_options" class="" href="users/users.php">Users</a></li>
                        <li><a  href="#">Products</a>
                        	<ul>
                                <li><a id="navbar_options" href="add_product.php">Add Products</a></li>
                            	<li><a id="navbar_options" href="all_products/index.php">All Products</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Orders</a>
                        	<ul>
                            	<li><a id="navbar_options" href="new_orders/index.php">New Orders</a></li>
                                <li><a id="navbar_options" href="pending_orders/index.php">Pending Orders</a></li>
                                
                            </ul>
                        </li>
                        <li><a href="admin_login.php" style="color: red;">Log-Out</a></li>
                    </ul>
                </nav>
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
            
            <div class="margin-10"></div>
            <div class="margin-10"></div>
            <div class="margin-10"></div>
            
            <div align="center" class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <button id="info_box2"><label id="info_text_part">New Orders</label><br><label id="info_number_part"><?php echo $totalNeworders ?></label></button>
                </div>
                <div class="col-md-2">
                    <button id="info_box3"><label id="info_text_part">Pending Orders</label><br><label id="info_number_part"><?php echo $totalReceived ?></label></button>
                </div>
                <div class="col-md-2">
                    <button id="info_box4"><label id="info_text_part">Completed Orders</label><br><label id="info_number_part"><?php echo $totalCompleted ?></label></button>
                </div>
                <div class="col-md-2">
                    <button id="info_box5"><label id="info_text_part">Total Cakes</label><br><label id="info_number_part"><?php echo $totalcakes ?></label></button>
                </div>
                <div class="col-md-2">
                    <button id="info_box1"><label id="info_text_part">Total Users</label><br><label id="info_number_part"><?php echo $totalusers ?></label></button>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="margin-40"></div>
            <div class="margin-10"></div>
            <div class="margin-10"></div>
            
            <div class="row">
                <div class="col-md-1"></div>
                <div style="margin-bottom: 5%;" align="center" class="col-md-5">
                    <a href="add_product.php"><button id="shortcut_box1"><i class="fa fa-plus fa-2x"></i><br><label id="shortcut_text_part">Add Product</label></button></a>
                </div>
                <div align="center" class="col-md-5">
                    <a href="all_products/index.php"><button id="shortcut_box2"><i class="fa fa-birthday-cake fa-2x"></i><br><label id="shortcut_text_part">Total Cakes</label> - <label id="info_icon_part"><?php echo $totalcakes ?></label></button></a>
                </div>
                <div class="col-md-1"></div>
            </div>
            
            <div class="margin-40"></div>
            
            <div class="row">
                <div class="col-md-1"></div>
                <div style="margin-bottom: 5%;" align="center" class="col-md-5">
                    <a href="new_orders/index.php"><button id="shortcut_box3"><i class="fa fa-thumbs-up fa-2x"></i><br><label id="shortcut_text_part">New Orders</label> - <label id="info_icon_part"><?php echo $totalNeworders ?></label></button></a>
                </div>
                <div align="center" class="col-md-5">
                    <a href="pending_orders/index.php"><button id="shortcut_box4"><i class="fa fa-cubes fa-2x"></i><br><label id="shortcut_text_part">Pending Orders</label> - <label id="info_icon_part"><?php echo $totalReceived ?></label></button></a>
                </div>
                <div class="col-md-1"></div>
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
