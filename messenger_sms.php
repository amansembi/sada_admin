<?php
include "ind/database.php";
$res = mysqli_query($con,"select auth_key,sender_id,route from sms_settings");
$key="";$sender="";$r="";
while($row=mysqli_fetch_array($res)){
    $key = $row[0];
    $sender = $row[1];
    $r = $row[2];
}
$mobileNumber =$phn;
//Your message to send, Add URL encoding here.
$message = urlencode($text);
//Prepare you post parameters
$postData = array(
'authkey' => $key,
'mobiles' => $mobileNumber,
'message' => $message,
'sender' => $sender,
'route' => $r,
'unicode'=> $unicode=1
);

//API URL
$url="https://login.yourbulksms.com/api/sendhttp.php";
// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POST => true,
CURLOPT_POSTFIELDS => $postData
//,CURLOPT_FOLLOWLOCATION => true
));
//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
//get response
$output = curl_exec($ch);
//Print error if any
if(curl_errno($ch))
{
echo 'error:' . curl_error($ch);
}
curl_close($ch);
 $result = file_get_contents('https://requestb.in/1d4ngzu1');
 if($bday==1)
 {
 header('location:birthday.php');}
 else
 {
header('location:massenger.php');
}
?>