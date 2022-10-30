<?php
//fetch.php
include_once('connection.php');
$columns = array('productname','type','weight','price');

$query = "SELECT product.*,product_price_weight.* FROM product NATURAL JOIN product_price_weight";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE productname LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}





$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query );

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["productid"].'" data-column="productname">' . $row["productname"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["productid"].'" data-column="type">' . $row["type"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["productid"].'" data-column="weight">' . $row["weight"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["productid"].'" data-column="price">' . $row["price"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["productid"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($conn)
{
$query = "SELECT product.*,product_price_weight.* FROM product NATURAL JOIN product_price_weight";
 
 $result = mysqli_query($conn, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($conn),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
