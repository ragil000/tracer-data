<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    public function auth($username, $password) {
        $get = $this->db->get_where('users', ['username' => $username, 'password' => md5($password)]);
        $row = $get->num_rows();
        $data = $get->result_array();

        if($row > 0) {
            if($data[0]['status'] != 'active') {
                $result['status'] = false;
                if($data[0]['status'] == 'verify') {
                    $result['message'] = 'Akun anda belum diverifikasi';
                }else if($data[0]['status'] == 'nonactive') {
                    $result['message'] = 'Akun anda dinonaktifkan';
                }
            }else if($data[0]['status'] == 'active') {
                $result['status'] = true;
                $result['data'] = $data;
            }
        }else {
            $result['status'] = false;
            $result['message'] = 'Username atau password salah';
        }
        return $result;
    }

}