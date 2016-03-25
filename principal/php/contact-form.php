<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

require 'php-mailer/class.phpmailer.php';

// Your email address
$to = 'marcos.valle01@gmail.com';

$subject = $_POST['subject'];

if($to) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$guests = $_POST['guests'];
	$attending = $_POST['attending'];

	$fields = array(
		0 => array(
			'text' => 'Name',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Email',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'guests',
			'val' => $_POST['guests']
		),
		3 => array(
			'text' => 'attending',
			'val' => $_POST['attending']
		),
		4 => array(
			'text' => 'message',
			'val' => $_POST['message']
		)
	);
	
	$message = "";
	
	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}
	
	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	
	// Optional Settings
	$mail->Host = 'smtp.gmail.com';						  // Specify main and backup server
	$mail->SMTPAuth = 'true';                             // Enable SMTP authentication
	$mail->Username = 'YOUR_GMAIL';             		  // SMTP username
	$mail->Password = 'YOUR_PASS';
	$mail->Port       = 465;  
	$mail->SMTPSecure = 'ssl';                          // Enable encryption, 'ssl' also accepted

	$mail->From = $email;
	$mail->FromName = $_POST['name'];
	$mail->AddAddress($to);								  // Add a recipient
	$mail->AddReplyTo($email, $name);

	$mail->IsHTML(true);                                  // Set email format to HTML
	
	$mail->CharSet = 'UTF-8';

	$mail->Subject = 'RSVP';
	$mail->Body    = $message;

	if(!$mail->Send()) {
	   $arrResult = array ('response'=>'error');
	}

	$arrResult = array ('response'=>'success');

	echo json_encode($arrResult);
	
} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);

}
?>
