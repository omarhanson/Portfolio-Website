<?php
//get data from form  
$name = $_POST['name'];
$number = $_POST['number'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "omarhanson0@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Number = " . $number ."\r\n Message =" . $message;
$headers = "From: noreply@omarportfolio.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
