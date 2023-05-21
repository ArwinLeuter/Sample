<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addmath extends CI_Controller {

    public function index(){
        $data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromMath(), 
        );
         $this->load->view('addMath', $data);
    }
    
    public function insertMath(){

        $title = $this->input->post('title');
        $authors = $this->input->post('authors');
        $date = $this->input->post('date');
        
        if (isset($_FILES['files'])){

            $name = $_FILES['files']['name'];
            $type = explode('.',$name);
            $type = end($type);
            $size = $_FILES['files']['size'];
            $random_name = rand();
            $tmp = $_FILES['files']['tmp_name'];
            $destination = $name;
            move_uploaded_file($tmp, "uploaded_files/".$destination);

            if($this->session->userdata('connect') == true ){
                $sess = $this->session->userdata('username');

            }

        $math = array(
            'title' =>$title,
            'authors' =>$authors,
            'date' =>$date,
            'files' =>$destination,

        );

        $this->load->model('auth_model');
        $this->auth_model->savemath($math);
        redirect('auth/mathematics');

    }
    }
    // ----------------- delete --------------//
    public function delete($id) {
        $username = $this->session->userdata('username');$username = $this->session->userdata('username');
        $this->auth_model->delete_record1($id); // Call the delete_record() function in your model
        $this->db->insert('delete_logs', array(
            'deleted_by' => $username,
            'deleted_at' => date('Y-m-d H:i:s')
        ));
        redirect('auth/mathematics');
    }
    //------------------ update------------- //

    public function getDetails1($id){
        $data = array(
            "result" => $this->auth_model->getFormbyId1($id)
        );
        $this->load->view('updatemath', $data);
    }
     

    public function mathupdate(){

		$book_id = $this->input->post('book_id');

		$title = $this->input->post('title');
		$authors = $this->input->post('authors');
		$date = $this->input->post('date');
        

		$data = array( 
			
		
			"title" => $title,	
			"authors" => $authors,	
			"date" => $date,		
           
        );
		$this->load->model('auth_model');
		$this->auth_model->update_math($data,$book_id);
		redirect('Auth/mathematics');
	}

    
}