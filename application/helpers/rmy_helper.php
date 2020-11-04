<?php
/**
 * @author Ragil Manggalaning Y. <github: @ragil000>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if(!function_exists('encodeRMY')) {
    function encodeRMY($string, $key) {
        $time = time();
        $new_string = base64_encode($time.'.'.base64_encode($string).'.'.sha1(base64_encode($key)));
        $encode = base64_encode($new_string);
        return $encode;
    }
}

if(!function_exists('decodeRMY')) {
    function decodeRMY($string, $key) {
        $new_string = base64_decode($string);
        $new_string = base64_decode($new_string);
        $explode = explode('.', $new_string);
        if($explode[2] == sha1(base64_encode($key))) {
            return base64_decode($explode[1]);
        }else {
            return false;
        }
    }
}

if(!function_exists('getDetailAccountSession')) {
    function getDetailAccountSession() {
        $_this  = get_instance();
        $session = $_this->session->userdata('penyihir');
        if($session) {
            $account_session    = json_decode(decodeRMY($session, 'rmy'));
            if($account_session) {
                                  $_this->db->join('profiles', 'profiles.user_id=users.id', 'left');
                                  $_this->db->select('users.id, users.nim, users.username, users.email, users.role, profiles.photo_profile, profiles.full_name');
                $account_data   = $_this->db->get_where('users', ['users.id' => $account_session->id])->row();
                return (object)[
                    'id' => $account_data->id,           
                    'nim' => $account_data->nim,           
                    'full_name' => $account_data->full_name,        
                    'username' => $account_data->username,        
                    'email' => $account_data->email,
                    'photo_profile' => $account_data->photo_profile,
                    'role' => $account_data->role
                ];
            }else {
                return false;
            }
        }else {
            return false;
        }
    }
}

if(!function_exists('setOldPage')) {
    function setOldPage($page_path) {
        $_this  = get_instance();
        $_this->session->set_userdata(['old_page' => $page_path]);
    }
}

if(!function_exists('getOldPage')) {
    function getOldPage() {
        $_this  = get_instance();
        return $_this->session->userdata('old_page');
    }
}

if(! function_exists(('limitText'))) {
    function limitText($string, $limit = 100) {
        $string = strip_tags($string);
        if (strlen($string) > $limit) {
            $stringCut = substr($string, 0, $limit);
            $endPoint = strrpos($stringCut, ' ');
            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
            $string .= '...';
        }
        return $string;
    }
}

if(!function_exists('alertRMY')) {
    function alertRMY($message, $status) {
        if($status) {
            $alert  = '<div class="col-12" id="alert">
                    <div class="alert alert-success bg-success" role="alert">
                        <i class="icon-check text-light pr-2"></i><span class="text-light">'.$message.'</span>
                    </div>
                </div>';
        }else {
            $alert  = '<div class="col-12" id="alert">
                        <div class="alert alert-danger bg-red-soft" role="alert">
                            <i class="icon-ban text-light pr-2"></i><span class="text-light">'.$message.'</span>
                        </div>
                    </div>';
        }
        return $alert;
    }
}