<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PHPMailerAutoload {
     public function __construct() {
          require_once APPPATH.'libraries/phpmailer/src/PHPMailer.php';
          require_once APPPATH.'libraries/phpmailer/src/SMTP.php';
          require_once APPPATH.'libraries/phpmailer/src/Exception.php';
     } 
} 