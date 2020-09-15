<?php 

class Department extends CI_Model{


	public function get_all(){
		$this->db->select('*');
		$this->db->from('departments');
		$this->db->where('is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>