<?php

include_once('connection.php');

if(isset($_POST['submit']))
{
    $file = $_FILES['file'];
    // print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $productname = $_POST['name'];
    $type = $_POST['type'];
    $description = $_POST['description'];

    $half=$_POST['cake_price_half'];
    $one=$_POST['cake_price_one'];
    $two=$_POST['cake_price_two'];
    
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed))
    {
        if($fileError === 0)
        {
            if($fileSize < 1000000)
            {
                $fileNameNew = uniqid('',true).".".$fileActualExt;

                $fileDestination = 'images/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                $temp=round(microtime(true) * 1000);

                $cakeid='cake'.(string)$temp;     

                $sql = "INSERT INTO product (productid, productname, type, image,description) VALUES ('$cakeid', '$productname', '$type', '$fileNameNew','$description')";

                // echo $sql."<br>";
                mysqli_query($conn,$sql);
                sleep(1);
                $sql1= "INSERT INTO product_price_weight (productid,weight,price)
                        VALUES('$cakeid','1/2','$half'),
                        ('$cakeid','1','$one'),
                        ('$cakeid','2','$two')";
                mysqli_query($conn,$sql1);                
                // echo $sql1."<br>";

                header("Location: add_product.php");
            }
            else
            {
                echo "upload less than 1 MB";
            }
        }
        else
        {
            echo "Problem with image file";
        }
    }
    else
    {
        echo "Upload image file only";
    }    
}


?>