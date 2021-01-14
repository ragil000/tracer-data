<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    private $path, $page_url;
    public function __construct() {
        parent::__construct();
        if(empty(getDetailAccountSession())) {
            redirect('login');
        }
        $this->path     = 'back/pages/forms/';
        $this->page_url  = 'back/form/';
        $this->load->model('back/forms/Form_Model');
    }

    public function index($content = 'history') {
        $data['data_account']   = getDetailAccountSession();

        $get_content             = $this->content($content);
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
    private function content($content) {
        if($content == 'history') {
            $display    = $_SERVER['QUERY_STRING'];
            if($display) {
                setOldPage($this->page_url.$content.'?'.$display);
            }else {
                setOldPage($this->page_url.$content);
            }
            $get_content['page']         = 'history';
            $get_content['theme_style']  = $this->path.'css/history/theme_style';
            $get_content['theme_script'] = $this->path.'js/history/theme_script';
            $get_content['script']       = $this->path.'js/history/script';
            $get_content['page_url']     = $this->page_url.'history';
            return $get_content;
        }else if($content == 'form-studio') {
            $display    = $_SERVER['QUERY_STRING'];
            if($display) {
                setOldPage($this->page_url.$content.'?'.$display);
            }else {
                setOldPage($this->page_url.$content);
            }
            $get_content['page']         = 'form-studio';
            $get_content['datas']         = [
                'master_form' => $this->Form_Model->getMasterForm(),
                'history_form' => $this->Form_Model->getHistoryForm()
            ];
            $get_content['theme_style']  = $this->path.'css/form-studio/theme_style';
            $get_content['theme_script'] = $this->path.'js/form-studio/theme_script';
            $get_content['script']       = $this->path.'js/form-studio/script';
            $get_content['page_url']     = $this->page_url.'form-studio';
            return $get_content;
        }else if($content == 'create-form') {
            $display    = $_SERVER['QUERY_STRING'];
            if($display) {
                setOldPage($this->page_url.$content.'?'.$display);
            }else {
                setOldPage($this->page_url.$content);
            }
            $get_content['page']         = 'create-form';
            $get_content['datas']         = [
                'link_form' => $this->Form_Model->getLinkForm()
            ];
            $get_content['theme_style']  = $this->path.'css/create-form/theme_style';
            $get_content['theme_script'] = $this->path.'js/create-form/theme_script';
            $get_content['script']       = $this->path.'js/create-form/script';
            $get_content['page_url']     = $this->page_url.'create-form';
            return $get_content;
        }else {
            redirect('ErrorPage/page404');
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