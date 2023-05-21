<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addenglish extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('auth_model');

    }
    // ----------------- ulpload codes --------------//
	public function uploadForm(){
		$data['result'] = $this->auth_model->getUploadfiles();
		$this->load->view('Auth/upload',$data);
	}

	public function uploadProcess(){
		
		if (isset($_FILES['files'])){

			$name = $_FILES['files']['name'];
			$type = explode('.',$name);
			$type = end($type);
			$size = $_FILES['files']['size'];
			$random_name = rand();
			$tmp = $_FILES['files']['tmp_name'];
			$destination = $random_name.'.'.$type;
			move_uploaded_file($tmp, "uploaded_files/".$destination);

			if($this->session->userdata('connect') == true ){
				$sess = $this->session->userdata('username');
			}
			$data = array(
				"uploader_name" => $sess,
				"uploaded_file" => $destination
			);
			$this->auth_model->insertUpload($data);
			redirect($_SERVER['HTTP_REFERER']);

		}
		redirect($_SERVER['HTTP_REFERER']);

	}
	
}