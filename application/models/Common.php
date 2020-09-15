<?php 

class Common extends CI_Model{

	public function common_query($select,$from,$where){
		$this->db->select($select);
		$this->db->from($from);
		$this->db->where($where);
		$this->db->where('is_active',1);
		$query = $this->db->get();
		//echo $this->db->last_query();
		return $query->result_array();
	}

	public function insert_data($table,$data){
		$this->db->insert($table,$data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	public function update_by_id($table,$id,$data){
		$this->db->where('id', $id);
		$update_id = $this->db->update($table,$data);
		if($update_id){
			return true;
		}else{
			return false;
		}
	}
}

?>