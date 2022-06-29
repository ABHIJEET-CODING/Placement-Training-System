<?php
    class Login_Model extends CI_model {
    
        public function user_login(){
            // echo "<pre>";
            // print_r($_POST);
            // die;

            $user_type     = $this->input->post('usertype');
            $email         = $this->input->post('email');
            $password      = $this->input->post('password');

            switch ($user_type) {
                case 'admin':
                    $email    = $this->input->post('email');
                    $password = $this->input->post('password');
    
                    $this->db->select('*');
                    $this->db->from('admin');
                    $this->db->where('admin_id', $email);
                    $this->db->where('password',$password);
                    $query  = $this->db->get();
                    $result = $query->row_array();
                    if(!empty($result)){
                        $ID               = $result['id'];
                        $userName         = $result['name'];
                        $user_key         = $result['pin'];
                        $_SESSION['name'] = $userName;
                        $_SESSION['id']   = $ID;
                        $_SESSION['user_type'] = 'admin';
                        return array(
                                'status' => 1, 
                                'usertype' => 'admin', 
                                'message' => 'Login success!'
                            );
                    }
                    else {
                        return array(
                                'status' => 0,
                                'message' => 'Invalid Email and password Combination!'
                            );
                    }

                case 'user':
                $enrollment_no = $this->input->post('email');
                $password      = $this->input->post('password');
                // $enrollment_no = $this->input->post('enrollment_no');

                $this->db->select('*');
                $this->db->from('student');
                $this->db->where('enrollment_no', $enrollment_no);
                $this->db->where('password', $password);
                $query  = $this->db->get();
                // echo $this->db->last_query(); die;
                $result = $query->row_array();
                if(!empty($result)){
                    $ID               = $result['id'];
                    $userName         = $result['name'];
                    $_SESSION['name'] = $userName;
                    $_SESSION['id']   = $ID;
                    $_SESSION['user_type'] = 'user';
                    return array(
                            'status' => 1,
                            'usertype' => 'user', 
                            'message' => 'Login success!'
                        );
                }
                else {
                    return array(
                            'status' => 0,
                            'message' => 'Invalid Enrollment No. and Password Combination!'
                        );
                }
            
                case 'tpo':
                    $email    = $this->input->post('email');
                    $password = $this->input->post('password');

                    $this->db->select('*');
                    $this->db->from('tpo');
                    $this->db->where('email', $email);
                    $this->db->where('password',$password);
                    $query  = $this->db->get();
                    $result = $query->row_array();
                    if(!empty($result)){
                        $ID               = $result['id'];
                        $userName         = $result['name'];
                        $_SESSION['name'] = $userName;
                        $_SESSION['id']   = $ID;
                        $_SESSION['user_type'] = 'tpo';
                        return array(
                                'status' => 1, 
                                'usertype' => 'tpo', 
                                'message' => 'Login success!'
                            );
                    }
                    else {
                        return array(
                                'status' => 0,
                                'message' => 'Invalid Email and password Combination!'
                            );
                    }   
            }
        }
    
    }
?>


   