<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeController extends My_Controller {
	public function __construct() {
        parent::__construct();
        
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('designation');
        $this->load->model('department');
        $this->load->model('common');
    }
     

	public function index(){
		$data['msg'] = '';
		$this->load->view("sign_in",$data);
	}

	public function register(){
		$data['departments'] = $this->department->get_all();
		$this->load->view("register",$data);
	}

	public function submit_registration(){
		$data = array(
			'name'=>$this->input->post('name'),
			'department_id'=>$this->input->post('department'),
			'user_type'=>$this->input->post('userType'),
			'email'=>$this->input->post('email'),
			'password'=>md5($this->input->post('password'))
		);

		$checkDuplicate = $this->user->get_by_email($this->input->post('email'));
		if($checkDuplicate){
			echo "2";
		}else{
			$id = $this->user->insert_data($data);
			if($id){
				echo "1";
				
			}else{
				echo "0";
			}
		}
		
	}

	public function confirm_registration($message){
		if($message == '1'){
			$data['success'] = 1;
			$this->load->view('confirm_registration',$data);
		}else{
			$data['success'] = 0;
			$this->load->view('confirm_registration',$data);
		}
	}

	public function log_in(){
		if($_POST){
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$checkInfo = $this->common->common_query('*','user',array('email'=>$email,'password'=>$password));
			if($checkInfo){
				$this->session->set_userdata('userInfo',$checkInfo);
				$this->session->set_userdata('user_id',$checkInfo[0]['id']);
				$this->session->set_userdata('user_type',$checkInfo[0]['user_type']);
				redirect(base_url().'dashboard', 'refresh');
			
			}else{
				$data['msg'] = "Your username or password is incorrect!.";
				$this->load->view('sign_in',$data);
			}
		}else{
			$data['msg'] = "";
			$this->load->view('sign_in',$data);
		}
		
	}
	public function log_out(){
		$this->session->sess_destroy();
		redirect(base_url().'sign_in', 'refresh');
	}
	public function dashboard(){
		if(!$this->session->userdata('userInfo')){
            redirect(base_url().'sign_in','refresh');
        }
		$this->data = array();
		$userData = $this->session->userdata('userInfo');
		if($userData[0]['user_type'] == 'student'){
			$this->data['userdata'] = $userData;
			$this->page = 'user/others_dashboard';
		}else{
			$this->page = 'user/others_dashboard';
		}
		
		//$this->data['allNotices'] = $this->notice->get_all();
		$this->layout();
	}
	
}
