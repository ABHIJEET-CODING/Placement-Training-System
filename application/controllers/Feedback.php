<?php
 require_once("Layout.php");
    class Feedback extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Feedback_Model');
        }

        public function index(){
            $this->load->view('feedback');
        }

        public function add_feedback(){
            $data = $this->Feedback_Model->add_feedback();
            echo json_encode($data);
        }
        public function view_feedback(){
            $postData = $this->input->post();
            $data = $this->Feedback_Model->view_feedback($postData);
            echo json_encode($data);
        }
        public function delete_feedback(){
            $data = $this->Feedback_Model->delete_feedback();
            echo json_encode($data);
        }
        public function fetch_feedback(){
            $data = $this->Feedback_Model->fetch_feedback();
            echo json_encode($data);
        }
        public function update_feedback(){
            // 	echo "<pre>";
			// print_r($_POST);
			// die;
            $data = $this->Feedback_Model->update_feedback();
            echo json_encode($data);
        }
        public function recived_feedback(){
            $data['show_feedback'] = $this->Feedback_Model->show_feedback();
            // echo '<pre>';
            // print_r($data);
            // die;
            $this->load->view('recived_feedback', $data);
        }
    }
?>
