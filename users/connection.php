<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "id4996650_saif";
  $dbpass = ",G!FXUb2kt77";
  $dbname = "id4996650_cakeworld";

  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
    }
    
?>