<?php

include_once('connection.php');


if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($conn, $_POST["value"]);
 $query = "UPDATE product SET ".$_POST["column_name"]."='".$value."' WHERE productid = '".$_POST["id"]."'";
 if(mysqli_query($conn, $query))
 {
  echo 'Data Updated';
 }
}
?>