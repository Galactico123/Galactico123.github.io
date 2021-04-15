<?php
function sendemail($to,$name,$schoolname,$grade,$email,$detail,$subject,$guardiancontact,$checklist){
	date_default_timezone_set('Etc/UTC');
	$googleemail = "fiverrdeveloper0@gmail.com";
	$googlepassword = "Password.developer";
	// Edit this path if PHPMailer is in a different location.
	require 'PHPMailer/PHPMailerAutoload.php';
	require 'PHPMailer/class.phpmailer.php';
	

	$mail = new PHPMailer;
	$mail->isSMTP();

	/*
	 * Server Configuration
	 */

	$mail->Host = 'smtp.gmail.com'; // Which SMTP server to use.
	$mail->Port = 587; // Which port to use, 587 is the default port for TLS security.
	$mail->SMTPSecure = 'tls'; // Which security method to use. TLS is most secure.
	$mail->SMTPAuth = true; // Whether you need to login. This is almost always required.
	$mail->Username = "$googleemail"; // Your Gmail address.
	$mail->Password = "$googlepassword"; // Your Gmail login password or App Specific Password.

	/*
	 * Message Configuration
	 */

	$mail->setFrom("$googleemail", 'You have New Form Submission'); // Set the sender of the message.
	$mail->addAddress("$to","$name"); // Set the recipient of the message.
	$mail->Subject = 'You have New Form Submission'; // The subject of the message.
	
	$message = "";
	$time = "";
	
	$message .= '<p>Name: '. $name . '<br>School Name: ' .  $schoolname . '<br>Grade: ' . $grade . '<br>Email: ' . $email . '<br>Detail: ' . $detail . '<br>Subject: ' . $subject . '<br>Guardian information: ' . $guardiancontact .'<br>Available Time: </p>';
	
	foreach($checklist as $val => $keys){
		$time .= '<p>'. $val . ') <b>' .  $keys . '</b>' . '</p>';
	}
	
	$mail->Body = '<!DOCTYPE HTML>
		<html lang="en-US">
		<head>
			<meta charset="UTF-8">
			<style type="text/css">
				.mail_body p{
					font-family: "SourceSansPro-Regular", "Source Sans Pro";
					font-weight: 400;
					font-size:14pt;
				}
				.whyimg{
					width:100px;
					height:100px;
					float:right;
				}
				.whyText{
					height:100px;
					margin:25px;
				}
			</style>
		</head>
		<body>
			<div class="container" >
				<div class="mail_body">
		<!-- Body Start -->
		<div class="container">
			<p>Hello!</p>
			<p>You have New Booking on your Student Form</p>
			<br />
			' . $message . $time . '
			<br />
		</div>
	</body>
	</html>';
	$mail->IsHTML(true);
	if ($mail->send()) {
		return true;
	} else {
		echo $mail->ErrorInfo;
		return false;
	}	
}
?>