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

    public function index(){
        $data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromId(), 
        );
         $this->load->view('addenglish', $data);
    }
    
    
    public function insertEnglish(){

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
           
            $eng = array(
                'title' =>$title,
                'authors' =>$authors,
                'date' =>$date,
                'files' =>$destination,

            );
    
            $this->load->model('auth_model');
            $this->auth_model->saveenglish($eng);
            redirect('auth/english');
		}
    }
    //------------------ delete ------------- //

    public function delete($id) {
        $username = $this->session->userdata('username');$username = $this->session->userdata('username');

        $this->auth_model->delete_record($id); // Call the delete_record() function in your model

        $this->db->insert('delete_logs', array(
            'deleted_by' => $username,
            'deleted_at' => date('Y-m-d H:i:s')
        ));

        redirect('auth/english');
    }
    //------------------ update------------- //

    public function getDetails($id){
        $data = array(
            "result" => $this->auth_model->getFormbyId($id)
        );
        $this->load->view('updateenglish', $data);
    }

    public function englishupdate(){

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
		$this->auth_model->update_english($data, $book_id);
		redirect('Auth/english');
	}


}