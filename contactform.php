<?php

if(isset(&_POST["submit"])){
  $name= $_POST["name"];
  $email= $_POST["email"];
  $subject= $_POST["subject"];
  $message= $_POST["message"];

  $mailTo = "filipebrazinha@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $subject, $text, $headers);
  header("Location: index.php?mailsend");
}