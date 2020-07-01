<?php
class Welcome_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

     public function insert_data($data,$table_name)
     {
        $this->db->insert($table_name, $data); 
        return TRUE;
    }
 
    public function view_data($table_name)
    { 
        $this->db->select('*');
        $this->db->from($table_name);
        $query = $this->db->get();
        return $query->result_array();
    }  

    public function edit_data($id,$table_name) 
    {
        return $this->db->get_where($table_name, array('id' => $id))
                        ->result_array();     
    } 

    public function update_data($id,$table_name,$data) 
    {
        $this->db->where('id', $id);
	    return $this->db->update($table_name, $data); 
    } 

    public function delete_data($id,$table_name) 
    {
     	$this->db->where('id', $id);
	    return $this->db->delete($table_name);
	}

    public function get_data()
    {
    	 $this->db->select('state.name as name, cities.name as city_name,cities.id')
				  ->from('state')
				  ->join('cities','state.id = cities.state_id','left');
		$query = $this->db->get();
        return $query->result_array();
    }
}

?>
