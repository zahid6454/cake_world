<?php
session_start();
include_once('connection.php');

if(isset($_POST["loginout"]))
{
    header('Location: logout.php');
   
}

$query = "SELECT COUNT(*) AS total FROM product";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalcakes = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM product WHERE type='Birthday Cakes'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalBdaycakes = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM product WHERE type='Wedding Cakes'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalwedcakes = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM product WHERE type='Cheese Cakes'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalchesscakes = $row['total'];
}


$query = "SELECT COUNT(*) AS total FROM product WHERE type='Eggless Cakes'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalchesscakes = $row['total'];
}



$query = "SELECT COUNT(*) AS total FROM product WHERE type='Eggless Cakes'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totalegglesscakes = $row['total'];
}



$query = "SELECT COUNT(*) AS total FROM product WHERE type='Eggless Cakes'";

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $totaldiabetcakes = $row['total'];
}





$query = "SELECT * FROM product";

$result = mysqli_query($conn,$query);

$counter = 0;
$output='';
$price='';

?>




<!DOCTYPE html>
<html lang="en-gb" xml:lang="en-gb" class="no-js">
<head>
	<meta charset="utf-8">
    <!--[if lt IE 9]> 
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Aleš Trunda alestrunda.cz">
    <meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    
    <link rel="icon" href="images/cakeworld_logo.png">

    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Icon-Font -->
    <link rel="stylesheet" href="font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
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
    
    <script type="text/javascript" src="js/modernizr.js"></script>
    
	<title>Cake World - All Product</title>
</head>

<body>
	<div id="all">
        <header class="page-header">
            <div class="page-header-content container">
                <div class="menu-button-container">
                    <i id="menu-button" class="menu-button fa fa-reorder"></i>
                </div>
                <form method="post" action="shop.php">
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
        
        <div class="margin-100"></div>
        <div class="margin-40"></div>
        
        <div class="container">
        	
            <div class="sidebar col-md-3">
            	<div class="margin-40"></div>
            	<article class="onscroll-animate">
                	<div class="article-header-4">
                  		<h1>Categories</h1>
                    </div>
                    <ul class="list-arrows">
                    	
                        <li>
                        	<a href="#">
                            	<article>
                                    <div class="list-arrows-content">
                                        All Cakes
                                    </div>
                                    <div class="list-arrows-value">115</div>
                                </article>
                           	</a>
                       	</li>
                        
                        <li>
                        	<a href="#">
                            	<article>
                                    <div class="list-arrows-content">
                                        Birthday Cakes
                                    </div>
                                    <div class="list-arrows-value">11</div>
                                </article>
                           	</a>
                       	</li>
                        
                       	<li>
                        	<a href="#">
                            	<article>
                                    <div class="list-arrows-content">
                                        Wedding Cakes
                                    </div>
                                    <div class="list-arrows-value">15</div>
                        		</article>
                          	</a>
                        </li>
                        
                      	<li>
                        	<a href="#">
                            	<article>
                                    <div class="list-arrows-content">
                                       Cheese Cakes
                                    </div>
                                    <div class="list-arrows-value">33</div>
                        		</article>
                          	</a>
                  		</li>
                        
                        <li>
                        	<a href="#">
                            	<article>
                                    <div class="list-arrows-content">
                                        Eggless Cakes
                                    </div>
                                    <div class="list-arrows-value">02</div>
                        		</article>
                      		</a> 
                        </li>
                        
                      	<li>
                        	<a href="#"> 
                            	<article>
                                    <div class="list-arrows-content">
                                        Diabetes Cakes
                                    </div>
                                    <div class="list-arrows-value">25</div>
                        		</article>
                            </a>
                      	</li>
                    </ul>
                </article>
                <article class="onscroll-animate">
                	<div class="article-header-4">
                        <h1>Tags</h1>
                    </div>
                    <a href="#"><div class="tag">Price ( High - Low )</div></a><br>
                    <a href="#"><div class="tag">Price ( Low - High )</div></a><br>
                   	<a href="#"><div class="tag">Chocolate Cake</div></a><br>
                    <a href="#"><div class="tag">Strawberry Cake</div></a><br>
                    <a href="#"><div class="tag">Vanilla Cake</div></a><br>
                   	<a href="#"><div class="tag">Cheese Cake</div></a><br>
                    </article>
                <div class="margin-60"></div>
            </div>
            <div class="col-md-9">
                <section id="features-section">
                    <div id="section-content" class="section-content">
                    
                        <header class="section-header-full">
                            <h1>All Cakes</h1>
                        </header>
                        

                        <?php 
                        
                        while($row = mysqli_fetch_assoc($result))
                        {
                            $counter++;

                            if($counter==1)                
                            {
                        ?>
                             <div class="row">
                                <div class="col-md-4 onscroll-animate">
                        <?php
                        
                        }
                        else if($counter==2)                
                        {
                        ?>
                        <div class="col-md-4 onscroll-animate" data-delay="400">
                        
                        <?php
                        }
                        else if($counter==3)                
                        {
                        ?>
                        <div class="col-md-4 onscroll-animate" data-delay="600">
                        <?php
                        }
                        ?>
                        <div class="product">
                            <div class="product-preview">
                                <a href="single_cake.php?productid=<?php echo $row['productid'] ?>"><img src="images/<?php echo $row['image'] ?>"></a>
                            </div>
                            <div class="product-detail-container">
                                
                                <div class="product-detail">
                                    <h2><a href="single_cake.php?productid=<?php echo $row['productid'] ?>"><?php echo $row['type'] ?></a></h2>
                                    <p><?php echo $row['productname'] ?></p>

                        <?php

                        $productid = $row['productid'];
                        $query1 = "SELECT * FROM product_price_weight WHERE product_price_weight.productid='$productid' ORDER BY price";
                        $result1 = mysqli_query($conn,$query1);
                        while($row = mysqli_fetch_assoc($result1))
                        {
                            $price.= '₹ '.$row['price'].' | ';
                        }
                        $price = substr_replace($price, "", -2);

                        ?>

                        <p class="product-price"><?php echo $price ?></p>
                        <?php $price=""; ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php 

            if($counter==3)
            { ?>
                </div>
            <?php
                $counter=0;
            }
        }


            $price = "";

            ?>

                    </div><!-- .section-content -->
                </section>
        
          	</div>
            
      	</div><!-- .container -->
        
    </div>
    
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

</script>