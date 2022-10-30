<?php

session_start();
include_once('connection.php');
$_SESSION['flag'] = 1;
$price="";
if(isset($_POST["loginout"]))
{
    header('Location: logout.php');
   
}


// if(isset($_POST["loginout"]) && isset($_SESSION['$userid']))
// {
//     header('Location: logout.php');
   
// }
// else if(isset($_POST["loginout"]))
// {   
//     header('Location: login.php');
// }


?>



<!DOCTYPE html>
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
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="masterslider/style/masterslider.css" type="text/css">
    <link rel="stylesheet" href="masterslider/skins/default/style.css" type="text/css">
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    
    <script type="text/javascript" src="js/modernizr.js"></script>
    
	<title>Cake World</title>
    
    <style>
		#theme-customizer 
        {
			position: fixed;
			width: 225px;
			left: 0;
			top: 40%;
			background-color: #f7f7f7;
			border: 1px #e5e5e5 solid;
			z-index: 9999;
			padding: 30px 0 30px 30px;
			color: #696969;
			font-size: 18px;
			-webkit-transition: all 0.2s ease-out;
			-moz-transition: all 0.2s ease-out;
			-o-transition: all 0.2s ease-out;
			transition: all 0.2s ease-out;
		}
		
		#theme-customizer.slide-out {
			left: -225px;
		}
		
		#theme-customizer a {
			color: #696969;
			-webkit-transition: all 0.1s ease-out;
			-moz-transition: all 0.1s ease-out;
			-o-transition: all 0.1s ease-out;
			transition: all 0.1s ease-out;
		}
		
		#theme-customizer a:hover {
			text-decoration: underline;
			color: #feb822;
		}
		
		#theme-customizer p {
			margin-bottom: 5px;
		}
		
		#theme-customizer .theme-customizer-header {
			color: #000;
			margin-bottom: 25px;
		}
		
		#theme-customizer .theme-customizer-subheader {
			font-style: italic;
			font-size: 14px;
			color: #000;
		}
			
		#theme-customizer .theme-customizer-icon {
			position: absolute;
			right: -31px;
			top: -1px;
			height: 32px;
			width: 32px;
			font-size: 15px;
			line-height: 30px;
			border: 1px #e5e5e5 solid;
			border-left: none;
			background-color: #f7f7f7;
			text-align: center;
			padding-left: 2px;
			cursor: pointer;
		}
	</style>
</head>

