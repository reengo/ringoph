<?php

 $to = "me@ringo.ph";
 $headers = "From: me@ringo.ph" . "\r\n" . "CC: bautistarin@gmail.com";
 $subject = "Inquiry from " . $_POST['name'];
 $body = $_POST['message'] . "<br><br> " . "From: " . $_POST['email'];

 if ($_POST) {
   mail($to, $subject, $body);
 }
 
 ?>