<?php

include_once('connection.php');

session_start();

$userid= $_SESSION['userid'];

$productid= $_GET['productid'];
$quantity= $_GET['quantity'];
$weight= $_GET['weight'];

$query = "DELETE FROM addtocart WHERE addtocart.userid = '$userid' AND addtocart.productid = '$productid' AND addtocart.quantity = '$quantity' AND addtocart.weight='$weight'";

mysqli_query($conn,$query);

header('Location: shopping_cart.php');    



?>