<?php

session_start();
include_once('connection.php');
if(isset($_POST["loginout"]))
{
    header('Location: logout.php');  
}

if(isset($_SESSION['userid']))
{
    $userid = $_SESSION['userid'];

    $query = "SELECT * FROM addtocart WHERE userid='$userid'";
        
    mysqli_query($conn,$query);

    $result = mysqli_query($conn,$query);
    

}
else
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
        <link rel="stylesheet" href="styles/shopping_cart.css" type="text/css">

        <script type="text/javascript" src="js/modernizr.js"></script>

        <title>Cake World - Cart</title>
        
    </head>

    <body>
        <div class="all">
            
            <header class="page-header">
                <div class="page-header-content container">
                    <div class="menu-button-container">
                        <i id="menu-button" class="menu-button fa fa-reorder"></i>
                    </div>
                    <form method="post" action="shopping_cart.php">
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
                        <div align="center">
                            <text id="order_title">Cakes You Have Selected</text>
                        </div> 
                        <br>
                        <table>
                            <thead>
                                <tr>
                                  <th scope="col">Picture</th>
                                  <th scope="col">Name</th>
                                  <th scope="col">Weight</th>
                                  <th scope="col">Quantity</th>
                                  <th scope="col">Price (₹)</th>
                                  <th scope="col">Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php 
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $productid = $row['productid'];
                                $quantity = $row['quantity'];

                                $query1 = "SELECT * FROM product WHERE productid='$productid'";
                                    
                                $result1 = mysqli_query($conn,$query1); 
                                
                                while($row1 = mysqli_fetch_assoc($result1))
                                {
                                    $productNAME = $row1['productname'];
                                    $image = $row1['image'];
                                }
                                
                            ?>
                                <tr>
                                    <td data-label="Picture">
                                        <img class="img-fluid" width="100px" height="100px" src="images/<?php echo $image ?>">
                                    </td>
                                    <td data-label="Name"><?php echo $productNAME ?></td>
                                    <td data-label="Weight"><?php echo $row['weight'] ?></td>
                                    <td data-label="Quantity">
                                        <?php echo $quantity ?>
                                    </td>
                                    <?php
                                        $weight=$row['weight'];
                                        $query2 = "SELECT * FROM product_price_weight WHERE productid='$productid' AND weight='$weight'";
                                    
                                        $result2 = mysqli_query($conn,$query2); 
                                        
                                        while($row2 = mysqli_fetch_assoc($result2))
                                        {
                                            $price = $row2['price'];
                                        }
                                    ?>
                                    <td data-label="Price (₹)">₹ <?php echo $price ?></td>
                                    <td data-label="Remove">
                                        <a onclick=remove('<?php echo $productid ?>','<?php echo $quantity ?>','<?php echo $weight ?>') class="btn btn-danger">Remove</a>
                                    </td>
                                </tr>  
                            <?php } ?>
                            </tbody>
                        </table>
                        
                        <div class="margin-100"></div>
                        
                        
                        
                        <div class="margin-100"></div>
                        
                        <div class="container">
                            <div align="center">
                                <text id="contact_title">Contact Information</text>
                            </div>
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <br>
                                    <input id="contact_address" type="text" placeholder="Type Delivery Address">
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </div>
                        
                        <div class="margin-40"></div>
                        
                        <div align="center">
                            <a onclick=order() id="order_button">Order Now</a>
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
    </body>
</html>


<script>

function remove(productid,qunatity,weight)
{
   window.location.href='shopping_cart_fetch.php?productid='+productid+'&quantity='+qunatity+'&weight='+weight+'';
}
function order()
{
    var delivary = $('#contact_address').val();
    
    window.location.href='order_fetch.php?delivary='+delivary+'';
}


</script>