<form method="post" action="bill_cut.php">
<?php
include "ind/database.php";

$class=$_POST['classe'];
if(isset($_POST['classe']))
{
$class=$_POST['classe'];
$sql=mysqli_query($con,"select * from `shop` where shop='$class'");
if($sql)
{
if(mysqli_num_rows($sql)==0)
{
echo "<script>alert('NO shop registered');</script>";
}
else{
echo "<table  class='table table-striped jambo_table bulk_action'>
<tr class='headings'>
<th class='column-title' style='text-align:center;'>Shop Id</th>
<th class='column-title' style='text-align:center;'>Shop Name</th>
<th class='column-title' style='text-align:center;'>GST No.</th>
<th class='column-title' style='text-align:center;'>Mobile No.</th>
<th class='column-title' style='text-align:center;'>Address</th>

</tr>";
while($row=mysqli_fetch_array($sql))
{
echo "<tr class='even pointer rows'>
<td><input type='text' name='shop_id' class='form-control' value='".$row['id']."' readonly></td>
<td><input type='text' name='shop_name' class='form-control' value='".$row['shop']."' readonly></td>
<td><input type='text' name='gst' class='form-control' value='".$row['gst']."' readonly></td>
<td><input type='text' name='mobile' class='form-control' value='".$row['mobile']."' readonly></td>
<td><input type='text' name='address' class='form-control' value='".$row['address']."' readonly></td>
</tr>";
}
echo "</table>";
}
}
else{
echo mysqli_error();
}
}


$res=mysqli_query($con,"select * from `bill`");
if($res)
{
if(mysqli_num_rows($res)==0)
{
$sid=1;
}
else{
while($row=mysqli_fetch_array($res))
{
$r=$row[0];
}
$sid=$r+1;
}
}
else{
echo mysqli_error();
}

$brar = date('y-m-d');
?>
<input class="form-control catagory" type="hidden" value="<?php echo $sid; ?>" name="bid">
<input class="form-control catagory" type="hidden" value="<?php echo $brar; ?>" name="date">


<table id="head" class="table table-striped jambo_table bulk_action">
<tr>
<td>Service</td>
<td>
<input class="form-control catagory" type="text" name="type[]">
</td>
<td>Detail</td>
<td>
<input class="form-control catagory" type="text" name="quantity[]">
</td>	
<td>Amount</td>
<td><input class="form-control catagory" type="number" name="amount[]">
</td>
<td><i class="fa fa-plus" id="add"></td>
</tr>
</table>
<button class="btn btn-primary" type="submit" name="submit" >UPDATE</button>
</form>
<script>
$(document).ready(function(){
var c = '';
$('#add').click(function(){
c++;
var html = '<tr id="row"><td>Service</td><td><input class="form-control catagory" type="text" name="type[]"></td><td>Detail</td><td><input class="form-control catagory" type="text" name="quantity[]"></td><td>AMOUNT</td><td><input class="form-control catagory" type="text" name="amount[]" value=""></td><td><i class="fa fa-minus" id="remove"></td></tr>';
$('#head').append(html);
$('#rows').val(c);
$("#head").on("click","#remove",function(){
$(this).closest("#row").remove();
})
});
});
</script>
