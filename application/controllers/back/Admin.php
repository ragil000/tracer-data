<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    private $path, $page_url;
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('id'))) {
            redirect('admin/login');
        }
        $this->path     = 'back/pages/dashboard/';
        $this->page_url  = 'admin/';
    }

    public function index() {
        $data['theme_style']    = $this->path.'css/theme_style';
        $data['theme_script']   = $this->path.'js/theme_script';
        $data['script']         = $this->path.'js/script';
        $data['page_url']       = $this->page_url;
        $this->load->view('back/templates/header', $data);
        $this->load->view($this->path.'dashboard'); // ini adalah content yg bisa diganti
        $this->load->view('back/templates/footer');  
    }

}