<?php 

class User extends CI_Model{


	public function insert_data($data){
		$this->db->insert('user',$data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
	public function all_users(){
		$this->db->select('user.name,user.email,departments.title as dtitle,designations.title as desiTitle');
		$this->db->from('user');
		$this->db->join('departments','user.department_id = departments.id','left');
		$this->db->join('designations','user.designation_id = designations.id','left');
		$this->db->where('user.is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function get_by_email($email){
		$this->db->select("*");
		$this->db->from('user');
		$this->db->where('email',$email);
		$this->db->where('is_active',1);
		$query = $this->db->get();
		return $query->result_array();
	}
}

?>