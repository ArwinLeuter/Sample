<?php
class files_update extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('files_update');
    }
    //-------------------- ENGLISH --------------------------------//

    public function getFormbyIdFiles($id){
        return $this->db->where('book_id', $id)->get('englishbook')->row_array();
    }

    public function update_english_files($data, $book_id) {
        $this->db->set('files', $data['files']);
        $this->db->where('book_id', $book_id);  
        $this->db->update('englishbook');
    }   


    //-------------------- MATH --------------------------------//

    public function getFormbyIdFiles1($id){
        return $this->db->where('book_id', $id)->get('mathbook')->row_array();
    }

    public function update_math_files($data, $book_id) {
        $this->db->set('files', $data['files']);
        $this->db->where('book_id', $book_id);  
        $this->db->update('mathbook');
    }   

    //-------------------- SCIENCE--------------------------------//
    public function getFormbyIdFiles2($id){
        return $this->db->where('book_id', $id)->get('sciencebook')->row_array();
    }

    public function update_science_files($data, $book_id) {
        $this->db->set('files', $data['files']);
        $this->db->where('book_id', $book_id);  
        $this->db->update('sciencebook');
    }   

     //-------------------- FILIPINO --------------------------------//
     public function getFormbyIdFiles3($id){
        return $this->db->where('book_id', $id)->get('filipinobook')->row_array();
    }

    public function update_filipino_files($data, $book_id) {
        $this->db->set('files', $data['files']);
        $this->db->where('book_id', $book_id);  
        $this->db->update('filipinobook');
    }   

    //-------------------- FILIPINO --------------------------------//
    public function getFormbyIdFiles4($id){
        return $this->db->where('book_id', $id)->get('apbook')->row_array();
    }

    public function update_ap_files($data, $book_id) {
        $this->db->set('files', $data['files']);
        $this->db->where('book_id', $book_id);  
        $this->db->update('apbook');
    }   

    //-------------------- FILIPINO --------------------------------//
    public function getFormbyIdFiles5($id){
        return $this->db->where('book_id', $id)->get('pebook')->row_array();
    }

    public function update_pe_files($data, $book_id) {
        $this->db->set('files', $data['files']);
        $this->db->where('book_id', $book_id);  
        $this->db->update('pebook');
    }   



}

?>
