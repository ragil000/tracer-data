<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    private $path, $page_url;
    public function __construct() {
        parent::__construct();
        $this->path     = 'midle/pages/forms/';
        $this->page_url  = 'form/';
    }

    public function index() {
        $data['theme_style']    = $this->path.'css/theme_style';
        $data['theme_script']   = $this->path.'js/theme_script';
        $data['script']         = $this->path.'js/script';
        $data['page_url']       = $this->page_url;
        $this->load->view('midle/templates/header', $data);
        $this->load->view($this->path.'form'); // ini adalah content yg bisa diganti
        $this->load->view('midle/templates/footer');  
    }

}