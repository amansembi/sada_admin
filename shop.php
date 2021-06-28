<!-- Link-->
<?php include "ind/head.php"; ?>
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
            <h6 class="card-title">Add Shop</h6>
            </div>
				<form method="post" action="add_shop.php">			
				<div class="row">
				<div class="col-lg-6 col-md-12">
				<p>Shop Name</p>
				<input type="text" name="s_name" class="form-control">
				</div>

				<div class="col-lg-6 col-md-12">
				<p>Proprietor Name</p>
				<input type="text" name="p_name" class="form-control">
				</div>

				<div class="col-lg-6 col-md-12">
				<p>GST Number</p>
				<input type="text" name="g_number" class="form-control">
				</div>

				<div class="col-lg-6 col-md-12">
				<p>Mobile No.</p>
				<input type="number" name="mobile" class="form-control">
				</div>

				<div class="col-lg-6 col-md-12">
				<p>Email</p>
				<input type="text" name="email" class="form-control">
				</div>


				<div class="col-lg-6 col-md-12">
				<p>User Id</p>
				<input type="text" name="uid" class="form-control">
				</div>



				<div class="col-lg-12 col-md-12">
				<p>Address</p>
				<textarea class="form-control" name="address" rows="4" required></textarea>
				</div>

				<div class="col-lg-12 col-md-12">
				<button type="submit" name="submit" value="Submit" class="btn btn-success" style="margin:15px;">Submit</button>
				<button class="btn btn-primary" type="reset" style="margin:15px;">Reset</button>
				</div>

				</form>
				</div>
				</div>
    </div>
	

<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







