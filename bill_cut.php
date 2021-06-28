<?php
include "ind/database.php";
if(isset($_POST['submit']))
{
$s_id=$_POST['shop_id'];
$p_name=$_POST['shop_name'];
$gst=$_POST['gst'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$bid=$_POST['bid'];
$date=$_POST['date'];
$type=$_POST['type'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];
$examno=count($type);
for($exam=0;$exam<$examno;$exam++)
{
$d=$quantity[$exam];
$s=$amount[$exam];
$t=$type[$exam];
if(empty($s))
{
}
else
{
$sql = mysqli_query($con,"insert into `bill`(`bid`, `shop_id`, `p_name`, `gst`, `mobile`, `address`, `type`, `quantity`, `amount`, `date`)
values('$bid','$s_id','$p_name','$gst','$mobile','$address','$t','$d','$s','$date')");
if($sql)
{
	$_SESSION['b_id']=$bid;
echo "<script>alert('Detail setting added');
window.location.assign('bill.php');</script>";
}
else
{
echo mysqli_error();
}
}
}
}
?>