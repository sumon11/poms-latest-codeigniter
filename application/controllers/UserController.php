<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends My_Controller {
	public function __construct() {
        parent::__construct();
        // load form_validation library
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('designation');
        $this->load->model('department');

    }
     

	public function index(){
		$this->data = array();
		$this->page = 'user/index';
		$this->data['users'] = $this->user->all_users();
		$this->layout();
	}

	public function user_profile(){
		$this->data = array();
		$this->data['userdata'] = $this->session->userdata('userInfo');
		$this->page = 'user/profile';
		$this->layout();
	}
	public function create(){

		$this->data = array();
		$this->page = "user/create";
		$this->data['departments'] = $this->department->get_all();
		$this->data['designations'] = $this->designation->get_all();

		$this->layout();
	}

	public function store(){
		$this->data = array();
		$this->page = 'user/create';
		$this->data['departments'] = $this->department->get_all();
		$this->data['designations'] = $this->designation->get_all();
		if($_POST){
			$this->form_validation->set_rules('name','Name','required');
			$this->form_validation->set_rules('designation','Designation','required');
			$this->form_validation->set_rules('department','Department','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('contact_no','Contact No','required');
			$config['upload_path']          = './resources/images/user';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
			if ($this->form_validation->run() == FALSE ||!$this->upload->do_upload('image')){
				$this->data['image_error'] = $this->upload->display_errors();
				$this->data['departments'] = $this->department->get_all();
				$this->data['designations'] = $this->designation->get_all();
				$this->page = 'user/create';
				$this->layout();
        	}else{
        		$uploadData = $this->upload->data();
        		$formData = array(
        			'name'=>$this->input->post('name'),
        			'designation_id'=>$this->input->post('designation'),
        			'department_id'=>$this->input->post('department'),
        			'email'=>$this->input->post('email'),
        			'contact_no'=>$this->input->post('contact_no'),
        			'photograph'=>$this->input->post('name').'-'.$uploadData['file_name'],
        			'address'=>$this->input->post('address'),
        		);
        		if($this->user->insert_data($formData)){
        			$this->session->set_flashdata('success','User is saved successfully');
        			redirect(base_url().'UserController/index');
        		}
        	}
		}
		$this->layout();
	
	}
}
