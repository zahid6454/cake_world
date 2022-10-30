<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "pointerr_cakeworld";
  $dbpass = "CVNJB-XVD7X-T392H-RQQTV-9BT4M";
  $dbname = "pointerr_cakeworld";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
    }
    
?>