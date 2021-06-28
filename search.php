<?php
include "ind/database.php";


if(isset($_POST['mobile']))
{
$mo=$_POST['mobile'];
$sql=mysqli_query($con,"select * from `user_info` where mobile='$mo'");
if($sql)
{
if(mysqli_num_rows($sql)==0)
{
echo "<script>alert('NO User registered');</script>";
}
else{
echo "<table  class='table table-striped jambo_table bulk_action'>
<tr class='headings'>
<th class='column-title' style='text-align:center;'>User Name</th>
<th class='column-title' style='text-align:center;'>Service Name</th>
<th class='column-title' style='text-align:center;'>Mobile Number</th>
<th class='column-title' style='text-align:center;'>Address</th>
<th class='column-title' style='text-align:center;'> Print </th>
</tr>";
while($row=mysqli_fetch_array($sql))
{
echo "<tr class='even pointer rows'>
<td>".$row['username']."</td>
<td>".$row['service_name']."</td>
<td >".$row['mobile']."</td>
<td >".$row['address']."</td>
<td><a href='print_form.php?id=".$row['id']." 'class='btn btn-primary'>Print</a></td>
</tr>";
}
echo "</table>";
}
}
else{
echo mysqli_error();
}
}
?>