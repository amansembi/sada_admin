<!-- Link-->
<?php include "ind/music_head.php";
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
<div class="row">
<div class="col-lg-12 col-md-12">


 <div class="example">

        <div class="player">
            <div class="pl"></div>
            <div class="title"></div>
            <div class="controls">
                <div class="play"></div>
                <div class="pause"></div>
                <div class="rew"></div>
                <div class="fwd"></div>
            </div>
            <div class="volume"></div>
            <div class="tracker"></div>
        </div>
        <ul class="playlist hidden">
		<?php
$sql=mysqli_query($con,"select * from `music`  ORDER BY `id` DESC LIMIT 1000 ");
if($sql)
{
while($row=mysqli_fetch_assoc($sql))
{
echo '
<li audiourl="'.$row['music'].'">'.$row['music'].'</li>';
}
}
?>
 </ul>

    </div>
</div>


</div>
</div>
    </div>
	

<!-- begin:footer -->
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







