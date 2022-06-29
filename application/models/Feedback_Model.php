<?php
    class Feedback_Model extends CI_model {
    
        public function add_feedback(){
            $user_id = $_SESSION['id'];

            $data = array(
                'user_id'       => $user_id,
                'user_feedback' => $this->input->post('user_feedback'),
            );	

		    $query = $this->db->insert('feedback_master', $data );

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
        public function view_feedback($postData = null) {

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
            $records = $this->db->get('feedback_master')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('feedback_master')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('feedback_master');
            $this->db->where('user_id', $_SESSION['id']);
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {
                $data[] = array(
                    "id"             => $sr,
                    "user_feedback"  => $record->user_feedback,
                    "action"         => '<button type="button" class="btn btn-danger  btn-sm delete_feedback" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                         <button type="button" class="btn btn-info  btn-sm update_feedback" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
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
        public function delete_feedback(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('feedback_master');
            // echo $this->db->last_query();
    
            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Feedback deleted success'
                );
            } else{
                return array(
                    'status'=> 0, 
                    'message' => 'Somethig went to wrong'
                );
            }
        }
        // Update data
        public function fetch_feedback(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('feedback_master');
            $result = $query->row_array();
            return $result;
        }
        public function update_feedback(){
			// echo "<pre>";
			// print_r($_POST);
			// die;
            $id = $this->input->post('feedback_id');

			$this->db->set('user_feedback', $this->input->post('edit_user_feedback'));
			$this->db->where('id', $id);
			$query = $this->db->update('feedback_master');

            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Feedback Updated success'
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
        public function show_feedback(){
            // $query = $this->db->get('feedback_master');
			// return $query->result();

            $this->db->select('fm.*, student.id, student.name');
            $this->db->from('feedback_master fm');
            $this->db->join('student', 'fm.user_id = student.id');
            $query = $this->db->get();
            // echo $this->db->last_query();
            $result = $query->result();
            return $result;
        }
    
    }
?>


   