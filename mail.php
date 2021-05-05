<?php 

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $eaddress = $_POST['eaddress'];
  $waycua = $_POST['waycua'];
  $message = $_POST['message'];
 

  $email_from = 'admin@gmail.com';

  $email_subject = "New From Submission";

  $email_body = "First Name: $fname.\n".
          "Last Name: $lname.\n".
          "Email : $eaddress.\n".
          "What are you contacting us about? : $waycua.\n".
          "Message: $message.\n";

  // $to = "rocketaccomplish@gmail.com";
  $to = "jotweb.testing@gmail.com";
die($email_body);
  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  // header("Location: contact.php");
  die('all good');
  

?>