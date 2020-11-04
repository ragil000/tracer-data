<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    private $path, $page_url;
    public function __construct() {
        parent::__construct();
        if(empty(getDetailAccountSession())) {
            redirect('login');
        }
        $this->path     = 'back/pages/students/';
        $this->page_url  = 'back/student/';
        $this->load->model('back/students/Student_Model');
    }

    public function index($content = 'daftar-mahasiswa') {
        $display    = $this->input->get('display');
        if($display) {
            setOldPage($this->page_url.$content.'?display='.$display);
        }else {
            setOldPage($this->page_url.$content);
        }
        $data['data_account']   = getDetailAccountSession();

        $getContent             = $this->content($content, $display);
        $content                = $getContent['page'];
        if(!empty($getContent['datas'])) {
            foreach($getContent['datas'] as $key => $value) {
                $data[$key] = $value;
            }
        }
        $data['theme_style']    = $getContent['theme_style'];
        $data['theme_script']   = $getContent['theme_script'];
        $data['script']         = $getContent['script'];
        $data['page_url']       = $getContent['page_url'];
        $data['base_path_url']  = $this->page_url;

        $this->load->view('back/templates/header', $data);
        $this->load->view($this->path.$content); // ini adalah content yg bisa diganti
        $this->load->view('back/templates/footer');
    }

    // function fleksibel untuk mengubah content
    private function content($content, $display = null) {
        if($content == 'tambah-mahasiswa') {
            if(!empty($this->input->get('user_id'))) {
                $getContent['datas']        = [
                    'major_opt' => $this->Student_Model->getMajorOpt(),
                    'edit_detail' => $this->Student_Model->editDetail()
                ];
            }else {
                $getContent['datas']        = [
                    'major_opt' => $this->Student_Model->getMajorOpt()
                ];
            }
            $getContent['page']         = 'master/form';
            $getContent['theme_style']  = $this->path.'master/css/form/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/form/theme_script';
            $getContent['script']       = $this->path.'master/js/form/script';
            $getContent['page_url']     = $this->page_url.'tambah-mahasiswa';
            return $getContent;
        }else if($content == 'daftar-mahasiswa') {
            if($display == 'table') {
                $getContent['page']         = 'master/list';
            }else {
                $getContent['page']         = 'master/list-card';
            }
            $getContent['datas']        = [
                'major_opt' => $this->Student_Model->getMajorOpt(),
                'status_opt' => $this->Student_Model->getStatusOpt(),
                'date_of_entry_opt' => $this->Student_Model->getDateOfEntryOpt(),
                'date_of_graduate_opt' => $this->Student_Model->getDateOfGraduateOpt()
            ];
            $getContent['theme_style']  = $this->path.'master/css/list/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/list/theme_script';
            $getContent['script']       = $this->path.'master/js/list/script';
            $getContent['page_url']     = $this->page_url.'daftar-mahasiswa';
            return $getContent;
        }else if($content == 'profil-mahasiswa') {
            $data                       = $this->Student_Model->readDetail();
            $getContent['datas']        = [
                'profile' => $data['data']['profile'],
                'education' => $data['data']['education'],
                'parent' => $data['data']['parent'],
                'archievement' => $data['data']['archievement'],
                'job' => $data['data']['job'],
                'teacher' => $data['data']['teacher'],
                'city' => $data['data']['city']
            ];
            $getContent['page']         = 'master/profile';
            $getContent['theme_style']  = $this->path.'master/css/profile/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/profile/theme_script';
            $getContent['script']       = $this->path.'master/js/profile/script';
            $getContent['page_url']     = $this->page_url.'read-mahasiswa';
            return $getContent;
        }else if($content == 'ubah-status-mahasiswa') {
            if(!empty($this->input->get('user_id'))) {
                $getContent['datas']        = [
                    'major_opt' => $this->Student_Model->getMajorOpt(),
                    'edit_detail' => $this->Student_Model->editDetail()
                ];
            }else {
                $getContent['datas']        = [
                    'major_opt' => $this->Student_Model->getMajorOpt()
                ];
            }
            $getContent['page']         = 'master/form-status';
            $getContent['theme_style']  = $this->path.'master/css/form-status/theme_style';
            $getContent['theme_script'] = $this->path.'master/js/form-status/theme_script';
            $getContent['script']       = $this->path.'master/js/form-status/script';
            $getContent['page_url']     = $this->page_url.'tambah-mahasiswa';
            return $getContent;
        }
    }

    public function create() {
        $post = $this->input->post();
        $result = $this->Student_Model->create($post);
        echo json_encode($result);
    }

    public function update() {
        $post = $this->input->post();
        $result = $this->Student_Model->update($post);
        echo json_encode($result);
    }

    public function updateProfile() {
        $post = $this->input->post();
        $result = $this->Student_Model->updateProfile($post);
        echo json_encode($result);
    }

    public function updateParent() {
        $post = $this->input->post();
        $result = $this->Student_Model->updateParent($post);
        echo json_encode($result);
    }

    public function updateStudy() {
        $post = $this->input->post();
        $result = $this->Student_Model->updateStudy($post);
        echo json_encode($result);
    }

    public function updateArchievement() {
        $post = $this->input->post();
        $result = $this->Student_Model->updateArchievement($post);
        echo json_encode($result);
    }

    public function updateJob() {
        $post = $this->input->post();
        $result = $this->Student_Model->updateJob($post);
        echo json_encode($result);
    }

    public function read($page = 1) {
        $page = $page*15;
        $result = $this->Student_Model->read(15, $page);
        echo json_encode($result);
    }

}