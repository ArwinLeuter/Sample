<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class delete_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('delete_model');
    }

    public function delete_logs() {
        $this->view_delete_logs();
    }

    public function view_delete_logs() {
        $data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();


        
        $this->load->model('delete_model');
        $data['delete_logs'] = $this->delete_model->get_all_delete_logs();
        $this->load->view('Auth/delete_table', $data);
    }

}
