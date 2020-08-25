<?php

$to= "mdedeu@itba.edu.ar";
$Subject="Email from Web";

$name= $_POST['first-name'];
$name2= $_POST['last-name'];
$email= $_POST['email'];
$message = $_POST['message'];
$phone= $_POST['phone'];

$headers.= "Content-type: text/html;\r\n";
$headers.="From: $email";
mail($to, $Subject, $message."\n Mi nombre es:".$name." ".$name2."\nTel:".$phone."\n", $headers);
header("Location: index-es.html?mailsent");
?>