<?php
    class Registration_Model extends CI_model {
    
        public function registration_tpo(){
            $email     = $this->input->post('email');
            $data = array (
                'name'        => $this->input->post('name'),
                'department'  => $this->input->post('department'),
                'email'       => $email,
                'contact_no'  => $this->input->post('contact_no'),
                'password'    => $this->input->post('password')
            );
        
            $check_user = $this->db->query("select * from tpo where (email='".$email."')");
            $row = $check_user->num_rows();
            if($row){
                return array("status" => 0, "message" => "Email address already exist");
            } else {
                $query = $this->db->insert('tpo', $data);
                if(!empty($query)){
                    //set session here
                    return array('status' => 1, 'message' => 'Registarion success');
                }
            }
        }
        public function registration_student(){
            $email         = $this->input->post('email');
            $enrollment_no = $this->input->post('enrollment_no');

            $data = array (
                'enrollment_no' => $enrollment_no,
                'name'          => $this->input->post('name'),
                'department'    => $this->input->post('department'),
                'semester'    => $this->input->post('semester'),
                'email'         => $email,
                'contact_no'    => $this->input->post('contact_no'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'passing_year'  => $this->input->post('passing_year'),
                'password'      => $this->input->post('password')
            );
        
            $check_user = $this->db->query("select * from student where (email='".$email."' OR enrollment_no='".$enrollment_no."')");
            $row = $check_user->num_rows();
            if($row){
                return array("status" => 0, "message" => "Email or Enrollment No. address already exist");
            } else {
                $query = $this->db->insert('student', $data);
                if(!empty($query)){
                    //set session here
                    return array('status' => 1, 'message' => 'Registarion success');
                }
            }
        }

        public function fetch_quiz(){

            //print_r($_POST);die;
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
             

              if($q1=='undefined') {
                    //echo '<h2>Please answer all questions.</h2>';
                }else if($q2 =='undefined'){
                    //echo '<h2>Please answer all questions.</h2>';
                }else if($q3 == 'undefined'){
                    //echo '<h2>Please answer all questions.</h2>';
                }else if($q4 == 'undefined'){
                     //echo '<h2>Please answer all questions.</h2>';
                 }else if($q5 == 'undefined'){
                    //echo '<h2>Please answer all questions.</h2>';
                 }
          else {
        $score = 0;
        if($q1 == 1) { // 1st option is correct
        $score++;
        }
        if($q2 == 1) { // 3rd option is correct
        $score++;
        }
        if($q3 == 2) { // 2nd option is correct
        $score++;
        }
         if($q4 == 3) { // 3rd option is correct
        $score++;
        }
        if($q5 == 2) { // 2nd option is correct
        $score++;
        }

            }

            if(!empty($score)){
                return array(
                            'status'  => 1, 
                            'message' => 'Your score is '.$score.' out of 5'
                        );
            }else{
                return array(
                            'status'  => 0, 
                            'message' => 'Please select all answer'
                        );
            }

            
        }

    
    }
?>


   