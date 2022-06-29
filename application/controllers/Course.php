<?php
    require_once("Layout.php");
    class Course extends Layout {

        function __construct() {
            parent::__construct();
            $this->load->model('Course_Model');
        }

        //  Cource Category
    	public function course_category(){
            $this->load->view('course_category');
    	}
    	public function do_upload(){
            $data = $this->Course_Model->add_course_category();
            echo json_encode($data);
    	}

        public function view_course_category(){
            $postData = $this->input->post();
            $data = $this->Course_Model->get_category_data($postData);
            echo json_encode($data);
    	}
        public function student(){
            $this->load->view('view_student');
        }
        public function student_data(){
            $postData = $this->input->post();
            $data = $this->Course_Model->get_student_data($postData);
            echo json_encode($data);
        }

        public function delete_category(){
            $data = $this->Course_Model->delete_category();
            echo json_encode($data);
    	}
        public function fetch_category(){
            $data = $this->Course_Model->fetch_category();
            echo json_encode($data);
        }
        public function update_category(){
            $data = $this->Course_Model->update_category();
            echo json_encode($data);
        }

        // Course
        public function course(){
            $data['category_name'] = $this->Course_Model->get_category();
            $this->load->view('course', $data);
    	}
        public function add_course(){
            $data = $this->Course_Model->add_course();
            echo json_encode($data);
    	}
        public function view_course(){
            $postData = $this->input->post();
            $data = $this->Course_Model->view_course($postData);
            echo json_encode($data);
    	}
        public function delete_course(){
            $data = $this->Course_Model->delete_course();
            echo json_encode($data);
    	}
        public function fetch_course(){
            $data = $this->Course_Model->fetch_course();
            echo json_encode($data);
        }
        public function update_course(){
            // echo '<pre>';
            // print_r($_POST);
            // die;
            $data = $this->Course_Model->update_course();
            echo json_encode($data);
        }
    }
?>
