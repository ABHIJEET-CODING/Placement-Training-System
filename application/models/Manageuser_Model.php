<?php
    class Manageuser_Model extends CI_model {
    
      
        public function view_manageuser($postData = null) {

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
                department like '%" . $searchValue . "%' or
                email like '%" . $searchValue . "%' or
                contact_no like '%" . $searchValue . "%') ";
            }
    
            ## Total number of records without filtering
            $this->db->select('count(*) as allcount');
            $records = $this->db->get('tpo')->result();
            $totalRecords = $records[0]->allcount;
    
            ## Total number of record with filtering
            $this->db->select('count(*) as allcount');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
    
            $records = $this->db->get('tpo')->result();
            $totalRecordwithFilter = $records[0]->allcount;
    
            ## Fetch records
            $this->db->select('*');
            if ($searchQuery != '') {
                $this->db->where($searchQuery);
            }
            $this->db->order_by($columnName, $columnSortOrder);
            $this->db->limit($rowperpage, $start);
            $this->db->from('tpo');
           // $this->db->where('user_id', $_SESSION['id']);
            $query = $this->db->get();
            $result =  $query->result();

            $data = array();
            $sr = 1;
            foreach ($result as $record) {


                $data[] = array(
                    "id"             => $sr,
                    "name"  => $record->name,
                     "department"  => $record->department,
                     "email"  => $record->email,
                     "password" => $record->password,
                      "contact_no"  => $record->contact_no,
                    "action"         => '<button type="button" class="btn btn-danger  btn-sm delete_manageuser" data-id='.$record->id.'><i class="fa fa-trash" aria-hidden="true"></i></button>&nbsp;&nbsp;
                                         <button type="button" class="btn btn-info  btn-sm update_manageuser" data-id='.$record->id.'><i class=" fa fa-edit" aria-hidden="true"></button>'
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
        public function delete_manageuser(){
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $query = $this->db->delete('tpo');
            
    
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
        public function fetch_manageuser(){
            $id = $this->input->post('id');

            $this->db->where('id', $id);
            $query = $this->db->get('tpo');
            $result = $query->row_array();
            return $result;
        }
        public function update_manageuser(){
			
            $id = $this->input->post('user_id');
             
             $this->db->set('name', $this->input->post('edit_user_name'));
             $this->db->set('department', $this->input->post('department'));
			$this->db->set('email', $this->input->post('email'));
            $this->db->set('contact_no', $this->input->post('contact'));
            $this->db->set('password', $this->input->post('password'));
			$this->db->where('id', $id);
			$query = $this->db->update('tpo');

            if(!empty($query)){
                return array(
                    'status' => 1, 
                    'message' => 'Tpo Updated success'
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


   