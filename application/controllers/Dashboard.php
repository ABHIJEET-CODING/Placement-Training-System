<?php
 require_once("Layout.php");
    class Dashboard extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Login_Model');
            $this->load->model('Registration_Model');
        }
        
        public function index(){
            // echo "<pre>";
            // print_r($_SESSION);
            // die;
              $this->load->view('dashboard');    
        }
   
            public function user(){
            // echo "<pre>";
            // print_r($_SESSION);
            // die;
                  $this->load->view('quiz');
              }
      
        
        public function quiz1(){
          
           $data = $this->Registration_Model->fetch_quiz();
           echo json_encode($data);
        }
    }
?>
