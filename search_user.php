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
          
		    <table id="customer_data" class="table table-bordered table-striped">
     <thead>
     <tr>
       <th>User name</th>
       <th>Service choosen</th>
	   <th>Mobile no.</th>
	     <th>Gender</th>
		   <th>Post Code</th>
	   <th>address</th>
       <th>Note</th>
      </tr>
     </thead>
    </table>
		  
		  

</div>
</div>
    </div>
	

<!-- begin:footer -->
<script type="text/javascript" language="javascript" >
 $(document).ready(function(){

  $('#customer_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "ajax" : {
    url:"fetch.php",
    type:"POST"
   },
   dom: 'lBfrtip',
   buttons: [
    'excel', 'csv', 'pdf', 'copy'
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  });
 });
 
</script>
       <?php include "ind/footer.php"; 
?>
<!-- end:footer -->







