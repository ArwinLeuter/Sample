<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class search_model extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('search_model');

    }

    public function get_search($keyword){

        $this->db->like('title', $keyword);
        $this->db->like('authors', $keyword);
        return $this->db->get('englishbook')->result_array();

    }
        
    
}