<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	public function __construct(){
		require_once APPPATH.'libraries/phpmailer/src/PHPMailer.php';
		require_once APPPATH.'libraries/phpmailer/src/SMTP.php';
		require_once APPPATH.'libraries/phpmailer/src/Exception.php';
	}

	public function index()
	{
		$mail = new PHPMailer();
		//Server settings
		$mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'ragilmanggalaning42@gmail.com';                     // SMTP username
		$mail->Password   = 'ragilsyar\'i';                               // SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	
		//Recipients
		$mail->setFrom('from@example.com', 'Mailer');
		$mail->addAddress('official.rmy.dev@gmail.com', 'RMY');     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		// $mail->send();
		echo 'Message has been sent';
	}
}
