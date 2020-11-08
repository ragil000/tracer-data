<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Model extends CI_Model {

    public function getMajorOpt() {
        if(!empty($this->input->get('user_id'))) {
                      $this->db->join('educations', 'profiles.id=educations.profile_id');
                      $this->db->join('users', 'users.id=profiles.user_id');
                      $this->db->select('educations.major_id');
            $detail = $this->db->get_where('profiles', ['users.id' => $this->input->get('user_id')]);
            if($detail->num_rows() > 0) {
                $major_id = $detail->row()->major_id;
            }
        }
        $result = $this->db->get('majors');
        $majors_opt = '<option value="">-- Jurusan --</option>';
        if($result->num_rows() > 0) {
            foreach($result->result() as $row) {
                if(!empty($major_id)) {
                    if($row->id == $major_id) {
                        $majors_opt .= '<option value="'.$row->id.'" selected>'.$row->title.'</option>';
                    }else {
                        $majors_opt .= '<option value="'.$row->id.'">'.$row->title.'</option>';
                    }
                }else {
                    $majors_opt .= '<option value="'.$row->id.'">'.$row->title.'</option>';
                }
            }
        }
        return $majors_opt;
    }

    public function getStatusOpt() {
                  $this->db->join('users', 'users.id=profiles.user_id');
                  $this->db->select('profiles.status');
                  $this->db->group_by('profiles.status');
        $result = $this->db->get('profiles');
        $status_opt = '<option value="">-- Status --</option>';
        if($result->num_rows() > 0) {
            foreach($result->result() as $row) {
                $status_opt .= '<option value="'.$row->status.'">'.$row->status.'</option>';
            }
        }
        return $status_opt;
    }

    public function getStudentOpt($null_opt = true) {
                  $this->db->join('users', 'users.id=profiles.user_id');
                  $this->db->select('profiles.id as profile_id, profiles.full_name, users.nim, profiles.status');
                  $this->db->where('users.status !=', 'nonactive');
        $result = $this->db->get('profiles');
        if($null_opt) {
            $status_opt = '<option value="">-- Status --</option>';
        }else {
            $status_opt = null;
        }
        if($result->num_rows() > 0) {
            foreach($result->result() as $row) {
                $status_opt .= '<option value="'.$row->profile_id.'">'.strtoupper($row->nim).' - '.($row->full_name ? $row->full_name : '(belum diisi)').'</option>';
            }
        }
        return $status_opt;
    }

    public function getDateOfEntryOpt() {
                  $this->db->join('educations', 'profiles.id=educations.profile_id');
                  $this->db->join('users', 'users.id=profiles.user_id');
                  $this->db->select('YEAR(educations.date_of_entry) as date_of_entry');
                  $this->db->group_by('educations.date_of_entry');
        $result = $this->db->get('profiles');
        $date_of_entry_opt = '<option value="">-- Tahun Masuk --</option>';
        if($result->num_rows() > 0) {
            foreach($result->result() as $row) {
                $date_of_entry_opt .= '<option value="'.$row->date_of_entry.'">'.$row->date_of_entry.'</option>';
            }
        }
        return $date_of_entry_opt;
    }

    public function getDateOfGraduateOpt() {
                  $this->db->join('educations', 'profiles.id=educations.profile_id');
                  $this->db->join('users', 'users.id=profiles.user_id');
                  $this->db->select('YEAR(educations.date_of_graduate) as date_of_graduate');
                  $this->db->group_by('educations.date_of_graduate');
        $result = $this->db->get('profiles');
        $date_of_graduate_opt = '<option value="">-- Tahun Lulus --</option>';
        if($result->num_rows() > 0) {
            foreach($result->result() as $row) {
                $date_of_graduate_opt .= '<option value="'.$row->date_of_graduate.'">'.$row->date_of_graduate.'</option>';
            }
        }
        return $date_of_graduate_opt;
    }

    public function create($post) {
        $array_data  = [
            'nim'   => $post['nim'],
            'email' => $post['email'],
            'password'  => password_hash($post['password'], PASSWORD_BCRYPT),
            'status'    => $post['status'] ? $post['status'] : 'verify',
            'created_by'    => getDetailAccountSession()->id
        ];
        $execute    = $this->db->insert('users', $array_data);
        $user_id  = $this->db->insert_id();
        if($execute) {
            $array_data  = [
                'user_id'   => $user_id
            ];
            $execute    = $this->db->insert('profiles', $array_data);
            $profile_id  = $this->db->insert_id();
            if($execute) {
                $array_data  = [
                    'profile_id'   => $profile_id,
                    'major_id'   => $post['major_id'],
                    'date_of_entry' => $post['date_of_entry']
                ];
                $execute    = $this->db->insert('educations', $array_data);
                if($execute) {
                    $array_data  = [
                        'profile_id'   => $profile_id
                    ];
                    $execute    = $this->db->insert('parents', $array_data);
                    if($execute) {
                        $result['status']   = true;
                        $result['message']  = 'Berhasil menginputkan data.';
                    }else {
                        $this->db->delete('users', ['id' => $user_id]);
                        $this->db->delete('profiles', ['user_id' => $user_id]);
                        $this->db->delete('educations', ['user_id' => $user_id]);
                        $result['status']   = false;
                        $result['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
                    }
                }else {
                    $this->db->delete('users', ['id' => $user_id]);
                    $this->db->delete('profiles', ['user_id' => $user_id]);
                    $result['status']   = false;
                    $result['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
                }
            }else {
                $this->db->delete('users', ['id' => $user_id]);
                $result['status']   = false;
                $result['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
            }
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal menginputkan data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function update($post) {
        $user_id    = $post['user_id'];
        $profile_id    = $post['profile_id'];
        if(!empty($post['password'])) {
            $array_data  = [
                'nim'   => $post['nim'],
                'email' => $post['email'],
                'password'  => password_hash($post['password'], PASSWORD_BCRYPT),
                'updated_by'    => getDetailAccountSession()->id,
                'updated_at'    => time()
            ];
        }else {
            $array_data  = [
                'nim'   => $post['nim'],
                'email' => $post['email'],
                'updated_by'    => getDetailAccountSession()->id,
                'updated_at'    => time()
            ];
        }
        $execute    = $this->db->update('users', $array_data, ['id' => $user_id]);
        if($execute) {
            $array_data  = [
                'major_id'   => $post['major_id'],
                'date_of_entry' => $post['date_of_entry']
            ];
            $execute    = $this->db->update('educations', $array_data, ['profile_id' => $profile_id]);
            if($execute) {
                $result['status']   = true;
                $result['message']  = 'Berhasil mengupdate data.';
            }else {
                $result['status']   = false;
                $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
            }
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function updateProfile($post) {
        $user_id    = $post['user_id'];
        $profile_id    = $post['profile_id'];

        $array_data  = [
            'email' => $post['email'],
            'updated_by'    => getDetailAccountSession()->id,
            'updated_at'    => time()
        ];
        $execute    = $this->db->update('users', $array_data, ['id' => $user_id]);
        if($execute) {
            $array_data  = [
                'full_name'   => $post['full_name'],
                'phone'   => $post['phone'],
                'place_of_birth'   => $post['place_of_birth'],
                'date_of_birth'   => $post['date_of_birth'],
                'gender'   => $post['gender'],
                'facebook'   => $post['facebook'],
                'instagram'   => $post['instagram'],
                'twitter'   => $post['twitter'],
                'linkedin'   => $post['linkedin'],
                'hobby'   => $post['hobby'],
                'quote'   => $post['quote'],
                'address'   => $post['address']
            ];
            $execute    = $this->db->update('profiles', $array_data, ['id' => $profile_id]);
            if($execute) {
                $result['status']   = true;
                $result['message']  = 'Berhasil mengupdate data.';
            }else {
                $result['status']   = false;
                $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
            }
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function updateParent($post) {
        $profile_id    = $post['profile_id'];

        $array_data  = [
            'father_full_name' => $post['father_full_name'],
            'mother_full_name' => $post['mother_full_name'],
            'father_job' => $post['father_job'],
            'mother_job' => $post['mother_job'],
            'guardian_phone' => $post['guardian_phone'],
            'guardian_address' => $post['guardian_address'],
            'updated_by'    => getDetailAccountSession()->id,
            'updated_at'    => time()
        ];
        $execute    = $this->db->update('parents', $array_data, ['profile_id' => $profile_id]);
        if($execute) {
            $result['status']   = true;
            $result['message']  = 'Berhasil mengupdate data.';
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function updateStudy($post) {
        $profile_id    = $post['profile_id'];
        $detail_data = $this->db->get_where('educations', ['profile_id' => $profile_id])->row();

        $thesis_file_name = null;
        if($_FILES['thesis_file']['name']) {
            $name = 'File-skripsi-'.time();
            $thesis_file = $this->uploadFile('thesis_file', $name);
            if($thesis_file['status']) {
                if($detail_data->thesis_file) {
                    if(file_exists('./uploads/files/'.$detail_data->thesis_file)) {
                        unlink('./uploads/files/'.$detail_data->thesis_file);
                    }
                }
                $thesis_file_name = $thesis_file['file_name'];
            }
        }else {
            if($detail_data->thesis_file) {
                $thesis_file_name = $detail_data->thesis_file;
            }
        }

        $certificate_file_name = null;
        if($_FILES['certificate_file']['name']) {
            $name = 'File-ijazah-'.time();
            $certificate_file = $this->uploadFile('certificate_file', $name);
            if($certificate_file['status']) {
                if($detail_data->certificate_file) {
                    if(file_exists('./uploads/files/'.$detail_data->certificate_file)) {
                        unlink('./uploads/files/'.$detail_data->certificate_file);
                    }
                }
                $certificate_file_name = $certificate_file['file_name'];
            }
        }else {
            if($detail_data->certificate_file) {
                $certificate_file_name = $detail_data->certificate_file;
            }
        }

        $array_data  = [
            'origin' => $post['origin'],
            'thesis_title' => $post['thesis_title'],
            'thesis_abstract' => $post['thesis_abstract'],
            'thesis_supervisor1' => $post['thesis_supervisor1'],
            'thesis_supervisor2' => $post['thesis_supervisor2'],
            'certificate_code' => $post['certificate_code'],
            'score' => str_replace(',', '.', $post['score']),
            'thesis_file' => $thesis_file_name,
            'certificate_file' => $certificate_file_name,
            'updated_by'    => getDetailAccountSession()->id,
            'updated_at'    => time()
        ];
        $execute    = $this->db->update('educations', $array_data, ['profile_id' => $profile_id]);
        if($execute) {
            $result['status']   = true;
            $result['message']  = 'Berhasil mengupdate data.';
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function updateArchievement($post) {
        $profile_id    = $post['profile_id'];
        $total_data = $post['total_data'];
        $result['status']   = true;
        $result['message']  = 'Berhasil mengupdate data.';
        if($total_data <= 0) {
            $execute    = $this->db->delete('archievements', ['profile_id' => $profile_id]);
            if(!$execute) {
                $result['status']   = false;
                $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
                return $result;
            }
        }else {
            $archievement_id = $post['archievement_id'];

            $this->db->where_not_in('id', $archievement_id);
            $data_delete = $this->db->get_where('archievements', ['profile_id' => $profile_id]);
            if($data_delete->num_rows() > 0) {
                foreach($data_delete->result() as $row) {
                    if($row->archievement_file) {
                        if(file_exists('./uploads/files/'.$row->archievement_file)) {
                            unlink('./uploads/files/'.$row->archievement_file);
                        }
                    }
                }
                $this->db->where_not_in('id', $archievement_id);
                $this->db->delete('archievements', ['profile_id' => $profile_id]);
            }

            $archievement_name = $post['archievement_name'];
            $field_of_archievement = $post['field_of_archievement'];
            $date_of_archievement = $post['date_of_archievement'];
            $regional_level = $post['regional_level'];
            $archievement_detail = $post['archievement_detail'];
            for($i = 0; $i < $total_data; $i++) {
                $archievement_file = null; 
                if($_FILES['archievement_file']['name'][$i]) {
                    $name = 'File-bukti-prestasi-'.time();
                    $_FILES['file[]']['name'] = $_FILES['archievement_file']['name'][$i];
                    $_FILES['file[]']['type'] = $_FILES['archievement_file']['type'][$i];
                    $_FILES['file[]']['tmp_name'] = $_FILES['archievement_file']['tmp_name'][$i];
                    $_FILES['file[]']['error'] = $_FILES['archievement_file']['error'][$i];
                    $_FILES['file[]']['size'] = $_FILES['archievement_file']['size'][$i];
                    $upload = $this->uploadFile('file[]', $name);
                    $detail_data = null;
                    if($upload['status']) {
                        if($archievement_id[$i]) {
                            $detail_data = $this->db->get_where('archievements', ['id' => $archievement_id[$i]])->row();
                            if($detail_data->archievement_file) {
                                if(file_exists('./uploads/files/'.$detail_data->archievement_file)) {
                                    unlink('./uploads/files/'.$detail_data->archievement_file);
                                }
                            }
                        }
                        $archievement_file = $upload['file_name'];
                    }else {
                        if($archievement_id[$i]) {
                            $detail_data = $this->db->get_where('archievements', ['id' => $archievement_id[$i]])->row();
                            if($detail_data->archievement_file) {
                                $archievement_file = $detail_data->archievement_file;
                            }
                        }
                    }
                }else {
                    if($archievement_id[$i]) {
                        $detail_data = $this->db->get_where('archievements', ['id' => $archievement_id[$i]])->row();
                        if($detail_data->archievement_file) {
                            $archievement_file = $detail_data->archievement_file;
                        }
                    }
                }

                if($archievement_id[$i]) {
                    $array_data  = [
                        'archievement_name' => $archievement_name[$i],
                        'field_of_archievement' => $field_of_archievement[$i],
                        'date_of_archievement' => $date_of_archievement[$i],
                        'regional_level' => $regional_level[$i],
                        'archievement_detail' => $archievement_detail[$i],
                        'archievement_file' => $archievement_file,
                        'updated_by'    => getDetailAccountSession()->id,
                        'updated_at'    => time()
                    ];
                    $execute    = $this->db->update('archievements', $array_data, ['id' => $archievement_id[$i]]);
                    if(!$execute) {
                        $result['status']   = false;
                        $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
                        return $result;
                    }
                }else {
                    $array_data  = [
                        'profile_id' => $profile_id,
                        'archievement_name' => $archievement_name[$i],
                        'field_of_archievement' => $field_of_archievement[$i],
                        'date_of_archievement' => $date_of_archievement[$i],
                        'regional_level' => $regional_level[$i],
                        'archievement_detail' => $archievement_detail[$i],
                        'archievement_file' => $archievement_file
                    ];
                    $execute    = $this->db->insert('archievements', $array_data);
                    if(!$execute) {
                        $result['status']   = false;
                        $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
                        return $result;
                    }
                }
            }
        }
        return $result;
    }

    public function updateJob($post) {
        $profile_id    = $post['profile_id'];

        $data_detail = $this->db->get_where('jobs', ['profile_id' => $profile_id]);
        if($data_detail->num_rows() > 0) {
            $array_data  = [
                'company' => $post['company'],
                'position' => $post['position'],
                'date_of_entry' => $post['date_of_entry'],
                'salary' => $post['salary'],
                'city' => $post['city'],
                'address' => $post['address'],
                'updated_by'    => getDetailAccountSession()->id,
                'updated_at'    => time()
            ];
            $execute    = $this->db->update('jobs', $array_data, ['profile_id' => $profile_id]);
        }else {
            $array_data  = [
                'profile_id' => $post['profile_id'],
                'company' => $post['company'],
                'position' => $post['position'],
                'date_of_entry' => $post['date_of_entry'],
                'salary' => $post['salary'],
                'city' => $post['city'],
                'address' => $post['address']
            ];
            $execute    = $this->db->insert('jobs', $array_data);
        }

        if($execute) {
            $result['status']   = true;
            $result['message']  = 'Berhasil mengupdate data.';
        }else {
            $result['status']   = false;
            $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
        }
        return $result;
    }

    public function updateStatus($post) {
        $status    = $post['status'];
        $profile_id    = $post['profile_id'];

        $result['status']   = true;
        $result['message']  = 'Berhasil mengupdate data.';

        if($status == 'Lulus') {
            $array_data = [
                'date_of_judicial' => $post['date_of_judicial'],
                'date_of_graduate' => $post['date_of_graduate'],
                'updated_by'    => getDetailAccountSession()->id,
                'updated_at'    => time()
            ];
        }

        for($i = 0; $i < count($profile_id); $i++) {
            $execute    = $this->db->update('profiles', ['status' => $status], ['id' => $profile_id[$i]]);
            if(!$execute) {
                $result['status']   = false;
                $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
                break;
            }
            if($status == 'Lulus') {
                $execute    = $this->db->update('educations', $array_data, ['profile_id' => $profile_id[$i]]);
                if(!$execute) {
                    $result['status']   = false;
                    $result['message']  = 'Gagal mengupdate data! Silahkan coba lagi.';
                    break;
                }
            }
        }

        return $result;
    }

    public function uploadFile($filename, $name){
        $type = preg_split('#/#', $_FILES[$filename]['type']);
        $type = $type[1];
        $config['upload_path']      = './uploads/files/';
        $config['allowed_types']    = '*';
        $config['file_name']        = $name.'.'.$type;
        $config['overwrite']		= true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($filename)){
            $results    = [
                'status' => false
            ];
        }else{
            $results    = [
                'status' => true,
                'file_name' => $config['file_name']
            ];
        }
        return $results;
    }

    public function read($limit = 10, $start = 0) {
                  $this->db->join('educations', 'profiles.id=educations.profile_id');
                  $this->db->join('users', 'users.id=profiles.user_id');
                  $this->db->select('users.id as user_id, users.email, users.nim, educations.date_of_entry, educations.date_of_graduate, profiles.*');
                  
                  if(!empty($this->input->post('major_id'))) {
                    $this->db->where('major_id', $this->input->post('major_id'));
                  }

                  if(!empty($this->input->post('status'))) {
                    $this->db->where('profiles.status', $this->input->post('status'));
                  }

                  if(!empty($this->input->post('date_of_entry'))) {
                    $this->db->where('YEAR(educations.date_of_entry)', $this->input->post('date_of_entry'));
                  }

                  if(!empty($this->input->post('date_of_graduate'))) {
                    $this->db->where('YEAR(educations.date_of_graduate)', $this->input->post('date_of_graduate'));
                  }

                  if(!empty($this->input->post('any'))) {
                      $this->db->like('users.nim', $this->input->post('any'));
                      $this->db->or_like('users.username', $this->input->post('any'));
                      $this->db->or_like('users.email', $this->input->post('any'));
                      $this->db->or_like('profiles.full_name', $this->input->post('any'));
                  }
                  
                  $this->db->where('users.status != "nonactive"');
                  $this->db->limit($limit, $start);
                  $this->db->order_by('date_of_entry DESC, status DESC');
        $get    = $this->db->get_where('profiles', ['users.role' => 'student']);
        if($get->num_rows() > 0){
            $result['status']   = true;
            $result['data']     = $get->result_array();
        }else if($get->num_rows() <= null) {
            $result['status']   = false;
            $result['data']     = null;
        }
        return $result;
    }

    public function editDetail() {
        $result = false;
        if(!empty($this->input->get('user_id'))) {
                      $this->db->join('educations', 'profiles.id=educations.profile_id');
                      $this->db->join('users', 'users.id=profiles.user_id');
                      $this->db->select('educations.major_id, DATE(educations.date_of_entry) AS date_of_entry, users.id AS user_id, users.nim, users.email, profiles.id AS profile_id');
            $detail = $this->db->get_where('profiles', ['users.id' => $this->input->get('user_id')]);
            if($detail->num_rows() > 0) {
                $result = $detail->row();
            }
        }
        return $result;
    }

    public function readDetail() {
        $account_data = getDetailAccountSession();

                      $this->db->join('users', 'users.id=profiles.user_id');
                      if(!empty($this->input->get('user_id'))) {
                          $this->db->where('users.id', $this->input->get('user_id'));
                      }else {
                        $this->db->where('users.id', $account_data->id);
                      }
                      $this->db->select('users.email, users.nim, profiles.id as profile_id, profiles.user_id, profiles.gender, profiles.full_name, profiles.phone, profiles.place_of_birth, DATE(profiles.date_of_birth) as date_of_birth, profiles.hobby, profiles.address, profiles.quote, profiles.facebook, profiles.instagram, profiles.twitter, profiles.linkedin, profiles.status_of_profile, profiles.status');
        $profile    = $this->db->get('profiles');

                      $this->db->join('educations', 'profiles.id=educations.profile_id');
                      $this->db->join('majors', 'educations.major_id=majors.id');
                      $this->db->join('teachers t1', 'educations.thesis_supervisor1=t1.id', 'left');
                      $this->db->join('teachers t2', 'educations.thesis_supervisor2=t2.id', 'left');
                      $this->db->join('users', 'users.id=profiles.user_id');
                      if(!empty($this->input->get('user_id'))) {
                          $this->db->where('users.id', $this->input->get('user_id'));
                      }else {
                        $this->db->where('users.id', $account_data->id);
                      }
                      $this->db->select('educations.id, educations.photo_formal, educations.major_id, majors.title as major, educations.origin, DATE(educations.date_of_entry) as date_of_entry, DATE(educations.date_of_judicial) as date_of_judicial, DATE(educations.date_of_graduate) as date_of_graduate, educations.thesis_title, educations.thesis_abstract, educations.thesis_supervisor1 as thesis_supervisor1_id, t1.full_name as thesis_supervisor1, educations.thesis_supervisor1 as thesis_supervisor2_id, t2.full_name as thesis_supervisor2, educations.certificate_code, educations.stra_code, educations.score, educations.thesis_file, educations.certificate_file');
        $education  = $this->db->get('profiles');

                  $this->db->join('parents', 'profiles.id=parents.profile_id');
                  $this->db->join('users', 'users.id=profiles.user_id');
                  if(!empty($this->input->get('user_id'))) {
                    $this->db->where('users.id', $this->input->get('user_id'));
                  }else {
                    $this->db->where('users.id', $account_data->id);
                  }
                  $this->db->select('parents.*');
        $parent = $this->db->get('profiles');

                          $this->db->join('archievements', 'profiles.id=archievements.profile_id');
                          $this->db->join('users', 'users.id=profiles.user_id');
                          if(!empty($this->input->get('user_id'))) {
                            $this->db->where('users.id', $this->input->get('user_id'));
                          }else {
                            $this->db->where('users.id', $account_data->id);
                          }
                          $this->db->select('archievements.*');
        $archievement   = $this->db->get('profiles');

                  $this->db->join('jobs', 'profiles.id=jobs.profile_id', 'left');
                  $this->db->join('cities', 'cities.id=jobs.city', 'left');
                  $this->db->join('users', 'users.id=profiles.user_id');
                  if(!empty($this->input->get('user_id'))) {
                    $this->db->where('users.id', $this->input->get('user_id'));
                  }else {
                    $this->db->where('users.id', $account_data->id);
                  }
                  $this->db->select('jobs.company, jobs.position, DATE(jobs.date_of_entry) as date_of_entry, DATE(jobs.date_of_end) as date_of_end, jobs.salary, jobs.city as city_id, jobs.address, cities.name as city, cities.lat, cities.long');
        $job    = $this->db->get('profiles');

        $teacher    = $this->db->get('teachers');

        $city    = $this->db->get('cities');

        $result['status']   = true;
        $result['data']     = [
            'profile' => $profile->result(),
            'education' => $education->result(),
            'parent' => $parent->result(),
            'archievement' => $archievement->result(),
            'job' => $job->result(),
            'teacher' => $teacher->result(),
            'city' => $city->result()
        ];
        return $result;
    }

}