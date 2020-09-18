<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BillController extends My_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('designation');
        $this->load->model('department');
        $this->load->model('common');
        $this->load->model('bill');
    }
     

	public function index(){
		$this->data = array();
		$this->page = 'bill/index';
		$this->session->set_flashdata('msg_success','');
		$this->session->set_flashdata('msg_error','');
		$this->data['bills'] = $this->bill->get_all_bill($this->session->userdata('user_id'));
		$this->layout();
	}

	public function create(){
		$this->data = array();
		$this->page = 'bill/create';

		$this->data['departments'] = $this->common->common_query('*','departments',array('is_active'=>1));
		$this->data['sessions'] = $this->common->common_query('*','academic_sessions',array('is_active'=>1));
		$this->data['semesters'] = $this->common->common_query('*','semesters',array('is_active'=>1));
		$this->data['bills_type'] = $this->common->common_query('*','bill_heads',array('is_active'=>1));
		$this->data['instituitions'] = $this->common->common_query('*','instituitions',array('is_active'=>1));
		$this->layout();
	}

	public function store(){
		if($_POST){
			$userData = $this->session->userdata('userInfo');
			$data = array(
				'user_id'=>$userData[0]['id'],
				'bill_heads_id'=>$this->input->post('bills_type'),
				'department_id'=>$this->input->post('departments'),
				'session_id'=>$this->input->post('sessions'),
				'semester_id'=>$this->input->post('semesters'),
				'no_of_students'=>$this->input->post('no_of_students'),
				'date'=>date("Y-m-d", strtotime($this->input->post('date'))),
				'comments'=>$this->input->post('comments'),
				'course_id'=>$this->input->post('courses'),
				'instituition_id'=>$this->input->post('colleges'),
				'created_by'=>$userData[0]['id'],
				'created_at'=>date('Y-m-d')
			);
			$billId = $this->common->insert_data('bills',$data);
			if($billId){
				$this->session->set_flashdata('msg_success','Bill is added successfully');
				redirect(base_url().'bills','refresh');
			}else{
				$this->session->set_flashdata('msg_error','Something is wrong! Please try again.');
				redirect(base_url().'bills','refresh');
			}
		}
	}

	public function edit($id = null){
		
		$this->data = array();
		$this->page = 'bill/edit';
		$this->data['departments'] = $this->common->common_query('*','departments',array('is_active'=>1));
		$this->data['sessions'] = $this->common->common_query('*','academic_sessions',array('is_active'=>1));
		$this->data['semesters'] = $this->common->common_query('*','semesters',array('is_active'=>1));
		$this->data['bills_type'] = $this->common->common_query('*','bill_heads',array('is_active'=>1));
		$this->data['instituitions'] = $this->common->common_query('*','instituitions',array('is_active'=>1));
		$billInfo = $this->common->common_query('*','bills',array('id'=>$id));
		$this->data['bill_info'] = $billInfo;
		$courses = '';
		if($billInfo){
			$courses = $this->common->common_query('*','courses',array('department_id'=>$billInfo[0]['department_id'],'session_id'=>$billInfo[0]['session_id'],'semester_id'=>$billInfo[0]['semester_id']));
		}
		$this->data['courses'] = $courses;
		if($_POST){
			$id = $this->input->post('bill_id');
			$data = array(
				'user_id'=>$this->session->userdata('user_id'),
				'bill_heads_id'=>$this->input->post('bills_type'),
				'department_id'=>$this->input->post('departments'),
				'session_id'=>$this->input->post('sessions'),
				'semester_id'=>$this->input->post('semesters'),
				'no_of_students'=>$this->input->post('no_of_students'),
				'date'=>date("Y-m-d", strtotime($this->input->post('date'))),
				'comments'=>$this->input->post('comments'),
				'instituition_id'=>$this->input->post('colleges'),
				'course_id'=>$this->input->post('courses'),
				'modified_by'=>$this->session->userdata('user_id'),
				'modified_at'=>date('Y-m-d')
			);

			if($this->common->update_by_id('bills',$id,$data)){
				$this->session->set_flashdata('msg_success_update','Bill is updated successfully');
				redirect(base_url().'bills','refresh');
			}else{
				$this->session->set_flashdata('msg_error_update','Something is wrong! Please try again.');
				redirect(base_url().'bills','refresh');
			}
		}
		$this->layout();
	}

	public function courses(){
		$department = $this->input->post('department');
		$session = $this->input->post('session');
		$semester = $this->input->post('semester');
		$data['courses'] = $this->common->common_query('*','courses',array('department_id'=>$department,'session_id'=>$session,'semester_id'=>$semester));
		$this->load->view('bill/courses',$data);

	}

	public function bill_details(){
		$billId = $this->input->post('billId');
		$data['billInfo'] = $this->bill->get_bill_by_id($billId);

		$this->load->view('bill/bill_details',$data);
	}

	public function bill_paid(){
		$billId = $this->input->post('billId');
		$paidAmount = $this->input->post('paidAmount');
		
		$this->common->update_by_id('bills',$billId,array('status'=>1,'paid_amount'=>$paidAmount));
		$data['billInfo'] = $this->bill->get_bill_by_id($billId);
		$this->load->view('bill/bill_details',$data);
	}


}
