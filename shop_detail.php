<!-- Link-->
<?php include "ind/head.php"; 
$q ="SELECT * FROM `shop`";
$rs = mysqli_query($con,$q);
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

<table id="example1" class="table table-striped table-bordered">
<thead>
<tr>
<th>Shop Name</th>
<th>Proprietor Name</th>
<th>GST Number</th>
<th>Mobile No</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php while($row=mysqli_fetch_array($rs)){
echo '<tr>
<td>'.$row['shop'].'</td>
<td>'.$row['p_name'].'</td>
<td>'.$row['gst'].'</td>
<td>'.$row['mobile'].'</td>
<td><a href='."shop_bill.php?id=".$row['id'].' class="btn btn-primary">View Bill</a></td></tr>';	
}?>
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







