<?php 

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $eaddress = $_POST['eaddress'];
  $sncg = $_POST['sncg'];
  $gpa = $_POST['gpa'];
  $tc = $_POST['tc'];
  $legal = $_POST['legal'];
  $message = $_POST['message'];
  $it = $_POST['it'];
 
  

  $email_from = 'admin@gmail.com';

  $email_subject = "New From Submission";

  $email_body = "First Name: $fname.\n".
          "Last Name: $lname.\n".
          "Email : $eaddress.\n".
          "School and Current Grade : $sncg.\n".
          "What is your average GPA for the past school year? : $gpa.\n".
          "What are the subjects that you are interested in tutoring/coaching? : $tc.\n".
          "Please provide your legal guardian's contact information : $legal.\n".
          "Please write 2-5 sentences about yourself : $it.\n".
          "please provide the full name of the individual/teacher.: $message.\n";

  $to = "rocketaccomplish@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers = "Reply-To: $email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: volunteer-with-us.php");
  

?>