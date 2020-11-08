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

        $get_content             = $this->content($content, $display);
        $content                = $get_content['page'];
        if(!empty($get_content['datas'])) {
            foreach($get_content['datas'] as $key => $value) {
                $data[$key] = $value;
            }
        }
        $data['theme_style']    = $get_content['theme_style'];
        $data['theme_script']   = $get_content['theme_script'];
        $data['script']         = $get_content['script'];
        $data['page_url']       = $get_content['page_url'];
        $data['base_path_url']  = $this->page_url;

        $this->load->view('back/templates/header', $data);
        $this->load->view($this->path.$content); // ini adalah content yg bisa diganti
        $this->load->view('back/templates/footer');
    }

    // function fleksibel untuk mengubah content
    private function content($content, $display = null) {
        if($content == 'tambah-mahasiswa') {
            if(!empty($this->input->get('user_id'))) {
                $get_content['datas']        = [
                    'major_opt' => $this->Student_Model->getMajorOpt(),
                    'edit_detail' => $this->Student_Model->editDetail()
                ];
            }else {
                $get_content['datas']        = [
                    'major_opt' => $this->Student_Model->getMajorOpt()
                ];
            }
            $get_content['page']         = 'master/form';
            $get_content['theme_style']  = $this->path.'master/css/form/theme_style';
            $get_content['theme_script'] = $this->path.'master/js/form/theme_script';
            $get_content['script']       = $this->path.'master/js/form/script';
            $get_content['page_url']     = $this->page_url.'tambah-mahasiswa';
            return $get_content;
        }else if($content == 'daftar-mahasiswa') {
            if($display == 'table') {
                $get_content['page']         = 'master/list';
            }else {
                $get_content['page']         = 'master/list-card';
            }
            $get_content['datas']        = [
                'major_opt' => $this->Student_Model->getMajorOpt(),
                'status_opt' => $this->Student_Model->getStatusOpt(),
                'date_of_entry_opt' => $this->Student_Model->getDateOfEntryOpt(),
                'date_of_graduate_opt' => $this->Student_Model->getDateOfGraduateOpt()
            ];
            $get_content['theme_style']  = $this->path.'master/css/list/theme_style';
            $get_content['theme_script'] = $this->path.'master/js/list/theme_script';
            $get_content['script']       = $this->path.'master/js/list/script';
            $get_content['page_url']     = $this->page_url.'daftar-mahasiswa';
            return $get_content;
        }else if($content == 'profil-mahasiswa') {
            $data                       = $this->Student_Model->readDetail();
            $get_content['datas']        = [
                'profile' => $data['data']['profile'],
                'education' => $data['data']['education'],
                'parent' => $data['data']['parent'],
                'archievement' => $data['data']['archievement'],
                'job' => $data['data']['job'],
                'teacher' => $data['data']['teacher'],
                'city' => $data['data']['city']
            ];
            $get_content['page']         = 'master/profile';
            $get_content['theme_style']  = $this->path.'master/css/profile/theme_style';
            $get_content['theme_script'] = $this->path.'master/js/profile/theme_script';
            $get_content['script']       = $this->path.'master/js/profile/script';
            $get_content['page_url']     = $this->page_url.'read-mahasiswa';
            return $get_content;
        }else if($content == 'ubah-status-mahasiswa') {
            $get_content['datas']        = [
                'student_opt' => $this->Student_Model->getStudentOpt(false)
            ];
            $get_content['page']         = 'master/form-status';
            $get_content['theme_style']  = $this->path.'master/css/form-status/theme_style';
            $get_content['theme_script'] = $this->path.'master/js/form-status/theme_script';
            $get_content['script']       = $this->path.'master/js/form-status/script';
            $get_content['page_url']     = $this->page_url.'tambah-mahasiswa';
            return $get_content;
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

    public function updateStatus() {
        $post = $this->input->post();
        $result = $this->Student_Model->updateStatus($post);
        echo json_encode($result);
    }

    public function read($page = 1) {
        $page = $page*15;
        $result = $this->Student_Model->read(15, $page);
        echo json_encode($result);
    }

}