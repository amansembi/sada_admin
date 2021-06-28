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
<h6 class="card-title">Print Bill</h6>
</div>		
<div class="row">
<div class="col-lg-6 col-md-12" style="margin-bottom:30px;">
<select  class="form-control " name="shop"  id="classe">
<option>Choose Shop</option>
<?php 
$run=mysqli_query($con,"select * from `shop`");
if($run)
{
while($row=mysqli_fetch_array($run))
{
echo "<option value=".$row['shop'].">".$row['shop']."</option>";
}
}
else
{
echo mysql_error();
}
?>
</select>
</div>


<div class="table" id="show">
</div>

</div>
</div>
    </div>
	
<script>
$(document).ready(function() {
  $("#classe").change(function() {
    var id = $(this).val();
 $("#show").html("loading.....");
    if(id != "") {
      $.ajax({
        url:"show.php",
        data:{classe:id},
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







