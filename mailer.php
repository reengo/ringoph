<?php

 $to = "me@ringo.ph";
 $subject = "Inquiry from " . $_POST['name'];
 $body = $_POST['message'] . "<br><br> " . "From: " . $_POST['email'];

 if (mail($to, $subject, $body)) {
   echo("<p>Email successfully sent!</p>");
  } else {
   echo("<p>Email delivery failed…</p>");
  }

 ?>