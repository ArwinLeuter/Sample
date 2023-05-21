<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class addscience extends CI_Controller {

    public function index(){
        $data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromScience(), 
        );
         $this->load->view('addScience', $data);
    }
    
    public function insertScience(){

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

        $sci = array(
            'title' =>$title,
            'authors' =>$authors,
            'date' =>$date,
            'files' => $destination,
        );

        $this->load->model('auth_model');
        $this->auth_model->savescience($sci);
        redirect('auth/science');

    }
}
     //------------------ delete -------------

     public function delete($id) {
        $username = $this->session->userdata('username');$username = $this->session->userdata('username');

        $this->auth_model->delete_record2($id); // Call the delete_record() function in your model

        $this->db->insert('delete_logs', array(
            'deleted_by' => $username,
            'deleted_at' => date('Y-m-d H:i:s')
        ));

        redirect('auth/science');
    }
    //------------------ update------------- //

    public function getDetails2($id){
        $data = array(
            "result" => $this->auth_model->getFormbyId2($id)
        );
        $this->load->view('updatescience', $data);
    }
     

    public function scienceupdate(){

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
		$this->auth_model->science_update($data, $book_id);
		redirect('Auth/science');
	}
    

   

    
}