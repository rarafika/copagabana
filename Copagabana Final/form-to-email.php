<?php

  $name = $_POST['name'];
  $visitor_mail = $_POST['email'];
  $message = $_POST['message'];
  
  $email_subject = "New Form submission";

  $email_body = "You have received a new message from the user $name\n".
  "Here is the message:\n $message \n"."From $Visitor_mail". 
  $to = "ramadhan4ah@gmail.com";

  mail($to,$email_subject,$email_body);
  ?>
  
  <a href="index.html">Thank you for contacting us. We will be in touch with you very soon.</a>