<body>
	<div id="all">
        <header class="page-header">
            <div class="page-header-content container">
                <div class="menu-button-container">
                    <i id="menu-button" class="menu-button fa fa-reorder"></i>
                </div>
                <form method="post" action="index.php">
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
                                <li><button id="login" name="loginout">Log-In</button></li>
                            <?php } ?>
                            <li><a href="shopping_cart.php"><i class="fa fa-cart-plus fa-2x"></i></a></li>
                        </ul>
                    </nav>
                </form>
            </div>
        </header>
        
        <section id="slider-container" class="top-section">
            <div class="offset-borders">
                <div class="ms-fullscreen-template">
                    <div class="master-slider ms-skin-round" id="masterslider">
                        <div class="ms-slide">
                            <img src="images/slider/1.jpg" alt="header img">     
                            <div class="ms-layer">
                            	<h2 class="ms-layer" data-type="text" data-effect="rotate3dbottom(30,0,0,70)">A Piece Of Love</h2>
                                <h3 class="ms-layer" data-type="text" data-effect="rotate3dbottom(30,0,0,70)" data-delay="200">Pleasure and Taste in one Place</h3>
                            </div>
                        </div><!-- .ms-slide -->
                        <div class="ms-slide">
                            <img src="images/slider/2.jpg" alt="header img">     
                            <div class="ms-layer">
                            	<h2 class="ms-layer ms-right" data-type="text" data-effect="rotate3dright(30,0,0,70)">Fresh Baked Goods</h2>
                                <h3 class="ms-layer ms-right" data-type="text" data-effect="rotate3dright(30,0,0,70)">We bake to make you happy</h3>
                            </div>
                        </div><!-- .ms-slide -->
                        <div class="ms-slide">
                            <img src="images/slider/3.jpg" alt="header img">     
                            <div class="ms-layer">
                            	<h2 class="ms-layer" data-type="text" data-effect="rotate3dtop(30,0,0,70)">We Are Here For You</h2>
                                <h3 class="ms-layer" data-type="text" data-effect="rotate3dtop(30,0,0,70)">Made with Taste and love</h3>
                            </div>
                        </div><!-- .ms-slide -->
                    </div><!-- .master-slider -->
                </div><!-- .ms-fullscreen-template -->
        	</div>
        </section>
        
        <section id="products-section">
            <div class="section-content">
                <div class="container">
                    <header class="section-header">
                        <h1>Our Best Products</h1>
                        <p>Check some of our best products and feel the great passion for food</p>
                    </header>
                    

                    <div class="row">
                        <div class="col-md-12 onscroll-animate">
                            <div class="row">
                                
                                    <?php 
                        
                                    $query = "SELECT * FROM product LIMIT 12";
                                    $result = mysqli_query($conn, $query );
                                    
                
                                    while($row = mysqli_fetch_array($result))
                                    {
                                    ?>
                                <div class="col-md-3 onscroll-animate">
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

                                                <p class="product-price"><?php echo $price; ?></p>
                                                <?php $price=""; ?>
                                            </div>
                                        </div><!-- .product-detail-container -->
                                    </div><!-- .product -->
                                </div>
                                
                                
                                <?php } ?>


                            </div><!-- .row -->
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                    
                    <div class="row">
                        <p class="text-center onscroll-animate">
                            <a href="shop.php" class="button-void">See All Our Products</a>
                        </p>
                    </div>
                    <div class="margin-60"></div>
                </div><!-- .container -->
            </div><!-- .section-content -->
        </section>
        
        <section id="testimonials-section" class="section-dark section-color-cover parallax-background">
            <div class="section-content onscroll-animate">
                <div id="testimonials-slider" class="testimonials-slider">
                    <div class="container">
                        <div class="testimonial centered-columns">
                            <div class="centered-column testimonial-avatar-wrapper">
                                <div class="testimonial-avatar-container">
                                    <div class="testimonial-avatar">
                                        <img alt="image 1" src="images/image1.png">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-name">Emma Donoghue</div>
                            <div class="centered-column">
                                <div class="testimonial-content">
                                    “All you need is love. But a little chocolate now and then doesn't hurt.”
                                </div>
                            </div>
                        </div><!-- .testimonial -->
                    </div><!-- .container -->
                    <div class="container">
                        <div class="testimonial centered-columns">
                            <div class="centered-column testimonial-avatar-wrapper">
                                <div class="testimonial-avatar-container">
                                    <div class="testimonial-avatar">
                                        <img alt="image 2" src="images/image2.png">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-name">Mary Berry</div>
                            <div class="centered-column">
                                <div class="testimonial-content">
                                    “If I was made of cake I'd eat myself before somebody else could.” 
                                </div>
                            </div>
                        </div><!-- .testimonial -->
                    </div><!-- .container -->
                    <div class="container">
                        <div class="testimonial centered-columns">
                            <div class="centered-column testimonial-avatar-wrapper">
                                <div class="testimonial-avatar-container">
                                    <div class="testimonial-avatar">
                                        <img alt="image 3" src="images/image3.png">
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-name">Scarlett Pomers</div>
                            <div class="centered-column">
                                <div class="testimonial-content">
                                    “Chocolate cake is the bomb!”
                                </div>
                            </div>
                        </div><!-- .testimonial -->
                    </div><!-- .container -->
                </div><!-- .testimonials-slider -->
            </div><!-- .section-content -->
        </section>
        
        <section id="heading-section" class="section-white-cover parallax-background">
            <div class="section-content">
                <div class="container">
                    <div class="margin-90"></div>
                    <h2 class="heading-huge">Different Types Of Cake Products</h2>
                    <h3 class="heading-small">You will find the only the best products in our stores</h3>
                    <img id="bread-image" alt="bread" class="img-responsive center-block onscroll-animate" src="images/bread.png">
                </div><!-- .container -->
            </div><!-- .section-content -->
        </section>
        
        <div class="margin-100"></div>
        
        <div class="margin-40"></div>
        
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="masterslider/masterslider.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    <script type="text/javascript" src="js/placeholder-fallback.js"></script>
    <script type="text/javascript" src="js/jquery.inview.min.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
    
    <script type="text/javascript">
		$(document).ready(function(e) {
            $('.theme-customizer-icon').click(function(e) {
                $('#theme-customizer').toggleClass('slide-out');
            });
			
			var logo1 = $('#logo-1');
			var logo2 = $('#logo-2');
			var body_el = $('body');
			var all_el = $('#all');
			var bread_img = $('#bread-image');
			var devices_img = $('#devices-img');
			var slider_testimonial = $('#testimonials-slider');
			var slider_post_images = $('#post-images-slider-1');
			var post_slider = $('#post-slider-1');
			$('.theme-syle').click(function(e) {
				e.preventDefault();
				if($('#dark-stylesheet').length > 0) {
					$('#dark-stylesheet')[0].disabled=true;
					$('#dark-stylesheet').remove();
				}
                body_el.removeClass();
				all_el.removeClass();
				$('#devices-section.section-black-cover').removeClass('section-black-cover').addClass('section-color-cover');
				$('.section-black-cover').removeClass('section-black-cover').addClass('section-white-cover');
				bread_img.attr('src', 'images/bread.png');
				devices_img.attr('src', 'images/devices.png');
				logo1.attr('src', 'images/logo.png');
				logo2.attr('src', 'images/logo_secondary.png');
				
				switch($(this).attr('id')) {
					case 'theme-pattern':
						body_el.addClass('bg-pattern');
						break;
					case 'theme-boxed':
						body_el.addClass('bg-pattern2');
						all_el.addClass('boxed');
						break;
					case 'theme-dark':
						$('head').append('<link id="dark-stylesheet" rel="stylesheet" type="text/css" href="styles/dark-skin.css">');
						$('.section-white-cover').removeClass('section-white-cover').addClass('section-black-cover');
						bread_img.attr('src', 'images/bread_dark_skin.png');
						devices_img.attr('src', 'images/devices_dark_skin.png');
						$('#devices-section').removeClass('section-color-cover').addClass('section-black-cover');
						logo1.attr('src', 'images/logo_dark_skin.png');
						logo2.attr('src', 'images/logo_secondary_dark_skin.png');
						break;
					case 'theme-dark-pattern':
						$('head').append('<link id="dark-stylesheet" rel="stylesheet" type="text/css" href="styles/dark-skin.css">');
						$('.section-white-cover').removeClass('section-white-cover').addClass('section-black-cover');
						bread_img.attr('src', 'images/bread_dark_skin.png');
						devices_img.attr('src', 'images/devices_dark_skin.png');
						$('#devices-section').removeClass('section-color-cover').addClass('section-black-cover');
						logo1.attr('src', 'images/logo_dark_skin.png');
						logo2.attr('src', 'images/logo_secondary_dark_skin.png');
						body_el.addClass('bg-pattern3');
						break;
				}
				
				var owl = slider_testimonial.data('owlCarousel');
				owl.destroy();
				slider_testimonial.owlCarousel({
					singleItem: true
				});
				var owl = slider_post_images.data('owlCarousel');
				owl.destroy();
				var owl = post_slider.data('owlCarousel');
				owl.destroy();
				post_slider.owlCarousel({
					singleItem: true,
					navigation: true,
					navigationText: false,
					pagination: false
				});
				slider_post_images.owlCarousel({
					singleItem: true
				});
				
				$(window).trigger('resize');
            });
        });
	</script>
</body>
</html>
