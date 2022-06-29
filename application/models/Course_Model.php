<?php
    class Course_Model extends CI_model {
    
        public function add_course_category(){
            $m = $_FILES['category_image']['name'];      
            if ($m !== ""){
                $config['upload_path'] = 'assets/img/category_image/';                        
                // $config['log_threshold'] = 1;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                // $config['file_name']= uniqid();          
                $this->load->library('upload', $config);
                $this->upload->do_upload('category_image');
                $upload_data    = $this->upload->data();
                $category_image = $upload_data['file_name'];
            }   
       
            $data = array(
                'category_name'   => $this->input->post('category_title'),
                'category_image'  =>  $category_image
            );	

		    $query = $this->db->insert('category_master', $data);

            if(!empty($query)){
                return array(
                            'status'  => 1, 
                            'message' => 'Category added success'
                        );
            }else{
                return array(
                            'status'  => 0, 
                            'message' => 'Somethig went to wrong'
                        );
            }
        }

        public function get_category_data($postData = null) {

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
                category_name like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $records = $this->db->get('category_master')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('category_master')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('category_master');
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                $category_image  =  base_url()."assets/img/category_image/$record->category_image";
                $data[] = array(
                    "id"             => $sr,
                    "category_name"  => $record->category_name,
                    "category_image" => '<img src="'. $category_image.'" height="150px">',
                    "action"         => '<button type="button" class="btn btn-danger  btn-sm delete_category" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                        <button type="button" class="btn btn-info  btn-sm update_category" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
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

         public function get_student_data($postData = null) {

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
                $searchQuery = " (name like '%" . $searchValue . "%' or
                enrollment_no like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $records = $this->db->get('student')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('student')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('student');
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                
                $data[] = array(
                    "id"             => $sr,
                    "enrollment_no"  => $record->enrollment_no,
                    "name"  => $record->name,
                   "department"  => $record->department,
                   "semester"  => $record->semester,
                   "email"  => $record->email,
                   "contact_no"  => $record->contact_no,
                   "date_of_birth"  => $record->date_of_birth,
                   "passing_year"  => $record->passing_year
               );
                
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
        public function delete_category(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('category_master');
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
        public function fetch_category(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('category_master');
            $result = $query->row_array();
            return $result;
        }

        public function update_category(){
            $id = $this->input->post('category_id');

            $category_title = $this->input->post('edit_category_title');
            // $image_name     = $this->input->post('image_name');

  
            if($_FILES['edit_category_image']['name'] !="") {
                $m = $_FILES['edit_category_image']['name'];      
                if ($m !== ""){
                    $config['upload_path'] = 'assets/img/category_image/';                        
                    // $config['log_threshold'] = 1;
                    $config['allowed_types'] = 'jpg|png|jpeg|gif';
                    // $config['file_name']= uniqid();          
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('edit_category_image');
                    $upload_data    = $this->upload->data();
                    $image_name = $upload_data['file_name'];
                }  
            }  else {
                $image_name = $this->input->post('image_name');
            }
            $this->db->set('category_name ' , $category_title);
            $this->db->set('category_image' , $image_name);


            $this->db->where('id', $id);
		    $query = $this->db->update('category_master');
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Cateogry Updated success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
        // Course
        public function get_category(){
            $this->db->select('id, category_name');
            $this->db->from('category_master');
            $query = $this->db->get();
            $result = $query->result();
            return $result;
        }
        // Add Course
        public function add_course(){
            $m = $_FILES['course_image']['name'];      
            if ($m !== ""){
                $config['upload_path'] = 'assets/img/course_image/';                        
                // $config['log_threshold'] = 1;
                $config['allowed_types'] = 'jpg|png|jpeg|gif';
                // $config['file_name']= uniqid();          
                $this->load->library('upload', $config);
                $this->upload->do_upload('course_image');
                $upload_data    = $this->upload->data();
                $course_image = $upload_data['file_name'];
            }   
       
            $data = array(
                'category_id'        => $this->input->post('course_category'),
                'course_title'       => $this->input->post('course_title'),
                'course_image'       => $course_image,
                'course_description' => $this->input->post('course_description'),
                'course_duration'    => $this->input->post('course_duration'),
            );	

		    $query = $this->db->insert('course_master', $data);

            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Course added success'
                );
            }else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
        // View course data
        public function view_course($postData = null) {

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
                course_title like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $records = $this->db->get('course_master')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('course_master')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('course_master.*, course_master.id, category_name');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('course_master');
            $this->db->join('category_master', 'course_master.category_id  = category_master.id');
            $query = $this->db->get();
            // echo $this->db->last_query();
            // die;
            $result =  $query->result();

            // echo '<pre>';
            // print_r($result);
            // die;

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                $course_image  =  base_url()."assets/img/course_image/$record->course_image";
                $data[] = array(
                    "id"                  => $sr,
                    "category_name"       => $record->category_name,
                    "course_title"        => $record->course_title,
                    "course_description"  => $record->course_description,
                    "course_duration"     => $record->course_duration,
                    "course_image"        => '<img src="'. $course_image.'" height="150px">',
                
                    "action"              => '<button type="button" class="btn btn-danger  btn-sm delete_course" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                              <button type="button" class="btn btn-info  btn-sm update_course" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
                   
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
        public function delete_course(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('course_master');
            echo $this->db->last_query(); die;
    
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Course deleted success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
        public function fetch_course(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('course_master');
            $result = $query->row_array();
            return $result;
        }
        public function update_course(){
            $id = $this->input->post('course_id');

            $course_category    = $this->input->post('edit_course_category');
            $course_title       = $this->input->post('edit_course_title');
            $course_description = $this->input->post('edit_course_description');
            $course_duration    = $this->input->post('edit_course_duration');
            // $image_name     = $this->input->post('image_name');

  
            if($_FILES['edit_course_image']['name'] !="") {
                $m = $_FILES['edit_course_image']['name'];      
                if ($m !== ""){
                    $config['upload_path'] = 'assets/img/course_image/';                        
                    // $config['log_threshold'] = 1;
                    $config['allowed_types'] = 'jpg|png|jpeg|gif';
                    // $config['file_name']= uniqid();          
                    $this->load->library('upload', $config);
                    $this->upload->do_upload('edit_course_image');
                    $upload_data    = $this->upload->data();
                    $image_name = $upload_data['file_name'];
                }  
            }  else {
                $image_name = $this->input->post('course_image_name');
            }
            $this->db->set('category_id ' , $course_category);
            $this->db->set('course_title' , $course_title);
            $this->db->set('course_image' , $image_name);
            $this->db->set('course_description' , $course_description);
            $this->db->set('course_duration' , $course_duration);
            
            $this->db->where('id', $id);
		    $query = $this->db->update('course_master');
           
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Course Updated success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
    }
?>    