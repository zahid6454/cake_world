<?php
session_start();

if(isset($_SESSION['userid']))
{
    include_once('connection.php');
    $productid=$_GET['productid'];

    $userid = $_SESSION['userid'];

    $half=$_GET['half'];
    $one=$_GET['one'];
    $two=$_GET['two'];


    if($half != "undefined" && $half != 0)
    {
        $query = "INSERT INTO `addtocart` (`userid`, `productid`, `weight`, `quantity`) VALUES ('$userid', '$productid', '1/2', '$half')";
        
        mysqli_query($conn,$query);
    }
    if($one != "undefined" && $one != 0)
    {
        $query = "INSERT INTO `addtocart` (`userid`, `productid`, `weight`, `quantity`) VALUES ('$userid', '$productid', '1', '$one')";
        
        mysqli_query($conn,$query);
    }
    if($two != "undefined" && $two != 0)
    {
        $query = "INSERT INTO `addtocart` (`userid`, `productid`, `weight`, `quantity`) VALUES ('$userid', '$productid', '2', '$two')";
        
        mysqli_query($conn,$query);
    }

    header('Location: shop.php');    


}
else
{
    header('Location: logout.php');    
    
}

?>