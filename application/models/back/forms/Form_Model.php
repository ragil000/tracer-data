<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_Model extends CI_Model {

    public function create($post) {
        $arrayData  = [
            'type'          => $post['type'],
            'title'         => $post['title'],
            'description'   => $post['description'],
            'form'          => $post['form'],
            'created_by'    => getDetailAccountSession('id')
        ];
        $execute    = $this->db->insert('forms', $arrayData);
        $form_id  = $this->db->insert_id();
        if($execute) {
            $results['status']   = true;
            $results['message']  = 'Berhasil menginputkan data.';
            $results['id']       = encodeRMY($form_id, 'rmy');
        }else {
            $results['status']   = false;
            $results['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
        }
        return $results;
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
                    $this->db->where('type =', 'form');
                    $this->db->order_by('created_at', 'DESC');
        $results =   $this->db->get('forms');

        return [
            'total' => $results->num_rows(),
            'data' => $results->result()
        ];
    }

    public function getLinkForm() {
        if(isset($_GET['type'])) {
            if($_GET['type'] == 'master') {
                
            }
        }
    }

}