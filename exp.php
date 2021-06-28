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
            <h6 class="card-title">Add Expensess</h6>
            </div>
<form method="post" action="add_exp.php">			
<div class="row">
<div class="col-lg-6 col-md-12">
<p>Expensess Date</p>
<input type="date" name="date" class="form-control">
</div>

<div class="col-lg-6 col-md-12">
<p>Expensess Type</p>
<select class="form-control has-feedback-left" name="exp" required>
<option value="">SELECT</option>
<option value="Thread purchase">Thread purchase</option>
<option value="Cloth purchase">Cloth purchase</option>
<option value="lass purchase">Lass purchase</option>
<option value="Cloth accesries">Cloth accesries</option>
<option value="Electricity">Electricity</option>
<option value="Furniture">Furniture</option>
<option value="mentation">Maintenance</option>
<option value="Other">Other</option>
</select>
</div>

<div class="col-lg-6 col-md-12">
<p>Amount</p>
<input type="number" name="amount" class="form-control">
</div>

<div class="col-lg-6 col-md-12">
<p>Expenser Name</p>
<input type="text" name="name" class="form-control">
</div>

<div class="col-lg-12 col-md-12">
<p>Detail</p>
<textarea class="form-control" name="dew" rows="4" required></textarea>
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







