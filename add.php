<?php  
include "ind/database.php";
if(isset($_POST['sub']))  
{  
$a=$_POST['a'];  
$b=$_POST['b'];
$c=$_POST['c'];  
$d=$_POST['d'];
$e=$_POST['e'];

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
$in_ch=mysqli_query($con,"insert into wax(`diseases`, `product`, `treatment`, `allergy`, `note`) 
 values ('$chk','$ch','$fg','$hp','$e')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Inserted Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed To Insert")</script>';  
   }  
}  
?>  