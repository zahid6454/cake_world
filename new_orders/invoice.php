<?php

include_once('connection.php');
    
$orderid=$_GET['orderid'];

$query = "SELECT user.userid,user.name,user.phone,user.discount,ordertable.*,product_price_weight.*,product.* FROM user JOIN ordertable JOIN product_price_weight JOIN product WHERE user.userid=ordertable.userid AND ordertable.productid=product.productid AND ordertable.productid=product_price_weight.productid AND ordertable.orderid='$orderid' GROUP BY product.productid";

$result=mysqli_query($conn,$query);
$total = 0;

while($row = $result->fetch_assoc())
{   
	$username         		= $row['name'];
	$phone           		= $row['phone'];
	$date        			= $row['date_time'];
	
	$address         		= $row['delivary_address'];
	$status         		= $row['status'];
	$discount         		= $row['discount'];
	
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

        <link rel="icon" href="../images/cakeworld_logo.png">

        <!-- Icon-Font -->
        <link rel="stylesheet" href="font-awesome/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Google Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600italic,700%7CMontserrat:400,700%7CLato' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../owl-carousel/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="../masterslider/style/masterslider.css" type="text/css">
        <link rel="stylesheet" href="../masterslider/skins/default/style.css" type="text/css">
        <link rel="stylesheet" href="../styles/admin.css" type="text/css">
        <link rel="stylesheet" href="../styles/main.css" type="text/css">

        <script type="text/javascript" src="js/modernizr.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <title>Cake World - View Orders</title>
        
        <style>
            .invoice-title h2, .invoice-title h3 { display: inline-block; }
            .table > tbody > tr > .no-line { border-top: none; }
            .table > thead > tr > .no-line { border-bottom: none; }
            .table > tbody > tr > .thick-line { border-top: 2px solid; }
        </style>
    </head>

    <body>
        <div class="all">
            
            <header class="page-header">
                <div class="page-header-content container">
                    <div class="menu-button-container">
                        <i id="menu-button" class="menu-button fa fa-reorder"></i>
                    </div>
                    <nav id="nav-top" class="nav-top">
                        <h1 style="float:left;" class="logo-primary"><a href="../admin.php"><img id="logo-1" alt="Bakery" src="../images/cakeworld_logo.png"></a></h1>
                        <div style="float:left;" class="logo-secondary">
                            <a  href="../admin.php"><img id="logo-2" alt="Bakery" src="../images/logo_secondary.png"></a>
                        </div>
                        <ul style="float:right;">
                            <li><a id="navbar_options" class="" href="../admin.php">Home</a></li>
                            <li><a id="navbar_options" class="" href="../users/users.php">Users</a></li>
                            <li><a  href="#">Products</a>
                                <ul>
                                    <li><a id="navbar_options" href="../add_product.php">Add Products</a></li>
                                    <li><a id="navbar_options" href="../all_products/index.php">All Products</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Orders</a>
                                <ul>
                                    <li><a id="navbar_options" href="index.php">New Orders</a></li>
                                    <li><a id="navbar_options" href="../pending_orders/index.php">Pending Orders</a></li>
                                    <li><a id="navbar_options" href="#">Completed Orders</a></li>
                                </ul>
                            </li>
                            <li><a href="../admin_login.php" style="color: red;">Log-Out</a></li>
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
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div align="center" class="invoice-title">
                                <h1 style="font-size:20px;"><?php echo $orderid ?></h1>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <address>
                                        <strong style="font-size: 18px;">Billed To : </strong><text style="font-size:17px"><?php echo $username ?></text><br>
                                        <strong style="font-size: 18px;">Phone no : </strong><text style="font-size:17px"><?php echo $phone ?></text><br>
                                        <strong style="font-size: 18px;">Delivery Address : </strong><text style="font-size:17px"><?php echo $address ?></text><br>

                                        <br>
                                        <strong style="font-size: 18px;">Order Time : </strong><text style="font-size:17px"><?php echo date('h:i A', strtotime($date)); ?></text><br>
                                        <strong style="font-size: 18px;">Order Date : </strong><text style="font-size:17px"><?php echo date('d-m-Y', strtotime($date)); ?></text><br><br>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><strong>Order Summary</strong></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-condensed">
                                            <thead>
                                                <tr>
                                                    <td><strong>Item</strong></td>
                                                    <td class="text-center"><strong>Price</strong></td>
                                                    <td class="text-center"><strong>Weight</strong></td>
                                                    <td class="text-center"><strong>Quantity</strong></td>
                                                    <td class="text-right"><strong>Totals</strong></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                <?php 
								$result=mysqli_query($conn,$query);
								
								while($row = $result->fetch_assoc())
								{
								?>
    							<tr>
    								<td><?php echo $row['productname'] ?></td>
    								<td class="text-center">₹ <?php echo $row['price'] ?></td>
    								<td class="text-center"><?php echo $row['weight'] ?></td>
    								<td class="text-center"><?php echo $row['quantity'] ?></td>
    								<td class="text-right">₹ <?php $total+=($row['price'] * $row['quantity']); echo ($row['price'] * $row['quantity']); ?></td>
    							</tr>
								<?php } ?>
                                
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Discount</strong></td>
    								<td class="no-line text-right">₹ (<?php echo $discount ?>)</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Total</strong></td>
    								<td class="thick-line text-right">₹ <?php echo ($total-$discount) ?></td>
    							</tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="margin-40"></div>
                    <form method="post" action="invoice.php">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div align="center" class="col-md-3">
                                <a href="invoice_fetch.php?orderid=<?php echo $orderid ?>&command=1" name="recieve_button" id="recieve_button">Recieve Order</a>
                                <br><br>
                            </div>
                            <div class="col-md-2"></div>
                            <div align="center" class="col-md-3">
                                <a href="invoice_fetch.php?orderid=<?php echo $orderid ?>&command=0" name="delete_button" id="delete_button">Delete Order</a>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </form>
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
    function run(value,command)
    {
        window.location.href='invoice_fetch.php?orderid='+value+'&command='+command+'';
        
    }


</script>