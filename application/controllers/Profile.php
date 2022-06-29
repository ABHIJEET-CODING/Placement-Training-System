<?php
    require_once("Layout.php");
    
    class Profile extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Profile_management_model');
        }

        public function index(){
            $data['manage_profile'] = $this->Profile_management_model->update_profile();
          if($_SESSION['user_type'] == 'user'){
            $this->load->view('manage_profile', $data);
          }else if($_SESSION['user_type'] == 'admin'){
            $this->load->view('manage_profile_admin', $data);
          }else if($_SESSION['user_type'] == 'tpo'){
            $this->load->view('manage_profile_tpo', $data);
          }
        }
        
        public function update_profile_data(){
            $result = $this->Profile_management_model->update_profile_data();
            echo json_encode($result); 
        }
        public function update_password(){
            // echo '<pre>';
            // print_r($_POST);
            // die;
            $result = $this->Profile_management_model->update_password();
            echo json_encode($result); 
        }
        
    }
?>
