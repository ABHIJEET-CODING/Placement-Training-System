<?php
    class Manageinterview_Model extends CI_model {
    
      
        public function view_manageinterview($postData = null) {

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
                comments like '%" . $searchValue . "%' or
                status like '%" . $searchValue . "%') ";
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
           // $this->db->where('user_id', $_SESSION['id']);
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {

                 if($record->status == 'Yes'){
                    $status = 'Yes';
                }else{
                    $status = 'No';
                }

                $this->db->select('*');
                $this->db->where('id',$record->user_id);
                 $user = $this->db->get('student')->row_array();
                 $username = $user['name'];


                $data[] = array(
                    "id"             => $sr,
                    "company_name"  => $record->company_name,
                     "date"  => $record->date,
                     "user_id"  => $username,
                      "status"  => $status,
                    "action"         => '<button type="button" class="btn btn-danger  btn-sm delete_manageinterview" data-id='.$record->id.'>Delete</button>&nbsp;&nbsp;
                                         <button type="button" class="btn btn-info  btn-sm update_manageinterview" data-id='.$record->id.'>Approve/Disapprove</button>'
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
        public function delete_manageinterview(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('interview_master');
            
    
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
        public function fetch_manageinterview(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('interview_master');
            $result = $query->row_array();
            return $result;
        }
        public function update_manageinterview(){
			
            $id = $this->input->post('interview_id');
             
             $this->db->set('company_name', $this->input->post('edit_company_name'));
             $this->db->set('date', $this->input->post('edit_date'));
			$this->db->set('comment', $this->input->post('edit_user_interview'));
            $this->db->set('status', $this->input->post('status'));
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

      
    
    }
?>


   