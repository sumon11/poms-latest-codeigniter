<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NoticeController extends My_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('user');
        $this->load->model('designation');
        $this->load->model('department');
        $this->load->model('noticecategory');
        $this->load->model('notice');
        $this->load->helper('download');

    }
     

	public function index(){
		$this->data = array();
		$this->page = 'notice/index';
		$this->data['allNotices'] = $this->notice->get_all();
		$this->layout();
	}

	public function create(){
		$this->data = array();
		$this->page = 'notice/create';
		$this->data['noticeCategories'] = $this->noticecategory->get_all();
		$this->layout();
	}

	public function store(){
		$this->data = array();
		$this->page = 'notice/create';
		$this->data['noticeCategories'] = $this->noticecategory->get_all();
		if($_POST){
			$this->form_validation->set_rules('notice_category','Category','required');
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('notice_date','Date','required');
			$newName = time().$_FILES["image"]['name'];
			$config['file_name'] = $newName;
			$config['upload_path']          = './resources/images/notices';
            $config['allowed_types']        = 'gif|jpg|png|pdf|word';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
            $this->load->library('upload', $config);
			if ($this->form_validation->run() == FALSE ||!$this->upload->do_upload('image')){
				$this->data['image_error'] = $this->upload->display_errors();
				$this->data['noticeCategories'] = $this->noticecategory->get_all();
				$this->page = 'notice/create';
				$this->layout();
        	}else{

        		$uploadData = $this->upload->data();
        		$noticeDate = date("Y-m-d", strtotime($this->input->post('notice_date')));
        		$formData = array(
        			'notice_category_id'=>$this->input->post('notice_category'),
        			'title'=>$this->input->post('title'),
        			'hints'=>$this->input->post('hints'),
        			'notice_date'=>$noticeDate,
        			'image'=>$newName,
        			'comments'=>$this->input->post('comments'),
        		);
        		if($this->notice->insert_data($formData)){
        			$this->session->set_flashdata('success','Notice is saved successfully');
        			redirect(base_url().'NoticeController/index');
        		}
        	}
		}
		$this->layout();
	}

	public function edit($id){
		$this->data = array();
		$this->page = 'notice/edit';
		$this->data['noticeCategories'] = $this->noticecategory->get_all();
		$this->data['notice'] = $this->notice->get_by_id($id);
		$this->layout();
	}

	public function update(){
		if($_POST){

			$noticeId = $this->input->post('id');
			$this->form_validation->set_rules('notice_category','Category','required');
			$this->form_validation->set_rules('title','Title','required');
			$this->form_validation->set_rules('notice_date','Date','required');
			$imageName = '';
			
			if(!$_FILES["image"]['name']){
				$imageName = $this->input->post('hidden_image_name');
				$noticeDate = date("Y-m-d", strtotime($this->input->post('notice_date')));
				$formData = array(
		        			'notice_category_id'=>$this->input->post('notice_category'),
		        			'title'=>$this->input->post('title'),
		        			'hints'=>$this->input->post('hints'),
		        			'notice_date'=>$noticeDate,
		        			'image'=>$imageName,
		        			'comments'=>$this->input->post('comments'),
		        		);
				$this->notice->update_by_id($noticeId,$formData);
		        			$this->session->set_flashdata('success','Notice is updated successfully');
        					redirect(base_url().'NoticeController/index');
		        
			}else{
				$path = FCPATH  . "./resources/images/notices/".$this->input->post('hidden_image_name');

				if($path){unlink($path);}
					
					//unlink('./resources/images/notices/'.$this->input->post('hidden_image_name'));
					$imageName = time().$_FILES["image"]['name'];
					$config['file_name'] = $imageName;
					$config['upload_path']          = './resources/images/notices';
		            $config['allowed_types']        = 'gif|jpg|png|pdf|word';
		            $config['max_size']             = 100;
		            $config['max_width']            = 1024;
		            $config['max_height']           = 768;
		            $this->load->library('upload', $config);
		            if ($this->form_validation->run() == FALSE ||!$this->upload->do_upload('image')){
						$this->data['image_error'] = $this->upload->display_errors();
						$this->data['noticeCategories'] = $this->noticecategory->get_all();
						$this->page = 'notice/create';
						$this->layout();
        			}else{
        				$uploadData = $this->upload->data();
		        		$noticeDate = date("Y-m-d", strtotime($this->input->post('notice_date')));
		        		$formData = array(
		        			'notice_category_id'=>$this->input->post('notice_category'),
		        			'title'=>$this->input->post('title'),
		        			'hints'=>$this->input->post('hints'),
		        			'notice_date'=>$noticeDate,
		        			'image'=>$imageName,
		        			'comments'=>$this->input->post('comments'),
		        		);
		        		
		        		$this->notice->update_by_id($noticeId,$formData);
		        			$this->session->set_flashdata('success','Notice is updated successfully');
        					redirect(base_url().'NoticeController/index');
		        		
        			}
				}
			}
	}

	public function view($id){
		$this->data = array();
		$this->page = 'notice/view';
		$this->data['notice'] = $this->notice->get_by_id($id);
		$this->layout();
	}

	public function delete($id){
		$this->notice->delete_notice($id);
	}

	  public function download($fileName = NULL) {   
	   if ($fileName) {
	    $file = realpath ( "resources/images/notices" ) . "\\" . $fileName;
	    // check file exists    
	    if (file_exists ( $file )) {
	     // get file content
	     $data = file_get_contents ( $file );
	     //force download
	     force_download ( $fileName, $data );
	    } else {
	     // Redirect to base url
	     redirect ( base_url () );
	    }
	   }
	  }
}
