<?php
include_once('connection.php');
session_start();

if(isset($_POST["loginout"]))
{
    header('Location: logout.php');
   
}

$productid=$_GET['productid'];

$query = "SELECT * FROM product WHERE product.productid='$productid'";
$result = mysqli_query($conn,$query);

while($row = $result->fetch_assoc())
{   
    $productname = $row['productname'];
    $image = $row['image'];
	$type = $row['type'];
	$description = $row['description'];
	
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
        <link rel="stylesheet" href="styles/single_cake.css" type="text/css">

        <script type="text/javascript" src="js/modernizr.js"></script>

        <title>Cake World - Cake</title>
        
    </head>

    <body>
        <div class="all">
            
            <header class="page-header">
                <div class="page-header-content container">
                    <div class="menu-button-container">
                        <i id="menu-button" class="menu-button fa fa-reorder"></i>
                    </div>
                    <form method="post" action="single_cake.php">
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
                    <div class="row">
                        <div class="margin-40"></div>
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <div class="margin-40"></div>
                            <div class="margin-40"></div>
                            <img style="border:5px solid #fdb822;" class="img-fluid" width="250px" height="355px" src="images/<?php echo $image ?>"><br>
                        </div>
                        <div class="col-md-5">
                            <text id="cake_name"><?php echo $productname ?></text><br>
                            <text id="cake_type"><?php echo $type ?></text><br><br>
                            <p id="cake_description"><?php echo $description ?></p>
                            <?php
                            $query = "SELECT product_price_weight.weight,product_price_weight.price FROM product_price_weight WHERE product_price_weight.productid='$productid'";

                            $result=mysqli_query($conn,$query);
                            while($row = $result->fetch_assoc())
                            {
                                if($row['weight']=="1/2")
                                {
                            ?>
                            <div>
                                <label for="half_kg_input">0.5 kg ( ₹<?php echo $row['price'] ?> ) &nbsp;&nbsp;&nbsp;-</label>
                                <input id="half_kg_input" type="number" placeholder="Type Number of Cakes" min="0">
                            </div>
                                <?php }
                                if($row['weight']=="1")
                                {
                                ?>
                            <div>
                                <label for="one_kg_input">1.0 kg ( ₹<?php echo $row['price'] ?> ) &nbsp;&nbsp;&nbsp;-</label>
                                <input id="one_kg_input" type="number" placeholder="Type Number of Cakes" min="0">
                            </div>
                                <?php }
                                if($row['weight']=="2")
                                {
                                ?> 
                            <div>
                                <label for="two_kg_input">2.0 kg ( ₹<?php echo $row['price'] ?> ) &nbsp;&nbsp;&nbsp;-</label>
                                <input id="two_kg_input" type="number" placeholder="Type Number of Cakes" min="0">
                            </div>
                                <?php }
                                } ?>
                            <br><br><a onclick=add('<?php echo $productid ?>') id="add_to_card_button">Add To Cart&nbsp;&nbsp;&nbsp;<i class="fa fa-shopping-cart fa-lg"></i></a>
                        </div>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
</html>


<script>

    function add(productid)
    {
        var half = $('#half_kg_input').val();
        var one = $('#one_kg_input').val();
        var two = $('#two_kg_input').val();

        window.location.href='single_cake_fetch.php?productid='+productid+'&half='+half+'&one='+one+'&two='+two+'';
    }
    

</script>