<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$to="akshattripathi215@gmail.com";
$subject="form response";
$txt="Name = ".$name . "\r\n Email = ".$email. "\r\n Message=".$message ."\r\n Mobile number=".$number;
$headers="From:noreply@nosir.com"."\r\n" .
"CC:tripatakshat09@gmail.com";
if($email!=Null){
    mail($to,$subject,$txt,$headers);
}
header("Location:ad.html");
?>

