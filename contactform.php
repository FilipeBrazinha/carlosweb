<?php

if(isset($_POST["submit"])){
  $name= $_POST["name"];
  $email= $_POST["email"];
  $subject= $_POST["subject"];
  $message= $_POST["message"];

$mailheader = "From:".$name. "<".$email.">\r\n";

$recipient = "filipebrazinha@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("error");

echo"message send";

?>