<?php
include "ind/database.php";
$a=$_POST['a'];  
$b=$_POST['b'];
$c=$_POST['c'];  
$d=$_POST['d'];
$e=$_POST['e'];

$service=$_POST['service'];
$username=$_POST['username'];
$dob=$_POST['dob'];	
$mobile=$_POST['mobile'];
$p_code=$_POST['p_code'];
$email=$_POST['email'];	
$guid=$_POST['guid'];

$address=$_POST['address'];
$gender=$_POST['gender'];

//loop
$ch="";
foreach($b as $ch1){
	$ch .= $ch1.",";
}

$fg="";
foreach($c as $fg1){
	$fg .= $fg1.",";
}


$hp="";
foreach($d as $hp1){
	$hp .= $hp1.",";
}

$chk="";  
foreach($a as $chk1)  
   {  
      $chk .= $chk1.",";  
   }
//loop end

if($mobile==""||$address=="")
{
echo "<script>alert('All field must be filled');
window.location.assign('user.php');</script>";
}
$sql_u = "SELECT * FROM user_info WHERE mobile='$mobile'";
$res_u = mysqli_query($con, $sql_u);

if (mysqli_num_rows($res_u) > 0) {
$name_error = "Sorry... this Mobile no.is already exist"; 
echo "<script>alert('this Mobile no.is already exist');
window.location.assign('user.php');</script>";
}
else
{
$sql=mysqli_query($con,"INSERT INTO  `user_info`(`service_name`,`username`, `dob`, `mobile`, `p_code`, `email`, `guid`, `address`, `gender`,`diseases`, `product`, `treatment`, `allergy`, `note`)
values('$service','$username','$dob','$mobile','$p_code','$email','$guid','$address','$gender','$chk','$ch','$fg','$hp','$e')");
if($sql)
{
$_SESSION['mobile']=$mobile;
echo "<script>alert('User Registered successfully');		
window.location.assign('user.php');</script>";			
}
else
{
echo mysqli_error();
}
}
?>