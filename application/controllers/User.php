<?php
 require_once("Layout.php");
    class User extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Manageuser_Model');
        }

        public function index(){
            $this->load->view('manageuser');
        }

        public function add_manageinterview(){

            $data = $this->Manageinterview_Model->add_manageinterview();
          
            echo json_encode($data);
        }
        public function view_user(){
          
            $postData = $this->input->post();
            $data = $this->Manageuser_Model->view_manageuser($postData);
            echo json_encode($data);
        }
        public function delete_manageuser(){
            $data = $this->Manageuser_Model->delete_manageuser();
            echo json_encode($data);
        }
        public function fetch_manageuser(){
            $data = $this->Manageuser_Model->fetch_manageuser();
            echo json_encode($data);
        }
        public function update_manageuser(){
            // 	echo "<pre>";
			// print_r($_POST);
			// die;
            $data = $this->Manageuser_Model->update_manageuser();
            echo json_encode($data);
        }
      
    }
?>
