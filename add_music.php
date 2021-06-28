<?php
include "ind/database.php";
if(isset($_POST['submit'])) 
{
$list=mysqli_real_escape_string($con,$_POST['list']);

// Count total files
 $countfiles = count($_FILES['file']['name']);

 // Looping all files
 for($i=0;$i<$countfiles;$i++){
  $filename = $_FILES['file']['name'][$i];
 
  // Upload file
  move_uploaded_file($_FILES['file']['tmp_name'][$i],'data/'.$filename);
  
  $sql=mysqli_query($con,"INSERT INTO  `music`(`play_list`,`music`) 
values('$list','$filename')");
if($sql)
{
echo "<script>alert('Added successfully');
		window.location.assign('music.php');</script>";
}
else{
echo mysqli_error();
}
}
  
 
 }
?>