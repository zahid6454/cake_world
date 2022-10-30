<?php
//fetch.php
include_once('connection.php');
$columns = array('name','phone','date');

$query = "SELECT ordertable.orderid,date(ordertable.date_time) AS date,user.name,user.phone FROM ordertable JOIN user WHERE ordertable.userid=user.userid AND ordertable.status='Completed' ORDER BY date desc ";



$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query );

$data = array();

while($row = mysqli_fetch_array($result))
{
    $x=$row["orderid"];
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["orderid"].'" data-column="name">' . $row["name"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["orderid"].'" data-column="phone">' . $row["phone"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["orderid"].'" data-column="date">' . $row["date"] . '</div>';
 $sub_array[] = '<a class="btn btn-danger" href="invoice.php?orderid='.$x.'">Delete</a>';
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT ordertable.orderid,date(ordertable.date_time) AS date,user.name,user.phone FROM ordertable JOIN user WHERE ordertable.userid=user.userid AND ordertable.status='Completed' ORDER BY date desc";
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
