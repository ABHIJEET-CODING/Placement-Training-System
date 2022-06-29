<?php
 require_once("Layout.php");
    class Manageinterview extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Manageinterview_Model');
        }

        public function index(){
            $this->load->view('manageinterview');
        }

        public function add_manageinterview(){

            $data = $this->Manageinterview_Model->add_manageinterview();
          
            echo json_encode($data);
        }
        public function view_manageinterview(){
          
            $postData = $this->input->post();
            $data = $this->Manageinterview_Model->view_manageinterview($postData);
            echo json_encode($data);
        }
        public function delete_manageinterview(){
            $data = $this->Manageinterview_Model->delete_manageinterview();
            echo json_encode($data);
        }
        public function fetch_manageinterview(){
            $data = $this->Manageinterview_Model->fetch_manageinterview();
            echo json_encode($data);
        }
        public function update_manageinterview(){
            // 	echo "<pre>";
			// print_r($_POST);
			// die;
            $data = $this->Manageinterview_Model->update_manageinterview();
            echo json_encode($data);
        }
        public function recived_manageinterview(){
            $data['show_interview'] = $this->Manageinterview_Model->show_manageinterview();
            // echo '<pre>';
            // print_r($data);
            // die;
            $this->load->view('recived_interview', $data);
        }
    }
?>
