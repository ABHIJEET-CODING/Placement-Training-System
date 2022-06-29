<?php
    class Profile_management_model extends CI_model {
    
        public function update_profile(){
            // echo '<pre>';
            // print_r($_SESSION);
            // die;
            $user_type = $_SESSION['user_type'];
            $id        = $_SESSION['id'];

            switch ($user_type) {
                
                case 'user':
                $this->db->where('id', $id);
                $query=$this->db->get('student');
		        $user_data = $query->row();
                return $user_data;
                    
                case 'tpo':

                $this->db->where('id', $id);
                $query=$this->db->get('tpo');

                $tpo_data = $query->row();
                // echo $this->db->last_query(); die;

                return $tpo_data;                

                case 'admin':

                $this->db->where('id', $id);
                $query=$this->db->get('admin');

                $admin_data = $query->row();
                // echo $this->db->last_query(); die;

                return $admin_data;
            }
        }

        public function update_profile_data(){
            $user_type = $_SESSION['user_type'];
            $id        = $_SESSION['id'];

            switch ($user_type) {
                
                case 'user':
                $this->db->set('name', $this->input->post('name'));
                $this->db->set('email', $this->input->post('email'));
                $this->db->set('contact_no', $this->input->post('contact_no'));

                $this->db->where('id', $id);
                $user = $this->db->update('student');
                if(!empty($user)){
                    return array(
                                'status' => 1, 
                                'message' => 'Profile Updated.'
                            );
                } else {
                    return array(
                                'status'  => 0, 
                                'message' => 'Something went worng!'
                            );
                }

                case 'tpo':
                $this->db->set('name', $this->input->post('name'));
                $this->db->set('email', $this->input->post('email'));
                $this->db->set('contact_no', $this->input->post('contact_no'));

                $this->db->where('id', $id);
                $tpo = $this->db->update('tpo');
                if(!empty($tpo)){
                    return array(
                                'status' => 1, 
                                'message' => 'Profile Updated.'
                            );
                } else {
                    return array(
                                'status'  => 0, 
                                'message' => 'Something went worng!'
                            );
                }            

                case 'admin':
                $this->db->set('name', $this->input->post('name'));
                $this->db->set('email', $this->input->post('email'));
                $this->db->set('contact_no', $this->input->post('contact_no'));

                $this->db->where('id', $id);
                $tpo = $this->db->update('admin');
                if(!empty($tpo)){
                    return array(
                                'status' => 1, 
                                'message' => 'Profile Updated.'
                            );
                } else {
                    return array(
                                'status'  => 0, 
                                'message' => 'Something went worng!'
                            );
                }
            }    
        }
        public function update_password(){
            $user_type = $_SESSION['user_type'];
            $id        = $_SESSION['id'];

            $old_password = $this->input->post('old_password');
            $new_password = $this->input->post('new_password');
            switch ($user_type) {
                
                case 'user':
                
                $this->db->select('*');
                $this->db->from('student');
                $this->db->where('password', $old_password);
                $get_user  = $this->db->get();
                $result    = $get_user->row_array();
                if(!empty($result)){
                    $this->db->set('password', $new_password);
                    $this->db->where('id', $id);
                    $user = $this->db->update('student');
                    if(!empty($user)){
                        return array(
                                    'status' => 1, 
                                    'message' => 'Password Changed.'
                                );
                    }
                } else {
                    return array(
                        'status' => 0, 
                        'message' => 'Password Dose not match!'
                    );
                }

                case 'tpo':
                 
                $this->db->select('*');
                $this->db->from('tpo');
                $this->db->where('password', $old_password);
                $get_user  = $this->db->get();
                $result    = $get_user->row_array();
                if(!empty($result)){
                    $this->db->set('password', $new_password);
                    $this->db->where('id', $id);
                    $user = $this->db->update('tpo');
                    if(!empty($user)){
                        return array(
                                    'status' => 1, 
                                    'message' => 'Password Changed.'
                                );
                    }
                } else {
                    return array(
                        'status' => 0, 
                        'message' => 'Password Dose not match!'
                    );
                }                

                case 'admin':
                 
                $this->db->select('*');
                $this->db->from('admin');
                $this->db->where('password', $old_password);
                $get_user  = $this->db->get();
                $result    = $get_user->row_array();
                if(!empty($result)){
                    $this->db->set('password', $new_password);
                    $this->db->where('id', $id);
                    $user = $this->db->update('admin');
                    if(!empty($user)){
                        return array(
                            'status' => 1, 
                            'message' => 'Password Changed.'
                        );
                    }
                } else {
                    return array(
                        'status' => 0, 
                        'message' => 'Password Dose not match!'
                    );
                }
            }    
        }
    
    }
?>


   