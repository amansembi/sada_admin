<!-- Link-->
<?php include "ind/head.php"; 
if(isset($_POST['cat_add'])){
$err = [];
$cat = mysqli_real_escape_string($con,$_POST['cat_name']);
$test = "select cat_name from cat where cat_name='".$cat."'";
$res=mysqli_query($con,$test);
if(mysqli_num_rows($res)==1){
    $err[] = "Category Already Added";
}else{
    mysqli_query($con,"INSERT INTO `category`(`cat_name`) VALUES('$cat')");
    $err[] = "Category Added Sucessfully"; 
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
                <h6 class="card-title">Add Category</h6>
            </div>
    <div class="row">
<div class="col-lg-6 col-md-12">
<form method="post">
<p>Add Category</p>
<input type="text" id="subject" name="cat_name" class="form-control"  placeholder="Enter Category name">
<br/>
<button type="submit" class="btn btn-success" name="cat_add">ADD Category</button>
</form>
</div>

<div class="col-lg-6 col-md-12">
<p>Category Details</p>
<hr/>
<ul>
<?php $q="select cat_name from category";
$res=mysqli_query($con,$q);
while($row=mysqli_fetch_assoc($res)){?>
<li style="margin:15px;">  <i data-feather="edit-3"></i> &nbsp &nbsp  <?php echo $row['cat_name'];?></li>
<?php }?>
</ul>
</div>
</div>



	
			
			
			
        </div>
    </div>
	

<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







