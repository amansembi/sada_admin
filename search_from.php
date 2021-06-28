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
<h6 class="card-title">Enter mobile no.</h6>
</div>		
<div class="row">
<div class="col-lg-6 col-md-12" style="margin-bottom:30px;">
<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Registered mobile no.">
</div>
<div class="col-lg-6 col-md-12" style="margin-bottom:30px;">
<a class="btn btn-primary">Search</a>
</div>


<div class="table" id="show">
</div>

</div>
</div>
    </div>
	
<script>
$(document).ready(function() {
  $("#mobile").change(function() {
    var id = $(this).val();
 $("#show").html("loading.....");
    if(id != "") {
      $.ajax({
        url:"search.php",
        data:{mobile:id},
        type:'POST',
        success:function(response) {
          var resp = $.trim(response);
          $("#show").html(resp);
        }
      });
    } else {
      $("#show").html("<option value=''>------- Select --------</option>");
    }
  });
});
</script>
<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







