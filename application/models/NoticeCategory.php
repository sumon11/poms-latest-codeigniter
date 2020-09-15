<?php 

class NoticeCategory extends CI_Model{


	public function get_all(){
		$this->db->select('*');
		$this->db->from('notice_categories');
		$this->db->where('is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}
	
}

?>