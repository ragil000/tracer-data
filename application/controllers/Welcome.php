<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
		// $mail = new PHPMailer();
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
		// $mail->isSMTP();                                            // Send using SMTP
		// $mail->Host       = 'smtp.mailtrap.io'; //'smtp.gmail.com';                    // Set the SMTP server to send through
		// $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		// $mail->Username   = '625c17553c68bd'; //'ragilmanggalaning42@gmail.com';                    // SMTP username
		// $mail->Password   = '1d0880ced0c167'; //'ragilsyar\'i';                               // SMTP password
		// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		// $mail->Port       = 2525; //587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
	
		//Recipients
		// $mail->setFrom('from@example.com', 'Mailer');
		// $mail->addAddress('1ce0223c8e-dc2194@inbox.mailtrap.io', 'RMY');     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		// Content
		// $mail->isHTML(true);                                  // Set email format to HTML
		// $mail->Subject 	= 'Here is the subject';
		// $mail->Body    	= 'This is the HTML message body <b>in bold!</b>';
		// $mail->AltBody 	= 'This is the body in plain text for non-HTML mail clients';
	
		// $check			= $mail->send();
		// if($check) {
		// 	$result['status']   = TRUE;
        //     $result['message']  = 'Email berhasil dikirim.';
		// }else {
		// 	$result['status']   = FALSE;
        //     $result['message']  = 'Email gagal dikirim.';
		// }
		// echo 'Message has been sent';
		redirect('dashboard');
	}

	public function importExcel() {
		$this->load->library('Excel');
		$config['upload_path'] = './uploads/files/';
        $config['allowed_types'] = '*';
        $config['file_name'] = $_FILES['file_excel']['name'];
 
		$this->load->library('upload', $config);
		$this->upload->do_upload('file_excel');

		$inputFileName = './uploads/files/'.$config['file_name'];
		try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
		} catch(Exception $e) {
			die('Error loading file "'.pathinfo($inputFileName, PATHINFO_BASENAME).'": '.$e->getMessage());
		}

		$sheet = $objPHPExcel->getSheet(0); 
		$highestRow = $sheet->getHighestRow(); 
		$highestColumn = $sheet->getHighestColumn();
        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

		//  Loop through each row of the worksheet in turn
		for ($row = 2; $row <= $highestRow; $row++){
			if(!$allDataInSheet[$row]['A'] && !$allDataInSheet[$row]['B'] && !$allDataInSheet[$row]['C']) {
				break;
			}
			$data = [
				'name' => $allDataInSheet[$row]['A'],
				'lat' => $allDataInSheet[$row]['B'],
				'long' => $allDataInSheet[$row]['C']
			];
			$this->db->insert('cities', $data);
		}
	}
}
