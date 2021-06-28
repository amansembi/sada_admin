<!-- Link-->
<?php include "ind/head.php";
if(isset($_REQUEST['id'])){
echo '<script language="javascript" type="text/javascript">alert("Are You Sure Wanna Remove it!");</script>';
$del = 'DELETE FROM `music` WHERE id="'.$_REQUEST['id'].'"';
mysqli_query($con,$del);
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
            <h6 class="card-title">Expensess Report</h6>
            </div>		
<div class="row">
<div class="col-lg-12 col-md-12">
<table class="table table-striped jambo_table bulk_action">
<tr class="headings">
<th>MUSIC ID</th>
<th>MUSIC LIST NAME</th>
<th>SONG NAME</th>
<th><i class="fa fa-trash" aria-hidden="true"></i></th>
</tr>



<?php
$sql=mysqli_query($con,"select * from `MUSIC`");
if($sql)
{
while($row=mysqli_fetch_assoc($sql))
{

echo '<tr>
<td>'.$row['id'].'</td>
<td>'.$row['play_list'].'</td>
<td>'.$row['music'].'</td>
<td><a href='."music_report.php?id=".$row['id'].'><i class="fa fa-minus" id="remove" ></i></a></td></tr>';
}
}
?>
</table> 
</div>
</div>
</div>
    </div>
	

<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







