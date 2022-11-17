<?php
//get data from form  
$name = $_POST["name"];
$number = $_POST["number"];
$email= $_POST["email"];
$message= $_POST["message"];
$to = "omarhanson0@gmail.com";
$subject = "Mail From Omar Portfolio Website";
$txt ="name = ". $name . "\r\n  email = " . $email . "\r\n  number = " . $number ."\r\n message =" . $message;
$headers = "From: noreply@omarportfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
