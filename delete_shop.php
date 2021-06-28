<!-- Link-->
<?php include "ind/head.php"; 
if(isset($_POST['delete']))
{
$del=$_POST['id'];
$service=mysqli_query($con,"delete from `shop` where id='$del'");
if($service)
{
echo "<script>alert('Shop removed successfully');
window.location.assign('delete_shop.php');</script>";
}
else
{
echo mysqli_error();
}
}

?>
<!-- /Link-->
<body >
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-icon"></div>
</div>
<!-- ./ Preloader -->

<!-- Layout wrapper -->
<div class="layout-wrapper">


<!-- Header -->

<?php include "ind/header.php"; 
?>
 <!-- ./ Header -->


<!-- Content wrapper -->
<div class="content-wrapper">

<!-- begin::navigation -->
       <?php include "ind/side_menu.php"; 
?>
<!-- end::navigation -->


<div class="content-body">
<div class="content">
<!-- begin:content -->

<!-- end:content -->
<div class="card">
        <div class="card-body">
            <div class="card-title d-flex justify-content-between">
                <h6 class="card-title">Delete Shop</h6>
            </div>
    <div class="row">
<div class="col-lg-12 col-md-12">
 <?php
$q ="SELECT * FROM `shop`";
$res = mysqli_query($con,$q);
?>
<table id="example1" class="table table-striped table-bordered">
<thead>
<tr>
<th>Shop Name</th>
<th>Proprietor Name</th>
<th>GST Number</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php while($row=mysqli_fetch_assoc($res)){?>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
<tr>
<td><?php echo $row['shop']; ?></td>
<td><?php echo $row['p_name']; ?></td>
<td><?php echo $row['gst']; ?></td>
<td><input type="submit" class="form-control" name="delete" value="Delete" style="width:80px;"></td>
</tr>
</form>
<?php }?>
</tbody>
</table>

</div>
</div>



	
			
			
			
        </div>
    </div>
	

<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







