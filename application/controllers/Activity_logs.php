<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Activity_logs extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('activity_log_model');
    }

    public function index() {
        $data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['activity_logs'] = $this->activity_log_model->get_all_activity_logs();
        $this->load->view('activity_logins', $data);
    }

}
