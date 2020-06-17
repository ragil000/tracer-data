<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Email extends CI_Controller {

    private $path, $page_url;
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('id'))) {
            redirect('admin/login');
        }
        $this->path     = 'back/pages/emails/';
        $this->page_url  = 'admin/email/';
        $this->load->model('back/emails/Email_Model');
    }

    public function index($content = 'dashboard') {
        if($content != 'dashboard') {
            $get_content            = $this->content($content);
            $content                = $get_content['page'];

            $data['theme_style']    = $get_content['theme_style'];
            $data['theme_script']   = $get_content['theme_script'];
            $data['script']         = $get_content['script'];
            $data['page_url']       = $get_content['page_url'];
        }

        $this->load->view('back/templates/header', $data);
        $this->load->view($this->path.$content); // ini adalah content yg bisa diganti
        $this->load->view('back/templates/footer');
    }

    // function fleksibel untuk mengubah content
    private function content($content) {
        if($content == 'kirim-email') {
            $get_content['page']         = 'form';
            $get_content['theme_style']  = $this->path.'css/form/theme_style';
            $get_content['theme_script'] = $this->path.'js/form/theme_script';
            $get_content['script']       = $this->path.'js/form/script';
            $get_content['page_url']     = $this->page_url.$content;
            return $get_content;
        }
    }

    public function create() {
        $post = $this->input->post();
        $result = $this->Student_Model->create($post);
        echo json_encode($result);
    }

    public function read($page = 1) {
        $page = $page*15;
        $result = $this->Student_Model->read(15, $page);
        echo json_encode($result);
    }

    public function send() {
        $email  = $this->input->post('email');

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
		$mail->setFrom('ragilmanggalaning42@gmail.com', 'Pharmacy Tracer Data');
		$mail->addAddress($email, $email);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');
	
		// Attachments
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Kuesioner Tracer Alumni';
		$mail->Body    = 'Mohon kepada saudara untuk mengisi kuesioner pada link berikut <a href="http://localhost/tracer-data/midle/form/">klik disini</a>';
		$mail->AltBody = 'Sistem masih mode alpha (tahap percobaan).';
	
		if($mail->send()) {
			$result['status']   = TRUE;
            $result['message']  = 'Email berhasil dikirim.';
		}else {
			$result['status']   = FALSE;
            $result['message']  = 'Email gagal dikirim.';
        }
        echo json_encode($result);
    }

}