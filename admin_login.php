<?php

    if(isset($_POST['Login']))
    {
        $username = $_POST["username"];
        $password = $_POST["password"];    

        
        if($username == "cakeworldusername" && $password == "cakeworldpassword")
        {
            header ("Location: admin.php");
        }
    }
    


?>


<html>

    <head>
    
        <title>Admin Log-In</title>
        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/shop-homepage.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <script src="bootstrap/js/jquery.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="icon" href="images/cakeworld_logo.png">
    
        <style>
            
            body
            {
                background-image: url(images/background.jpg);
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-position: center center;
                overflow-x: hidden;
                overflow-y: auto;
            }
            #login_body
            {
                background: rgba(216,0,0,0.8);
                border: 5px solid rgba(0,0,0,0.5);
                box-shadow: inset 0 0 100px rgba(0, 0, 0, 1);
                border-radius: 50px;
            }
            #login_header
            {
                font-family: 'Merienda One';
                color: white;
                margin-bottom: 2.5%;
            }
            #username,#password
            {
                outline: none;
                width: 70%;
                height: 7.5%;
                margin-bottom: 5%;
                border: 2px solid rgba(191,0,0,0.9);
                border-radius: 20px;
                font-size: 20px;
                padding-left: 20px;
                padding-right: 20px;
                font-family: Helvetica;
            }
            #login_button
            {
                background: transparent;
                margin-bottom: 2%;
                outline: none;
                font-family: 'Merienda One';
                color: white;
                font-size: 18px;
                border-radius: 10px;
                border: 2px solid white;
                padding: 5px 20px;
                transition: all 500ms ease;
            }
            #login_button:hover
            {
                background: white;
                color: rgba(191,0,0,1);
            }
            
            .clear
            {
                clear: both;
            }
            
            #total
            {
                position: absolute;
                background: rgba(0,0,0,0.5);
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
            }
            
        </style>
        
        
        
    </head>

    
    <body>
        <div id="total">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-4">
                    <br><br><br><br><br><br><br>
                    <div align="center" id="login_body">
                        <form action="admin_login.php" method="post">
                            <br>
                            <h1 id="login_header">Log-In</h1>
                            <br>
                            <div class="form-input">
                                <input id="username" type="text" name="username" placeholder="Username" required>
                            </div>
                            <div class="form-input">
                                <input id="password" type="password" name="password" placeholder="Password" required>
                            </div>
                            <button id="login_button" class="button-submit" type="submit" name="Login" >Log-In</button>
                            <div align="center" class="row">
                                <a style="text-decoration:none;color:white;" href="login.php">Customer Login</a>
                            </div>
                        </form>
                    </div>
                    <br><br><br><br>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        
        
    </body>

</html>