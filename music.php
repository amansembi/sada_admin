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
            <h6 class="card-title">Add Music</h6>
            </div>
<form method="post" action="add_music.php" enctype='multipart/form-data'>			
<div class="row">
<div class="col-lg-12 col-md-12">
<p>Play list Name</p>
<input type="text" name="list" class="form-control">
</div>


<div class="col-lg-12 col-md-12" style="margin-top:30px;">
<p>Uplod Music</p>
<input type="file" name="file[]" id="file" multiple>
</div>
<div class="col-lg-12 col-md-12" style="margin-top:30px;">
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







