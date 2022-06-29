<?php
 require_once("Layout.php");
class Registration extends Layout {

    function __construct() {
        parent::__construct();
        $this->load->model('Registration_Model');
    }

	public function index(){
        $this->load->view('register');
	}

	public function tpo_registration(){
        $this->load->view('tpo_registration');
	}

	public function registration_tpo(){
        $result = $this->Registration_Model->registration_tpo();
		echo json_encode($result); 
	}

    public function student_registration(){
        $this->load->view('student_registration');
	}

	public function registration_student(){
        // echo "<pre>";
        // print_r($_POST);
        // die;
        $result = $this->Registration_Model->registration_student();
		echo json_encode($result); 
	}



	// public function user_registration(){
    //     $result = $this->Registration_Model->user_registration();
	// 	echo json_encode($result); 
	// }

	
}
?>
