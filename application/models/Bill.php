<?php 

class Bill extends CI_Model{

	public function get_all_bill($userId){
		$this->db->select('bill_heads.title as bTitle,departments.title as dTitle,semesters.title as sTitle, academic_sessions.title as seTitle,bills.date,bills.status,bills.id');
		$this->db->from('bills');
		$this->db->join('bill_heads','bills.bill_heads_id = bill_heads.id','left');
		$this->db->join('departments','bills.department_id = departments.id','left');
		$this->db->join('semesters','bills.semester_id = semesters.id','left');
		$this->db->join('academic_sessions','bills.session_id = academic_sessions.id','left');
		$this->db->where('bills.user_id',$userId);
		$this->db->where('bills.is_active',1);
		$this->db->order_by('bills.id','desc');
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>