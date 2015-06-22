<?php 

	require 'PHPMailer/class.phpmailer.php'; // path to the PHPMailer class
	require 'PHPMailer/class.smtp.php';
	
	$index_page = "http://trafficima.com/";
	
	if (isset($_POST['submit'])) {
	
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		if(!empty($name) || !empty($email) || !empty($message) ) {
			
			$mail = new PHPMailer();

			$mail->IsSMTP();  // telling the class to use SMTP
			$mail->SMTPDebug = 2;
			$mail->Mailer = "smtp";
			$mail->Host = "smtp.gmail.com";
			$mail->Port = 465;
			$mail->SMTPSecure = 'ssl';
			$mail->SMTPAuth = true; // turn on SMTP authentication
			$mail->Username = "trafficima@gmail.com"; // SMTP username
			$mail->Password = "trafficima1"; // SMTP password 
			$mail->Priority = 3;

			$mail->AddAddress("trafficima@gmail.com","Admin");
			$mail->SetFrom($email,$name);

			$mail->Subject  = "Message from TrafficIMA<$email>";
			$mail->Body     = $message;
			$mail->WordWrap = 50;  
				
			$mail->Send();
			
			header("location: $index_page");
		}		
	}
?>


