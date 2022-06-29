<?php
    class Interview_Model extends CI_model {
    
        public function add_interview(){
            $user_id = $_SESSION['id'];

            $data = array(
                'user_id'       => $user_id,
                'company_name' => $this->input->post('company_name'),
                'date' => $this->input->post('date'),
                'comment' => $this->input->post('user_interview'),
            );	

		    $query = $this->db->insert('interview_master', $data );

            if(!empty($query)){
                return array(
                            'status'  => 1, 
                            'message' => 'Feedback send success'
                        );
            }else{
                return array(
                            'status'  => 0, 
                            'message' => 'Somethig went to wrong'
                        );
            }
        }
        public function view_interview($postData = null) {

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
                company_name like '%" . $searchValue . "%' or
                date like '%" . $searchValue . "%' or
                comments like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $records = $this->db->get('interview_master')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('interview_master')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('interview_master');
            $this->db->where('user_id', $_SESSION['id']);
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                $data[] = array(
                    "id"             => $sr,
                    "company_name"  => $record->company_name,
                     "date"  => $record->date,
                      "comment"  => $record->comment,
                    "action"         => '<button type="button" class="btn btn-danger  btn-sm delete_interview" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                         <button type="button" class="btn btn-info  btn-sm update_interview" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
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
        public function view_interviewdetails($postData = null) {

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
                company_name like '%" . $searchValue . "%' or
                date like '%" . $searchValue . "%' or
                comments like '%" . $searchValue . "%' or status like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $this->db->where('status','Yes');
            $this->db->where('user_id', $_SESSION['id']);
            $records = $this->db->get('interview_master')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
             $this->db->where('status','Yes');
             $this->db->where('user_id', $_SESSION['id']);
            $records = $this->db->get('interview_master')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('interview_master');
            $this->db->where('user_id', $_SESSION['id']);
            $this->db->where('status','Yes');
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                $data[] = array(
                    "id"             => $sr,
                    "company_name"  => $record->company_name,
                     "date"  => $record->date,
                      "comment"  => $record->comment,
                    "action"         => '<button type="button" class="btn btn-danger  btn-sm delete_interview" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                         <button type="button" class="btn btn-info  btn-sm update_interview" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
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
        public function delete_interview(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('interview_master');
            // echo $this->db->last_query();
    
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Interview deleted success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
        // Update data
        public function fetch_interview(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('interview_master');
            $result = $query->row_array();
            return $result;
        }
        public function update_interview(){
			
            $id = $this->input->post('interview_id');
             
             $this->db->set('company_name', $this->input->post('edit_company_name'));
             $this->db->set('date', $this->input->post('edit_date'));
			$this->db->set('comment', $this->input->post('comment'));
			$this->db->where('id', $id);
			$query = $this->db->update('interview_master');

            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Interview Updated success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
			// echo $this->db->last_query(); die;

			return $query;
		}

        // Display feedback to Admin
        public function show_interview(){
            // $query = $this->db->get('feedback_master');
			// return $query->result();
            $this->db->select('im.*, student.id, student.name');
            $this->db->where('status','Yes');
            // $this->db->where('user_id', $_SESSION['id']);
            $this->db->from('interview_master im');
            $this->db->join('student', 'im.user_id = student.id');
           
            
            $query = $this->db->get();
            // echo $this->db->last_query();
            $result = $query->result();
            return $result;
        }
    
    }
?>


   