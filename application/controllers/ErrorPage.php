<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ErrorPage extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function page404() {
        $data['old_page']   = getOldPage();
        $this->load->view('errors/error_404', $data);
    }
}