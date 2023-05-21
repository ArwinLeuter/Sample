<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class updatefunctions extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('files_update');

    }
    //------------------------- english ----------------------------------//
    // public function index(){
    //     $data = array( 
    //         $this->load->model('files_update'),
    //         "result" => $this->files_update->getFormbyIdFiles(), 
    //     );
    //      $this->load->view('files/englishfiles', $data);
    // }


    public function getFile($id){
        $data = array(
            "result" => $this->files_update->getFormbyIdFiles($id)
        );
        $this->load->view('files/englishfiles', $data);
    }
    
    public function englishfileupdate(){
        $book_id = $this->input->post('book_id');
        $files = $_FILES['files']['name'];
    
        $data = array( 
            "files" => $files
        );
        $this->load->model('files_update');
        $this->files_update->update_english_files($data, $book_id);
        redirect('Auth/english');
    }
    //------------------------- mathematics ----------------------------------//

    // public function index2(){
    //     $data = array( 
    //         $this->load->model('files_update'),
    //         "result" => $this->files_update->getFormbyIdFiles2(), 
    //     );
    //      $this->load->view('files/mathhfiles', $data);
    // }


    public function getFile1($id){
        $data = array(
            "result" => $this->files_update->getFormbyIdFiles1($id)
        );
        $this->load->view('files/mathfiles', $data);
    }
    
    public function mathfileupdate(){
        $book_id = $this->input->post('book_id');
        $files = $_FILES['files']['name'];
    
        $data = array( 
            "files" => $files
        );
        $this->load->model('files_update');
        $this->files_update->update_math_files($data, $book_id);
        redirect('Auth/mathematics');
    }

     //------------------------- science ----------------------------------//

    public function getFile2($id){
        $data = array(
            "result" => $this->files_update->getFormbyIdFiles2($id)
        );
        $this->load->view('files/sciencefiles', $data);
    }
    
    public function sciencefileupdate(){
        $book_id = $this->input->post('book_id');
        $files = $_FILES['files']['name'];
    
        $data = array( 
            "files" => $files
        );
        $this->load->model('files_update');
        $this->files_update->update_science_files($data, $book_id);
        redirect('Auth/science');
    }

    //------------------------- filipino ----------------------------------//

    public function getFile3($id){
        $data = array(
            "result" => $this->files_update->getFormbyIdFiles3($id)
        );
        $this->load->view('files/filipinofiles', $data);
    }
    
    public function filipinofileupdate(){
        $book_id = $this->input->post('book_id');
        $files = $_FILES['files']['name'];
    
        $data = array( 
            "files" => $files
        );
        $this->load->model('files_update');
        $this->files_update->update_filipino_files($data, $book_id);
        redirect('Auth/filipino');
    }

    //------------------------- ap ----------------------------------//

    public function getFile4($id){
        $data = array(
            "result" => $this->files_update->getFormbyIdFiles4($id)
        );
        $this->load->view('files/apfiles', $data);
    }
    
    public function apfileupdate(){
        $book_id = $this->input->post('book_id');
        $files = $_FILES['files']['name'];
    
        $data = array( 
            "files" => $files
        );
        $this->load->model('files_update');
        $this->files_update->update_ap_files($data, $book_id);
        redirect('Auth/ap');
    }

    //------------------------- ap ----------------------------------//

    public function getFile5($id){
        $data = array(
            "result" => $this->files_update->getFormbyIdFiles5($id)
        );
        $this->load->view('files/pefiles', $data);
    }
    
    public function pefileupdate(){
        $book_id = $this->input->post('book_id');
        $files = $_FILES['files']['name'];
    
        $data = array( 
            "files" => $files
        );
        $this->load->model('files_update');
        $this->files_update->update_pe_files($data, $book_id);
        redirect('Auth/pe');
    }







}