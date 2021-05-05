<?php 


//including mailfunction file for sending data to email
  include("mailfunction.php");
  //$data = $_POST;
  //array_shift($data);
  //saving all form data in array
  //array_splice($data,8,8);
  //send email function is define in mailfunction.php file
   
   $name=$_POST['name'];
   $schoolname=$_POST['schoolname'];
   $grade=$_POST['grade'];
   $email=$_POST['email'];
   $detail=$_POST['detail'];
   $subject=$_POST['subject'];
   $guardiancontact=$_POST['guardian-contact'];
   $checklist=$_POST['check_list'];
   array_shift($checklist);
   array_splice($checklist,8,8);
  
   foreach($_POST['check_list'] as $selected){
//echo $selected."</br>";
}

      if(sendemail("rocketacademics101@gmail.com",$name,$schoolname,$grade,$email,$detail,$subject,$guardiancontact,$checklist))
      {
        echo "<h1> Thankyou! Your form Successfully Submitted!</h1><a href='form.php'>Back to form</a>";
      }
      else
      {
        echo "Email not sent";
      }



?>
