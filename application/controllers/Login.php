<?php
 require_once("Layout.php");
    class Login extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Login_Model');
        }

        public function index(){
            
            $this->load->view('login');
        }
        public function user_login(){
            $result = $this->Login_Model->user_login();
            echo json_encode($result); 
        }
        public function logout(){
            $this->session->sess_destroy();
            redirect(base_url('Login'));
        }
    }
?>
