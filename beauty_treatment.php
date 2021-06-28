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
       <form method="post" action="add_beauty.php">
		   <div class="col-lg-12 col-md-12" style="margin-bottom:50px; margin-top:15px;">
		   <div class="col-lg-4 col-md-4" >
		   <p>Choose service</p>
			<select name="service" class="form-control">
			<option value="">Choose</option>
			<?php 
$run = mysqli_query($con,"select * from `category`");
if($run)
{
while($row=mysqli_fetch_array($run))
{
?>
<option value="<?php echo $row['cat_name'];?>"><?php echo $row['cat_name'];?></option>
<?php
}
}
else
{
echo mysqli_error();
}
?>
           </select>
		   </div>
		   </div>
			
			
<div class="row">
<div class="col-lg-6 col-md-6" style="border-right:1px solid#c1c2c3;">

<div class="col-lg-12 col-md-12" >
<p><b>User Name</b></p>
<input type="text" name="username" class="form-control">
</div>

<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>Date Of Birth</b></p>
<input type="date" name="dob" class="form-control">
</div>

<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>Mobile No</b></p>
<input type="number" name="mobile" class="form-control">
</div>



<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>Post-Cod</b></p>
<input type="number" name="p_code" class="form-control">
</div>



<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>E-Mail</b></p>
<input type="email" name="email" class="form-control">
</div>

<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>General Practitioner</b></p>
<input type="text" name="guid" class="form-control">
</div>

<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>Gender</b></p>
  <input type="radio"  name="gender" value="male" > <label style="margin-right:30px;">Male</label>
  <input type="radio"  name="gender" value="male"> <label style="margin-right:30px;">Female</label>
</div>


<div class="col-lg-12 col-md-12" style="margin-top:10px;">
<p><b>Address</b></p>
<textarea class="form-control" name="address" rows="12" required></textarea>
</div>
</div>
<div class="col-lg-6 col-md-6">

<div class="col-lg-12 col-md-12">

<p><b>1. Skin Analise</b></p>
  <input type="checkbox"  name="a[]" value="Dry" > <label style="margin-right:30px;">Dry</label>
  <input type="checkbox"  name="a[]" value="Oily"> <label style="margin-right:30px;">Oily</label>
  <input type="checkbox"  name="a[]" value="Dark"> <label style="margin-right:30px;">Dark</label><br/>
  <input type="checkbox"  name="a[]" value="Sensitive"> <label style="margin-right:30px;">Sensitive</label>
  <input type="checkbox"  name="a[]" value="Fare"> <label style="margin-right:30px;">Fare</label>
  <input type="checkbox"  name="a[]" value="Combination"> <label style="margin-right:30px;">Combination</label><br/>

</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>2. Surgery</b></p>
<input type="checkbox"  name="b[]" value="Yes" > <label style="margin-right:30px;">Yes</label>
  <input type="checkbox"  name="b[]" value="No"> <label style="margin-right:30px;">No</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>3. Ailments</b></p>
<input type="checkbox"  name="c[]" value="Yes" > <label style="margin-right:30px;">Yes</label>
  <input type="checkbox"  name="c[]" value="No"> <label style="margin-right:30px;">No</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>4. Pregnant</b></p>
<input type="checkbox"  name="d[]" value="Yes" > <label style="margin-right:30px;">Yes</label>
  <input type="checkbox"  name="d[]" value="No"> <label style="margin-right:30px;">No</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>5. Notes</b></p>
<textarea name="e" class="form-control" ></textarea>
</div>

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







