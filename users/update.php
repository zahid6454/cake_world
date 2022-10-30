<?php

include_once('connection.php');

if(isset($_POST["id"]))
{
    $userid=$_POST["id"];
    $value = mysqli_real_escape_string($conn, $_POST["value"]);
    $query = "UPDATE user SET ".$_POST["column_name"]."='".$value."' WHERE userid = '".$_POST["id"]."'";

    mysqli_query($conn, $query);
    
    $query1 = "SELECT user.name,user.email FROM user WHERE userid='$userid'";

    $result = mysqli_query($conn,$query1);

    while($row = mysqli_fetch_assoc($result))
    {
        $name = $row['name'];
        $email = $row['email'];
    }


    $msg = "Dear ".$name.", congratulations, you just got INR ".$value." discount.";

    // use wordwrap() if lines are longer than 70 characters
    // $msg = wordwrap($msg,70);

    // send email
    mail($email,"Discount offer from Cakeworld",$msg);



    echo 'Data Updated';
}
?>
