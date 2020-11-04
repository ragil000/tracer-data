<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    public function auth($username, $password) {
                  $this->db->where('nim', strtolower($username));
                  $this->db->or_where('email', strtolower($username));
                  $this->db->or_where('username', strtolower($username));
        $get    = $this->db->get('users');
        $count  = $get->num_rows();
        $data   = $get->row();

        if($count > 0) {
            if(password_verify($password, $data->password)) {
                if($data->status != 'active') {
                    $result['status'] = false;
                    if($data->status == 'verify') {
                        $result['message'] = 'Akun anda belum diverifikasi';
                    }else if($data->status == 'nonactive') {
                        $result['message'] = 'Akun anda dinonaktifkan';
                    }
                }else if($data->status == 'active') {
                    $result['status'] = true;
                    $result['data'] = $data;
                }
            }else {
                $result['status'] = false;
                $result['message'] = 'Password salah';
            }
        }else {
            $result['status'] = false;
            $result['message'] = 'Username salah';
        }
        return $result;
    }

    public function register($data) {
        $check_nim = $this->db->get_where('users', ['nim' => strtolower($data['nim'])]);
        if($check_nim->num_rows() > 0) {
            $result['status'] = false;
            $result['message'] = 'NIM sudah terdaftar';
        }else {
            $check_username = $this->db->get_where('users', ['username' => strtolower($data['username'])]);
            if($check_username->num_rows() > 0) {
                $result['status'] = false;
                $result['message'] = 'Username sudah terdaftar';
            }else {
                $check_email = $this->db->get_where('users', ['email' => strtolower($data['email'])]);
                if($check_email->num_rows() > 0) {
                    $result['status'] = false;
                    $result['message'] = 'Email sudah terdaftar';
                }else {
                    $insert = $this->db->insert('users', $data);
                    if($insert) {
                        $result['status'] = true;
                        $result['message'] = 'Akun berhasil ditambahkan';
                    }else {
                        $result['status'] = false;
                        $result['message'] = 'Akun gagal ditambahkan';
                    }
                }
            }
        }
        return $result;
    }

}