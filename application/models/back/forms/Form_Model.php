<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Model extends CI_Model {

    public function create($post) {
        $arrayData  = [
            'full_name'     => $post['full_name'],
            'email'         => $post['email'],
            'nim'           => $post['nim'],
            'date_of_entry' => $post['date_of_entry'],
            'date_of_birth' => $post['date_of_birth'],
            'created_by'    => '1'
        ];
        $execute    = $this->db->insert('students', $arrayData);
        $studentId  = $this->db->insert_id();
        if($execute) {
            $arrayData  = [
                'student_id'    => $studentId,
                'username'      => $post['username'],
                'password'      => md5($post['password']),
                'status'        => 'verify',
                'created_by'    => '1'
            ];
            $execute    = $this->db->insert('users', $arrayData);
            if($execute) {
                $result['status']   = true;
                $result['message']  = 'Berhasil menginputkan data.';
            }else {
                $this->db->delete('students', ['id' => $studentId]);
                $result['status']   = false;
                $result['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
            }
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function read($limit = 10, $start = 0) {
        $this->db->limit($limit, $start);
        $this->db->order_by('date_of_entry ASC, id DESC');
        $get = $this->db->get('students');
        if($get->num_rows() > 0){
            $result['status']   = true;
            $result['data']     = $get->result_array();
        }else if($get->num_rows() <= null) {
            $result['status']   = false;
            $result['data']     = null;
        }
        return $result;
    }

    public function getMasterForm() {
        $result =   $this->db->get_where('forms', ['type' => 'master'])->row();
        return $result;
    }

    public function getHistoryForm() {
                    $this->db->where('type !=', 'master');
                    $this->db->order_by('created_at', 'DESC');
        $result =   $this->db->get('forms');
        return [
            'total' => $result->num_rows(),
            'data' => $result->result()
        ];
    }

    public function getLinkForm() {
        if(isset($_GET['type'])) {
            if($_GET['type'] == 'master') {
                
            }
        }
    }

}