<?php

include_once("connection.php");
session_start();
if(isset($_POST["loginout"]))
{
    header('Location: logout.php');
   
}
?>


<!DOCTYPE html>

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
        
    <!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="masterslider/style/masterslider.css" type="text/css">
    <link rel="stylesheet" href="masterslider/skins/default/style.css" type="text/css">
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    
    <script type="text/javascript" src="js/modernizr.js"></script>
    
	<title>Cake World - About</title>
</head>

<body>
	<div id="all">
        <header class="page-header">
            <div class="page-header-content container">
                <div class="menu-button-container">
                    <i id="menu-button" class="menu-button fa fa-reorder"></i>
                </div>
                <form method="post" action="about.php">
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
        
        <section class="top-section">
        	<div class="offset-borders">
                <div class="full-header-container" id="header-about">
                    <div class="full-header">
                        <div class="container">
                            <h1>About</h1>
                            <h3>What Is Our Company Worth For</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section id="quote-section">            
            <div class="container">
               	<div class="quote">
                   	We work all the time with our customers and together we are able to create beautifull and amazing cakes that surely brings positive results and complete satisfaction.
                </div>
            </div>
      	</section>
        
        <section id="about-section">
        	<div class="section-content">
                <div class="container">
                    <header class="section-header">
                        <h1>About Our Bakery &amp; Cakery</h1>
                    </header>
                    
                    <div class="row">
                    	<div class="col-md-6 onscroll-animate">
                        	<img class="img-responsive" alt="cup and logo" src="images/cup_and_logo.jpg">
                        </div>
                        <div class="col-md-1 onscroll-animate" data-delay="400"></div>
                        <div class="col-md-5 onscroll-animate" data-delay="400">
                        	<article>
                            	<div class="article-header-2">
                        			<h1>The Story Of Our Success</h1>
                        		</div>
                                <p>
                                	Creating culinary delights like The Cake Shop does takes a special gift, but it’s even sweeter when mixed with a love of family and community. Megan and those who work with Linda can’t say enough about her generous heart. 
								</p>
                                
                                <div class="margin-20"></div>
                                
                                <p>
									The loyalty of old and new customers seems to stem from her passion for her craft but also for people and using her gift to serve others. On any given day, The Cake Shop donates large portions of their baked goods to charitable causes. “My mom is the hardest-working woman I know.
                               	</p>
                            </article>
                            
                            <div class="margin-20"></div>
                            
                            <div class="margin-70"></div>
                        </div>
                    </div>
              	</div>
          	</div>
      	</section>
        
        
        <section class="top-section">
        	<div class="offset-borders">
                <div class="full-header-container" id="header-services">
                    <div class="full-header">
                        <div class="container">
                            <h1>Services</h1>
                            <h3>Some of our main services</h3>
                        </div>
                    </div>
                </div>
            </div>
     	</section>
        
        <div class="margin-70"></div>
        
        <section id="services-section">
            <div class="container">
            	<div class="margin-80"></div>
            	<article>
                    <div class="row">
                        <div class="col-md-4 onscroll-animate" data-delay="500">
                        	<div class="article-header-3">
                                <h1>WHAT WE BAKE AND CAKE</h1>
                           	</div>
                            <p>Cake is often served as a celebratory dish on ceremonial occasions, such as weddings, anniversaries, and birthdays. There are countless cake recipes; some are bread-like, some are rich and elaborate, and many are centuries old. Cake making is no longer a complicated procedure; while at one time considerable labor went into cake making (particularly the whisking of egg foams), baking equipment and directions have been simplified so that even the most amateur cook may bake a cake.</p>
                        </div>
                        <div class="col-md-1 onscroll-animate" data-delay="500"></div>
                        <div class="col-md-6 onscroll-animate">
                            <img class="img-responsive" alt="services image" src="images/services_img.jpg">
                        	<div class="margin-20"></div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        
       <div class="margin-70"></div>

        
        <section class="contact-section">            
            <div class="container">
                <div class="content-box">
                    <!-- Google map -->
                    <div class="google-map-big-container onscroll-animate">
                        <div class="google-map">
                            <div id="map-canvas"></div>
                        </div>
                    </div>
                    <!-- /Google map -->
                </div>
            </div>
        </section>
        
        
    </div>
    
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4XRIKmpyt5ec8IN6TjYqqlCN8xsya4Rw&callback=initMap">
    </script>
    <script>
        function initMap() {
            var map_canvas = $('#map-canvas');
            if(map_canvas.length == 0)
                return;
            var map;
            var myLatlng = new google.maps.LatLng(26.9112479,75.7860383);
            var center = new google.maps.LatLng(26.9112479,75.7860383);
            function mapInitialize() {
                var mapOptions = {
                    scrollwheel: false,
                    zoom: 13,
                    center: center
                };
                map = new google.maps.Map(map_canvas.get(0), mapOptions);
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map
                });
            }
            google.maps.event.addDomListener(window, 'load', mapInitialize);
        }
      </script>
    
    
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
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
