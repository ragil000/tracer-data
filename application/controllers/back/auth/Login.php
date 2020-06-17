<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('back/auth/Login_Model');
    }

    public function index() {
        
        $this->load->view('back/pages/auth/login');
    }

    public function auth() {
        $result = $this->Login_Model->auth($this->input->post('username'), $this->input->post('password'));
        if($result['status']) {
            $sessionData = [
                'id' => $result['data'][0]['id'],
                'full_name' => $result['data'][0]['id']
            ];
            $this->session->set_userdata($sessionData);
            redirect('admin/');
        }else {
            $flashData = [
                'message' => $result['message'],
                'status' => $result['status']
            ];
            $this->session->set_userdata($flashData);
            $this->session->keep_flashdata(['message', 'status']);
            redirect('admin/login');
        }
    }

    public function logout() {
        session_destroy();
        redirect('admin/login');
    }

}