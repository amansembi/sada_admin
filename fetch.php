<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=chahal", "root", "");

$column = array('service_name', 'username', 'mobile', 'p_code', 'gender', 'email');

$query = "SELECT * FROM user_info";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE service_name LIKE "%'.$_POST['search']['value'].'%" 
 OR username LIKE "%'.$_POST['search']['value'].'%" 
 OR mobile LIKE "%'.$_POST['search']['value'].'%" 
 OR p_code LIKE "%'.$_POST['search']['value'].'%" 
 OR gender LIKE "%'.$_POST['search']['value'].'%" 
 OR email LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'select * from `user_info`  ORDER BY name ASC';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['username'];
 $sub_array[] = $row['service_name'];
 $sub_array[] = $row['mobile'];
 $sub_array[] = $row['gender'];
 $sub_array[] = $row['p_code'];
 $sub_array[] = $row['address'];
 $sub_array[] = $row['note'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "select * from `user_info`  ORDER BY name ASC";
 $statement = $connect->prepare($query);+
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>