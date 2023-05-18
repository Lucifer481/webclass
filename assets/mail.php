<?php
  $to_email = "bhadelsushant3@gmial.com";
  $subject = "New message from website contact form";
  $headers = "From: ".$_POST['email'];
  $message = "Name: ".$_POST['name']."\n\nEmail: ".$_POST['email']."\n\nMessage: ".$_POST['message'];

 
  if (isset($_POST['submit'])) {
    if (mail($to_email, $subject, $message, $headers)) {
      echo "Thank you for your message!";
    } else {
      echo "Failed to send message. Please try again later.";
    }
  }

?>


