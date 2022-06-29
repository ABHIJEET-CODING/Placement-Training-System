<?php
 require_once("Layout.php");
class Events extends Layout {

    function __construct() {
        parent::__construct();
        $this->load->model('Events_Model');
    }

    // event
    public function index(){
        $this->load->view('events');
	}
    public function add_event(){
        $data = $this->Events_Model->add_event();
        echo json_encode($data);
	}
    public function view_event(){
        $postData = $this->input->post();
        $data = $this->Events_Model->view_event($postData);
        echo json_encode($data);
	}
    public function delete_event(){
        $data = $this->Events_Model->delete_event();
        echo json_encode($data);
	}
    public function fetch_event(){
        $data = $this->Events_Model->fetch_event();
        echo json_encode($data);
    }
    public function update_event(){
        // echo '<pre>';
        // print_r($_POST);
        // print_r($_FILES);
        // die;
        $data = $this->Events_Model->update_event();
        echo json_encode($data);
    }
    public function event_view(){
        $data['show_events'] = $this->Events_Model->event_view();
        // echo '<pre>';
        // print_r($data);
        // die;
        $this->load->view('event_view', $data);
    }
}
?>
