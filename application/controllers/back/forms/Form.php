<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    private $path, $pageUrl;
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('id'))) {
            redirect('admin/login');
        }
        $this->path     = 'back/pages/forms/';
        $this->pageUrl  = 'admin/form/';
        $this->load->model('back/forms/Form_Model');
    }

    public function index($content = 'form-dashboard') {
        if($content != 'form-dashboard') {
            $getContent             = $this->content($content);
            $content                = $getContent['page'];

            $data['theme_style']    = $getContent['theme_style'];
            $data['theme_script']   = $getContent['theme_script'];
            $data['script']         = $getContent['script'];
            $data['pageUrl']        = $getContent['pageUrl'];
        }else if($content == 'form-dashboard') {
            $content              = 'dashboard/form-dashboard';
            $data['theme_style']  = $this->path.'dashboard/css/dashboard/theme_style';
            $data['theme_script'] = $this->path.'dashboard/js/dashboard/theme_script';
            $data['script']       = $this->path.'dashboard/js/dashboard/script';
            $data['pageUrl']      = $this->pageUrl;
        }

        $this->load->view('back/templates/header', $data);
        $this->load->view($this->path.$content); // ini adalah content yg bisa diganti
        $this->load->view('back/templates/footer');
    }

    // function fleksibel untuk mengubah content
    private function content($content) {
        if($content == 'create-mahasiswa') {
            $getContent['page']         = 'master/form';
            $getContent['theme_style']  = $this->path.'master/css/form/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/form/theme_script';
            $getContent['script']       = $this->path.'master/js/form/script';
            $getContent['pageUrl']      = $this->pageUrl.'master/list';
            return $getContent;
        }else if($content == 'read-mahasiswa') {
            $getContent['page']         = 'master/list-card';
            $getContent['theme_style']  = $this->path.'master/css/list/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/list/theme_script';
            $getContent['script']       = $this->path.'master/js/list/script';
            $getContent['pageUrl']      = $this->pageUrl.'master/list';
            return $getContent;
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

}