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
    
	<title>Cake World - Product</title>
   
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
            <div id="form_box">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <div class="col-md-5">
                                    <h1 style="font-size: 20px;">Add Cakes</h1>
                                    <label style="display: inline-block;">Name</label><br>
                                    <input style="width: 100%;" id="product_name_input" type="text" name="name" placeholder="Name of Product"><br><br>
                                    <label>Type</label><br>
                                    <input style="width: 100%;" id="product_type_input" type="text" name="type" placeholder="Type of Product"><br><br>
                                    <label>Description</label><br>
                                    <textarea id="description" name="description" placeholder="Description of Product"></textarea>
                                </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                    <div>
                                        <div class="margin-100"></div>
                                        <div class="margin-40"></div>
                                    </div>
                                    <label style="display: inline-block;">Price By Weight</label><br>
                                    <div>
                                        <input name="cake_price_half" id="cake_price_half" type="number" placeholder="0.5 kg Price of Cake" min="0">
                                        <input name="cake_price_one" id="cake_price_one" type="number" placeholder="1.0 kg Price of Cake" min="0">
                                        <input name="cake_price_two" id="cake_price_two" type="number" placeholder="2.0 kg Price of Cake" min="0">
                                    </div>
                                    <br>
                                    <div align="center">
                                        <input style="width: 80%;" name="file" id="cake_upload_picture" type="file">
                                    </div>
                                    <br><br>
                                    <div align="center">
                                        <button name="submit" style="width: 80%;" id="cake_add_button">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
