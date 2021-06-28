<!-- Link-->
<?php include "ind/head.php"; 
if(isset($_POST['send'])){
$text = $_POST['text'];
if(!isset($_POST['st_id']))
{
echo "<script>alert('no Shop selected');
window.location.assign('massenger.php');
</script>";
}
else if($text == "")
{
echo "<script>alert('Please enter text');
window.location.assign('massenger.php');
</script>";
}
else
{	
$st_name = $_POST['st_id'];
$phn="";
$y=count($st_name);
for($x=0;$x<$y;$x++)
{
if(empty($st_name)){
}
else{
$phn=$st_name[$x].",".$phn;
}
}
include "messenger_sms.php";
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
                <h6 class="card-title">Shop Detail</h6>
            </div>
    <div class="row">
<div class="col-lg-6 col-md-6">
<DIV CLASS="FEES MASSAGE2" id="std">
 <?php
$q ="SELECT * FROM `shop`";
$res = mysqli_query($con,$q);
?>
<table id="example1" class="table table-striped table-bordered">
<thead>
<tr>
<th><input class="form-control check mass" type="checkbox" name="vehicle" id="select_all"  style="width:20px;"></th>
<th>Shop Name</th>
<th>Mobile</th>
</tr>
</thead>
<tbody>
<form method="post">
<?php while($row=mysqli_fetch_assoc($res)){?>
<tr>
<td><input class="form-control checkbox" type="checkbox" name="st_id[]" value="<?php echo $row['mobile'];?>"  style="width:20px;"></td>
<td><?php echo $row['shop'];?></td>
<td><?php echo $row['mobile'];?></td>
</tr>
<?php }?>
</tbody>
</table>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="card-title d-flex justify-content-between">
<h6 class="card-title">Type your massege</h6>
</div>
<div class="sms-data">
<textarea name="text" id="message" required="required" class="form-control sms-type mass" rows="8" placeholder="Your Message Here"></textarea>
</div><br>
<button class="btn btn-success"  type="submit"  name="send">SEND</button>
</div>
</form>

</div>
</div>
</div>
</div>
<script type="text/javascript">
$(document).ready(function(){
$("#enq-show").hide();
$('#select_all').on('click',function(){
if(this.checked){
$('.checkbox').each(function(){
this.checked = true;
});
}else{
$('.checkbox').each(function(){
this.checked = false;
});
}
});
$('.checkbox').on('click',function(){
if($('.checkbox:checked').length == $('.checkbox').length){
$('#select_all').prop('checked',true);
}else{
$('#select_all').prop('checked',false);
}
});
$('#go').click(function(){
$('#std').hide();
$("#enq").show();
  var request = $.ajax({
  url: "sel.php",
  type: "GET",          
  dataType: "json"
  });
  request.done(function(data) {
    var html;
    var name;
    var mobile;
       for(var i = 0; i < data.length; i++) {
     html +='<tr><td class="banner1"><form method="post"><input id="chk_val"class="checkbox" type="checkbox" name="en_id[]" value="'+data[i].no+'"></form></td><td class="banner3"><h3 id="name">'+data[i].name+'</h3></td><td class="banner4"><h3 id="mobiles">'+data[i].no+'</h3></td></tr>';
    //name += data[i].name;
    //mobile += data[i].no;
    //console.log('this is the name :'+name+' and mobile number :'+mobile);
    }
     $('#enq-show').append(html);
     $('.banner1').find('#chk_val').val(mobile);
    $('.banner3').find('#name').html(name);
    $('.banner4').find('#mobiles').html(mobile);
  });
  request.fail(function(jqXHR, textStatus) {
     alert( "Request failed: " + textStatus );
  });
});
});
</script>


<!-- begin:footer -->
<?php include "ind/footer.php"; 
?>
<!-- end:footer -->







