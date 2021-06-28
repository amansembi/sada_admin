<?php
include "ind/database.php";
if(isset($_POST['submit'])) 
{
$date=mysqli_real_escape_string($con,$_POST['date']);
$exp=mysqli_real_escape_string($con,$_POST['exp']);
$amount=mysqli_real_escape_string($con,$_POST['amount']);
$name=mysqli_real_escape_string($con,$_POST['name']);
$des = mysqli_real_escape_string($con,$_POST['dew']);
$sql=mysqli_query($con,"INSERT INTO  `other_exp`(`date`,`expensess`,`amount`,`name`,`detail`) 
values('$date','$exp','$amount','$name','$des')");
if($sql)
{
echo "<script>alert('Added successfully');
		window.location.assign('exp.php');</script>";
}
else{
echo mysqli_error();
}
}
?>