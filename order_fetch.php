<?php

include('connection.php');
session_start();

$delivary= $_GET['delivary'];

$userid = $_SESSION['userid'];

$temp=round(microtime(true) * 1000);

$orderid='order'.(string)$temp;  

$query = "SELECT * FROM addtocart WHERE userid='$userid'";
$query1="";
mysqli_query($conn,$query);

$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))
{
    $productid = $row['productid'];
    $weight = $row['weight'];
    $quantity = $row['quantity'];

    $query1= "INSERT INTO ordertable (orderid, userid, productid, weight, quantity, delivary_address, status) 
            VALUES ('$orderid', '$userid', '$productid', '$weight', '$quantity', '$delivary', 'Pending')";
            
    mysqli_query($conn,$query1);
            
    $query1 = "DELETE FROM addtocart WHERE addtocart.userid='$userid' AND addtocart.productid='$productid' AND addtocart.weight='$weight'
            ";
    mysqli_query($conn,$query1);
    
}                



 header('Location: shop.php');    



?>