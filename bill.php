<?php 
include "ind/database.php";
$id=$_SESSION['b_id'];
$run=mysqli_query($con,"select * from `bill` where bid='$id'");
if($run)
{
$res=mysqli_fetch_array($run);
?>

<html>
<head>
<style>
.con{
  position: static;
    max-width: 900px;
    padding: 0px 15px;
    margin: 0 auto;
}
table, td, th {  
  border: 1px solid #ddd;

}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}

.forment_right{
  text-align:right;
}
.forment_left{
  text-align:left;
}
.forment_center{
  text-align:center;
}
</style>

</head>


<body>
<div class="con">
<table>
<tr>
<td><img class="logo" src="assets/media/image/logo-dark.png" alt="logo" style="width:200px;"></td>
<td class="forment_right">
<h4>Name : Chahal Embroidery</h4>
<h4>Mobile : (+91)77174-33097</h4>
<h4>Address : Near Peer Darghah,Village. Ghumiara,<br/>Mandi Dabwali (151211)</h4>
</td>
</tr>
</table>


<table>
<tr>
<td class="forment_left">GST : 03CYMPS3599G1ZU</td>
<td class="forment_center">TAX INVOICE</td>
<td class="forment_right">Date : <?php echo $res['date'];?></td>
</tr>
</table>

<table>
<tr>
<td class="forment_center" style="text-transform: uppercase;"> <b>Customer Detail</b></td>
</tr>
</table>
<?php
$sr=mysqli_query($con,"select * from `bill`");
if($res)
{
if(mysqli_num_rows($sr)==0)
{
$s=1;
}
else{
while($row=mysqli_fetch_array($sr))
{
$r = $row['id'];
}
$s = $r+1;
}
}
else{
echo mysqli_error();
}
?>
<table>
<tr>
<td>Recpit No. : <?php echo $s; ?>/-</td>
<td>M/S : <?php echo $res['p_name'];?></td>
<td>Mobile: <?php echo $res['mobile'];?></td>
<td>GST : <?php echo $res['gst'];?></td>
</tr>
</table>
<?php
}
else
{
mysql_error();
}    
$q ="select * from `bill` where bid='$id'";
$res = mysqli_query($con,$q);
?>
<table>
<tr>
<th>Sr. No</th>
<th>Name Of Service </th>
<th>Detail</th>
<th>Amount</th>
<th>Gst%</th>
<th>Total Tax</th>
<th>Total Amount</th>
</tr>

<?php 
$sr=0;
while($row=mysqli_fetch_assoc($res)){
$q = $row['quantity'];
$r = $row['amount'];
$typ = $row['type'];
$g = round($r/100*5, 3);

$t = round($r+$g, 3);

$sr++;
$fees=mysqli_query($con,"SELECT SUM(amount) AS `total_quantity` FROM `bill` WHERE bid='$id'");
$fees = mysqli_fetch_array($fees);
$total_qut = $fees['total_quantity'];
$fees=mysqli_query($con,"SELECT SUM(amount/100*5) AS `total_gst` FROM `bill` WHERE bid='$id'");
$fees = mysqli_fetch_array($fees);
$tex =round($fees['total_gst'], 3);
$final_amount = round($total_qut+$tex, 3);
echo '<tr><td>'.$sr.'</td><td>'.$typ.'</td><td>'.$q.'</td><td>'.$r.'</td><td>5%</td><td>'.$g.' /-</td><td>'.$t.' /-</td></tr>';}
?>

<tr>
<td colspan="3" style="text-align:center;">Total</td>
<td>Rs : <?php echo $total_qut;?></td>
<td>5%</td>
<td>Rs : <?php echo $tex;?> /-</td>
<td>Rs : <?php echo $final_amount;?> /-</td>
</tr>
</table>

<div style="width:50%;float:left;">
<h5>Seel & Signature</h5>
</div>

<div style="width:50%;float:right;">
<h3 style="color:#d10303; float:right;">Total Amount : Rs : <?php echo $tex+$final_amount?> /-</h3>
</div>
</div>
</body>
</html>