<?php 

class Bill extends CI_Model{

	public function get_all_bill($userId,$status = null){
		$this->db->select('instituitions.short_title as iTitle,courses.title as cTitle,bill_heads.title as bTitle,departments.title as dTitle,semesters.title as sTitle, academic_sessions.title as seTitle,bills.date,bills.status,bills.id,bills.paid_amount');
		$this->db->from('bills');
		$this->db->join('bill_heads','bills.bill_heads_id = bill_heads.id','left');
		$this->db->join('departments','bills.department_id = departments.id','left');
		$this->db->join('semesters','bills.semester_id = semesters.id','left');
		$this->db->join('academic_sessions','bills.session_id = academic_sessions.id','left');
		$this->db->join('courses','bills.course_id = courses.id','left');
		$this->db->join('instituitions','bills.instituition_id = instituitions.id','left');
		$this->db->where('bills.user_id',$userId);
		if($status){
			$this->db->where('bills.status',$status);
		}
		if($status ==0){
			$this->db->where('bills.status',$status);
		}
		$this->db->where('bills.is_active',1);
		$this->db->order_by('bills.id','desc');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_bill_by_id($billId){
		$this->db->select('instituitions.title as collegeName,instituitions.short_title as iTitle,courses.title as cTitle, courses.code as cCode,bill_heads.title as bTitle,departments.title as dTitle,semesters.title as sTitle, academic_sessions.title as seTitle,bills.date,bills.status,bills.id,bills.no_of_students,bills.comments,bills.paid_amount');
		$this->db->from('bills');
		$this->db->join('bill_heads','bills.bill_heads_id = bill_heads.id','left');
		$this->db->join('departments','bills.department_id = departments.id','left');
		$this->db->join('semesters','bills.semester_id = semesters.id','left');
		$this->db->join('academic_sessions','bills.session_id = academic_sessions.id','left');
		$this->db->join('courses','bills.course_id = courses.id','left');
		$this->db->join('instituitions','bills.instituition_id = instituitions.id','left');
		$this->db->where('bills.id',$billId);
		$this->db->where('bills.is_active',1);
		$query = $this->db->get();
		
		return $query->result_array();
	}
}

?>