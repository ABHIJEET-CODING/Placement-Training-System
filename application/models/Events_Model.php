<?php
    class Events_Model extends CI_model {
        
        public function add_event(){
            // echo '<pre>';
            // print_r($_POST);
            // die;
            $m = $_FILES['event_image']['name'];      
            if ($m !== ""){
                $config['upload_path'] = 'assets/img/event_image/';                        
                // $config['log_threshold'] = 1;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                // $config['file_name']= uniqid();          
                $this->load->library('upload', $config);
                $this->upload->do_upload('event_image');
                $upload_data    = $this->upload->data();
                $event_image = $upload_data['file_name'];
            }   
       
            $data = array(
                'event_title'       => $this->input->post('event_title'),
                'event_date'        => $this->input->post('event_date'),
                'event_description' => $this->input->post('event_description'),
                'event_image'       =>  $event_image
            );	

		    $query = $this->db->insert('event_master', $data);

            if(!empty($query)){
                return array(
                            'status'  => 1, 
                            'message' => 'Event added success'
                        );
            }else{
                return array(
                            'status'  => 0, 
                            'message' => 'Somethig went to wrong'
                        );
            }
        }

        public function view_event($postData = null) {

            $response = array();
    
            ## Read value
            $draw            = $postData['draw'];
            $start           = $postData['start'];
            $rowperpage      = $postData['length']; // Rows display per page
            $columnIndex     = $postData['order'][0]['column']; // Column index
            $columnName      = $postData['columns'][$columnIndex]['data']; // Column name
            $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
            $searchValue     = $postData['search']['value']; // Search value
    
            ## Search
            $searchQuery = "";
            if ($searchValue != '') {
                $searchQuery = " (id like '%" . $searchValue . "%' or
                event_name like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $records = $this->db->get('event_master')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('event_master')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('event_master');
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                $event_image  =  base_url()."assets/img/event_image/$record->event_image";
                $date  = $record->event_date;
                $data[] = array(
                    "id"                 => $sr,
                    "event_title"        => $record->event_title,
                    "event_date"         => date("j-m-Y", strtotime($date)),
                    "event_description"  => $record->event_description,
                    "event_image"        => '<img src="'. $event_image.'" height="150px">',
                    "action"             => '<button type="button" class="btn btn-danger  btn-sm delete_event" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                            <button type="button" class="btn btn-info  btn-sm update_event" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
                );
                
                $sr++; 
            }
    
            ## Response
            $response = array(
                "draw"                 => intval($draw),
                "iTotalRecords"        => $totalRecords,
                "iTotalDisplayRecords" => $totalRecordwithFilter,
                "aaData"               => $data,
            );
    
            return $response;
        }
        public function delete_event(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('event_master');
            // echo $this->db->last_query();
    
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Cateogry delted success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
        public function fetch_event(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('event_master');
            $result = $query->row_array();
            return $result;
        }

        public function update_event(){
            $id = $this->input->post('edit_event_id');

            $event_title       = $this->input->post('edit_event_title');
            $event_date        = $this->input->post('edit_event_date');
            $event_description = $this->input->post('edit_event_description');
            // $image_name     = $this->input->post('image_name');

  
            if($_FILES['edit_event_image']['name'] !="") {
                $m = $_FILES['edit_event_image']['name'];      
                if ($m !== ""){
                    $config['upload_path'] = 'assets/img/event_image/';                        
                    // $config['log_threshold'] = 1;
                    $config['allowed_types'] = 'jpg|png|jpeg|gif';
                    // $config['file_name']= uniqid();          
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('edit_event_image');
                    $upload_data = $this->upload->data();
                    $event_image  = $upload_data['file_name'];
                }  
            }  else {
                $event_image = $this->input->post('event_image_name');
            }
            $this->db->set('event_title' , $event_title);
            $this->db->set('event_date' , $event_date);
            $this->db->set('event_description', $event_description);
            $this->db->set('event_image' , $event_image);


            $this->db->where('id', $id);
		    $query = $this->db->update('event_master');
            // echo $this->db->last_query(); die;
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Event Updated success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
           
        }
        public function event_view(){
            $query = $this->db->get('event_master');
            return $query->result();
        }
    }
?>    