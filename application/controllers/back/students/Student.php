<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    private $path, $page_url;
    public function __construct() {
        parent::__construct();
        if(empty($this->session->userdata('id'))) {
            redirect('admin/login');
        }
        $this->path     = 'back/pages/students/';
        $this->page_url  = 'admin/student/';
        $this->load->model('back/students/Student_Model');
    }

    public function index($content = 'dashboard') {
        if($content != 'dashboard') {
            $getContent             = $this->content($content);
            $content                = $getContent['page'];

            $data['theme_style']    = $getContent['theme_style'];
            $data['theme_script']   = $getContent['theme_script'];
            $data['script']         = $getContent['script'];
            $data['page_url']       = $getContent['page_url'];
        }

        $this->load->view('back/templates/header', $data);
        $this->load->view($this->path.$content); // ini adalah content yg bisa diganti
        $this->load->view('back/templates/footer');
    }

    // function fleksibel untuk mengubah content
    private function content($content) {
        if($content == 'tambah-mahasiswa') {
            $getContent['page']         = 'master/form';
            $getContent['theme_style']  = $this->path.'master/css/form/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/form/theme_script';
            $getContent['script']       = $this->path.'master/js/form/script';
            $getContent['page_url']     = $this->page_url.'tambah-mahasiswa';
            return $getContent;
        }else if($content == 'daftar-mahasiswa') {
            $getContent['page']         = 'master/list-card';
            $getContent['theme_style']  = $this->path.'master/css/list/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/list/theme_script';
            $getContent['script']       = $this->path.'master/js/list/script';
            $getContent['page_url']     = $this->page_url.'daftar-mahasiswa';
            return $getContent;
        }else if($content == 'profil-mahasiswa') {
            $getContent['page']         = 'master/profile';
            $getContent['theme_style']  = $this->path.'master/css/profile/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/profile/theme_script';
            $getContent['script']       = $this->path.'master/js/profile/script';
            $getContent['page_url']     = $this->page_url.'read-mahasiswa';
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