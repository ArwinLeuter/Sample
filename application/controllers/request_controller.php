<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class request_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('request_model');
    }

    public function index() {
        $this->load->view('request');
    }




    public function insertModule(){

        $module_name = $this->input->post('module_name');
        $date = $this->input->post('date');
       
        $data = array(
            'module_name' =>$module_name,
            'date' =>$date,

        );

        $this->load->model('request_model');
        $this->request_model->savemodule($data);
        redirect('Auth/index1');
    }

}
