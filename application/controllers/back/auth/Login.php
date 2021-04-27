<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('back/auth/Login_Model');
    }

    public function index() {
        setOldPage('login');
        if(getDetailAccountSession()) {
            if(getOldPage() == 'login' || getOldPage() == 'register') {
                redirect('dashboard');
            }else {
                redirect(getOldPage());
            }
        }else {
            $this->load->view('back/pages/auth/login');
        }
    }

    public function auth() {
        $result = $this->Login_Model->auth($this->input->post('username'), $this->input->post('password'));
        if($result['status']) {
            $session_data = [
                'id' => $result['data']->id,
                'username' => $result['data']->username,
                'email' => $result['data']->email
            ];
            $this->session->set_userdata(['penyihir' => encodeRMY(json_encode($session_data), 'rmy')]);
            if($result['data']->role == STUDENT) {
                redirect('dashboard/');
            }else if($result['data']->role == SUPER_ADMIN) {
                redirect('dashboard/');
            }
        }else {
            $this->session->set_userdata(['message' => alertRMY($result['message'], $result['status'])]);
            $this->session->keep_flashdata('message');
            redirect('login');
        }
    }

    public function register() {
        $this->load->view('back/pages/auth/register');
    }

    public function create() {
        $data = [
            'username' => $this->input->post('username'),
            'nim' => $this->input->post('nim'),
            'email' => $this->input->post('email'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'role' => $this->input->post('role') ? $this->input->post('role') : 'student',
            'status' => $this->input->post('status') ? $this->input->post('status') : 'verify'
        ];

        $result = $this->Login_Model->register($data);
        $this->session->set_userdata(['message' => alertRMY($result['message'], $result['status'])]);
        $this->session->keep_flashdata('message');
        redirect('register');
    }

    public function logout() {
        session_destroy();
        redirect('login');
    }

}