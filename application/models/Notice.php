<?php 

class Notice extends CI_Model{


	public function insert_data($data){
		$this->db->insert('notices',$data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}

	public function get_all(){
		$this->db->select('notice_categories.title as noticeCategoryTitle,notices.*');
		$this->db->from('notices');
		$this->db->join('notice_categories','notices.notice_category_id = notice_categories.id','left');
		$this->db->where('notices.is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_by_id($id){
		$this->db->select('notice_categories.title as noticeCategoryTitle,notices.*');
		$this->db->from('notices');
		$this->db->join('notice_categories','notices.notice_category_id = notice_categories.id','left');
		$this->db->where('notices.id',$id);
		$this->db->where('notices.is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function update_by_id($id,$data){
		$this->db->where('id', $id);
		$this->db->update('notices', $data);
	}

	public function delete_notice($id){
		$this->db->where('id', $id);
    	$this->db->delete('notices');
	}

}

?>








