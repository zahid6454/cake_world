<?php
//fetch.php
include_once('connection.php');
$columns = array('orderid','name','phone');

$query = "SELECT ordertable.orderid,user.name,user.phone FROM ordertable JOIN user WHERE ordertable.userid=user.userid AND ordertable.status='Received' GROUP BY ordertable.orderid ";

if(isset($_POST["search"]["value"]))
{
    $x = $_POST["search"]["value"];
    $query ="SELECT * FROM
    (SELECT ordertable.orderid,user.name,user.phone FROM ordertable JOIN user WHERE ordertable.userid=user.userid AND ordertable.status='Received' GROUP BY ordertable.orderid) AS t1 WHERE t1.name LIKE '%$x%' ";
}



$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query );

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["orderid"].'" data-column="name">' . $row["orderid"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["orderid"].'" data-column="name">' . $row["name"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["orderid"].'" data-column="phone">' . $row["phone"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["orderid"].'">View Orders</button>';
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT ordertable.orderid,user.name,user.phone FROM ordertable JOIN user ON ordertable.userid=user.userid GROUP BY ordertable.orderid";
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