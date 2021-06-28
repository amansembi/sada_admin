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
          
<form method="post" action="add_user.php">

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

<p><b>1. Do any of the following apply to you?</b></p>
  <input type="checkbox"  name="a[]" value="Diabetes" > <label style="margin-right:30px;">Diabetes</label>
  <input type="checkbox"  name="a[]" value="Epliepsy"> <label style="margin-right:30px;">Epliepsy</label>
  <input type="checkbox"  name="a[]" value="Oedema"> <label style="margin-right:30px;">Oedema</label><br/>
  <input type="checkbox"  name="a[]" value="Phlebitis"> <label style="margin-right:30px;">Phlebitis</label>
  <input type="checkbox"  name="a[]" value="Psoriasis"> <label style="margin-right:30px;">Psoriasis</label>
  <input type="checkbox"  name="a[]" value="Poor circulation"> <label style="margin-right:30px;">Poor circulation</label><br/>
  <input type="checkbox"  name="a[]" value="Sunburn"> <label style="margin-right:30px;">Sunburn</label>
  <input type="checkbox"  name="a[]" value="Varicose veins"> <label style="margin-right:30px;">Varicose veins</label>
  <input type="checkbox"  name="a[]" value="Moles"> <label style="margin-right:30px;">Moles</label><br/>
  <input type="checkbox"  name="a[]" value="Skin diseases"> <label style="margin-right:30px;">Skin diseases</label>
  <input type="checkbox"  name="a[]" value="Pregnancy"> <label style="margin-right:30px;">Pregnancy</label>
  <input type="checkbox"  name="a[]" value="New Scar Tissue"> <label style="margin-right:30px;">New Scar Tissue</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>2. Do you use any of these product?</b></p>
 <input type="checkbox"  name="b[]" value="Ratina A" > <label style="margin-right:30px;">Ratina A</label>
  <input type="checkbox"  name="b[]" value="Glicolic Acid"> <label style="margin-right:30px;">Glicolic Acid</label>
  <input type="checkbox"  name="b[]" value="Accutane"> <label style="margin-right:30px;">Accutane</label><br/>
  <input type="checkbox"  name="b[]" value="Oedema"> <label style="margin-right:30px;">Oedema</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>3. Have you had waxing treatment before?</b></p>
<input type="checkbox"  name="c[]" value="Yes" > <label style="margin-right:30px;">Yes</label>
  <input type="checkbox"  name="c[]" value="No"> <label style="margin-right:30px;">No</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:48px;">
<p><b>4. Have you any known allergies?</b></p>
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







