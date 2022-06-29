<?php
 require_once("Layout.php");
    class Roadmap extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Login_Model');
        }

        public function index(){
        
            $this->load->view('roadmap');
        }
  
    }
?>
