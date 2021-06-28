<?php
include "ind/database.php";
$s_name=$_POST['s_name'];
$p_name=$_POST['p_name'];	
$g_number=$_POST['g_number'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$id=$_POST['uid'];

if($s_name==""||$g_number=="")
{
echo "<script>alert('All field must be filled');
window.location.assign('shop.php');</script>";
}
$sql_u = "SELECT * FROM shop WHERE gst='$g_number'";
$res_u = mysqli_query($con, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
$name_error = "Sorry... this GST. no.is already exisist"; 
echo "<script>alert('this GST. no.is already exisist');
window.location.assign('shop.php');</script>";
}
else
{
$sql=mysqli_query($con,"INSERT INTO  `shop`(`shop`,`p_name`,`gst`,`mobile`,`address`,`user_id`)
values('$s_name','$p_name','$g_number','$mobile','$address','$id')");
if($sql)
{
$_SESSION['mobile']=$mobile;
echo "<script>alert('Shop Registered successfully');		
window.location.assign('shop.php');</script>";			
}
else
{
echo mysqli_error();
}
}
?>