<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addpe extends CI_Controller {

    public function index(){
        $data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromPE(), 
        );
         $this->load->view('addpe', $data);
    }
    
    public function insertPe(){

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

        $pe = array(
            'title' =>$title,
            'authors' =>$authors,
            'date' =>$date,
            'files' =>$destination
        );

        $this->load->model('auth_model');
        $this->auth_model->savepe($pe);
        redirect('auth/pe');

    }
}

    //------------------ delete -------------

    public function delete($id) {
        $username = $this->session->userdata('username');$username = $this->session->userdata('username');

        $this->auth_model->delete_record5($id); // Call the delete_record() function in your model

        $this->db->insert('delete_logs', array(
            'deleted_by' => $username,
            'deleted_at' => date('Y-m-d H:i:s')
        ));
        redirect('auth/pe');
    }
    //------------------ update------------- //

    public function getDetails5($id){
        $data = array(
            "result" => $this->auth_model->getFormbyId5($id)
        );
        $this->load->view('updatepe', $data);
    }
     

    public function peupdate(){

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
		$this->auth_model->update_pe($data,$book_id);
		redirect('Auth/pe');
	}

    
}