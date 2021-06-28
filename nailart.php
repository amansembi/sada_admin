<!-- Link-->
<?php include "ind/head.php";?>
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
            <h6 class="card-title">General Inf</h6>
            </div>
<form method="post" action="add.php"> 			
<div class="row">
<div class="col-lg-12 col-md-12">

<p><b>1. Do any of the following apply to you?</b></p>
  <input type="checkbox"  name="a[]" value="Diabetes" > <label style="margin-right:30px;">Diabetes</label>
  <input type="checkbox"  name="a[]" value="Epliepsy"> <label style="margin-right:30px;">Epliepsy</label>
  <input type="checkbox"  name="a[]" value="Oedema"> <label style="margin-right:30px;">Oedema</label>
  <input type="checkbox"  name="a[]" value="Phlebitis"> <label style="margin-right:30px;">Phlebitis</label>
  <input type="checkbox"  name="a[]" value="Psoriasis"> <label style="margin-right:30px;">Psoriasis</label>
  <input type="checkbox"  name="a[]" value="Poor circulation"> <label style="margin-right:30px;">Poor circulation</label>
  <input type="checkbox"  name="a[]" value="Sunburn"> <label style="margin-right:30px;">Sunburn</label>
  <input type="checkbox"  name="a[]" value="Varicose veins"> <label style="margin-right:30px;">Varicose veins</label><br/>
  <input type="checkbox"  name="a[]" value="Moles"> <label style="margin-right:30px;">Moles</label>
  <input type="checkbox"  name="a[]" value="Skin diseases"> <label style="margin-right:30px;">Skin diseases</label>
  <input type="checkbox"  name="a[]" value="Pregnancy"> <label style="margin-right:30px;">Pregnancy</label>
  <input type="checkbox"  name="a[]" value="New Scar Tissue"> <label style="margin-right:30px;">New Scar Tissue</label>
  

</div>
<div class="col-lg-12 col-md-12" style="margin-top:40px;">
<p><b>2. Do you use any of these product?</b></p>
 <input type="checkbox"  name="b[]" value="Ratina A" > <label style="margin-right:30px;">Ratina A</label>
  <input type="checkbox"  name="b[]" value="Glicolic Acid"> <label style="margin-right:30px;">Glicolic Acid</label>
  <input type="checkbox"  name="b[]" value="Accutane"> <label style="margin-right:30px;">Accutane</label>
  <input type="checkbox"  name="b[]" value="Oedema"> <label style="margin-right:30px;">Oedema</label>
</div>

<div class="col-lg-12 col-md-12" style="margin-top:40px;">
<p><b>3. Have you had waxing treatment before?</b></p>
<input type="checkbox"  name="c[]" value="Yes" > <label style="margin-right:30px;">Yes</label>
  <input type="checkbox"  name="c[]" value="No"> <label style="margin-right:30px;">No</label>

</div>

<div class="col-lg-12 col-md-12" style="margin-top:40px;">
<p><b>4. Have you any known allergies?</b></p>
<input type="checkbox"  name="d[]" value="Yes" > <label style="margin-right:30px;">Yes</label>
  <input type="checkbox"  name="d[]" value="No"> <label style="margin-right:30px;">No</label>

</div>
<div class="col-lg-12 col-md-12" style="margin-top:40px;">
<p><b>5. Notes</b></p>
<textarea name="e" class="form-control" ></textarea>
</div>




<div class="col-lg-12 col-md-12">
<button type="submit" name="sub" value="Submit" class="btn btn-success" style="margin:15px;">Submit</button>
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







