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
        
        <title>Cake World - Pending Orders</title>
        
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
                                    <li><a id="navbar_options" href="../new_orders/index.php">New Orders</a></li>
                                    <li><a id="navbar_options" href="index.php">Pending Orders</a></li>
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
                    <div align="center">
                        <h1 style="font-size: 20px;">Pending Orders Table</h1>
                    </div>
                    <div class="table-responsive">
                        <br />
                        <div class="table-responsive">
                            <br />
                            <div id="alert_message"></div>
                            <table id="user_data" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>OrderID</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>View Order</th>
                                    </tr>
                                </thead>
                            </table>
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
        
        <script type="text/javascript" language="javascript" >
         $(document).ready(function(){

          fetch_data();

          function fetch_data()
          {
           var dataTable = $('#user_data').DataTable({
            "processing" : true,
            "serverSide" : true,
            "order" : [],
            "ajax" : {
             url:"fetch.php",
             type:"POST"
            }
           });
          }

          function update_data(id, column_name, value)
          {
            $.ajax({
                url:"update.php",
                method:"POST",
                data:{id:id, column_name:column_name, value:value},
                success:function(data)
                {
                $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
                $('#user_data').DataTable().destroy();
                fetch_data();
                }
            });
            setInterval(function(){
                $('#alert_message').html('');
            }, 5000);
          }

          $(document).on('blur', '.update', function(){
           var id = $(this).data("id");
           var column_name = $(this).data("column");
           var value = $(this).text();
           update_data(id, column_name, value);
          });




          $(document).on('click', '.delete', function(){
           var id = $(this).attr("id");

           window.location.href='invoice.php?orderid='+id+'';

          });
         });
        </script>
        
    </body>
</html>
