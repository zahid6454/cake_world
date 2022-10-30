<?php
include_once('connection.php');

$orderid=$_GET['orderid'];
$command=$_GET['command'];

// echo $orderid;
// echo $command;


if($command==1)
{
    $query = "UPDATE ordertable SET status = 'Received' WHERE ordertable.orderid = '$orderid' ";
    // echo $query;
    mysqli_query($conn,$query);
    header('Location: index.php');
}
else if($command==0)
{
    $query = "DELETE FROM ordertable WHERE orderid = '$orderid'";
    mysqli_query($conn,$query);
    header('Location: index.php');
}

?>