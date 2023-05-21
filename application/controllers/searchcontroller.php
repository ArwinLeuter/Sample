<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class searchcontroller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('search_model');

    }

    public function search_keyword() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
        $data['result'] = $this->search_model->search($keyword);
        $this->load->view('Auth/english', $data);
    }
    
    
    
}