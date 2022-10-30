<?php
//fetch.php
include_once('connection.php');
$columns = array('userid','name', 'email', 'phone', 'discount');

$query = "SELECT * FROM user ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE name LIKE "%'.$_POST["search"]["value"].'%" ';
}



$number_filter_row = mysqli_num_rows(mysqli_query($conn, $query));

$result = mysqli_query($conn, $query );

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div data-id="'.$row["userid"].'" data-column="name">' . $row["name"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["userid"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<div data-id="'.$row["userid"].'" data-column="phone">' . $row["phone"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["userid"].'" data-column="discount">' . $row["discount"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["userid"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($conn)
{
 $query = "SELECT * FROM user";
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