<?php
$host="localhost";
$db_username="u246939243_text";
$db_password="jCH@23enO*0";
$db_name="u246939243_text";
$con=mysqli_connect($host,$db_username,$db_password);
$sel=mysqli_select_db($con,$db_name);
date_default_timezone_set('Asia/kolkata');
session_start();
?>