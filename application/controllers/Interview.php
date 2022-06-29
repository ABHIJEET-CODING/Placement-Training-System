<?php
 require_once("Layout.php");
    class Interview extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Interview_Model');
        }

        public function index(){
            $this->load->view('interview');
        }

        public function add_interview(){

            $data = $this->Interview_Model->add_interview();

            echo json_encode($data);
        }
        public function view_interview(){
            $postData = $this->input->post();
            $data = $this->Interview_Model->view_interview($postData);
            echo json_encode($data);
        }
        public function delete_interview(){
            $data = $this->Interview_Model->delete_interview();
            echo json_encode($data);
        }
        public function fetch_interview(){
            $data = $this->Interview_Model->fetch_interview();
            echo json_encode($data);
        }
        public function update_interview(){
            // 	echo "<pre>";
			// print_r($_POST);
			// die;
            $data = $this->Interview_Model->update_interview();
            echo json_encode($data);
        }
        public function recived_interview(){
            $data['show_interview'] = $this->Interview_Model->show_interview();
            // echo '<pre>';
            // print_r($data);
            // die;
            $this->load->view('view_interview', $data);
        }
        public function view_details(){
            $postData = $this->input->post();
            $data = $this->Interview_Model->view_interviewdetails($postData);
            echo json_encode($data);
        }
        public function view_interviews(){
            $this->load->view('view_interview');
           
        }
    }
?>
