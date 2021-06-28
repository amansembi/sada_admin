<!-- Link-->
<?php include "ind/head.php";
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
            <h6 class="card-title">Bill Detail</h6>
            </div>			
<div class="row">
<div class="col-lg-12 col-md-12">
<table class="table table-striped jambo_table bulk_action">
<tr>
<th>Bill Number</th>
<th>Proprietor Name</th>
<th>Address</th>
<th>Action</th>
</tr>
<?php 
$run = mysqli_query($con,"SELECT DISTINCT bid,p_name,address FROM bill");
if($run)
{
while($row=mysqli_fetch_array($run))
{	
echo '<tr>
<td>'.$row['bid'].'</td>
<td>'.$row['p_name'].'</td>
<td>'.$row['address'].'</td>
<td><a href='."re_print.php?id=".$row['bid'].' class="btn btn-primary">View Bill</a></td></tr>';
}
}
else
{
echo mysqli_error();
}
?>
</table>

</div>

</div>
</div>
    </div>
	

<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







