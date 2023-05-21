<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('auth_model');

    }

	// ------ login ---------
	public function index()
	{
		$this->load->view('Auth/login');
		
	}
	public function index1()
	{
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();

		$this->load->view('Auth/index', $data);
		
	}

	public function register()
	{
		$this->load->view('Auth/Register');
	}

	public function registration_form()
	{
		$this->auth_model->register_user();
	}

	// ---------- chat ------------------//x
	public function Display_message()
	{
		$data = array(
			"result" => $this->auth_model->retrieve_message(),
		);
		$this->load->view('Auth/groupChat',$data);
	}
	public function insertMessage()
	{
		if($this->session->userdata('connect') == true){
			$sess = $this->session->userdata('username');
		}
		$message = $this->input->post('message');
		$data = array (
			'user_id' =>$sess,
			'groupMessage' =>$message,
		);
		$this->auth_model->insertChat($data);
		redirect('Auth/Display_message');
	}



	// --------------- user login  --------//
	public function user_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$consult = $this->login_model->fetch_user_details($username, $password);
		$result = $consult->row();
		if ($username == $result->username && $password == $result->password){
			$session = array(
				'username' => $this->input->post('username'),
				'password' => $password,
				'Id' => $result->id,
				'admin_level' => $result->admin_level,
				'connect' => true,
			);
			$this->session->set_userdata($session);
			if($this->session->userdata('connect') == true){
				$sess = $this->session->userdata('username');
				$admin_level = $this->session->userdata('admin_level');
			}

			$this->load->model('activity_log_model');
			$activity_data = array(
				 // get the name of the logged-in user
            'username' => (string)$username, // get the username of the logged-in user
            'created_at' => date('Y-m-d H:i:s')
        );
        $this->activity_log_model->create($activity_data);


			redirect('Auth/index1');
		}else{
			redirect('Auth/');
		}

	

		// $data = array(
		// 	'connect' => true,
		// 	'name' => $check_login[0]['name'],
		// 	'username' => $check_login[0]['username'],
		// );
		// $this->session->set->set_userdata($data);

		// $this->load->model('user_logs_model');
		// $id = $this->session->userdata($id);

		// $logs = array(
		// 	'username' => $username
		// );
	}

	


	public function about(){
		$this->load->view('Auth/About.php');
	}


	// ----------------- ulpload codes --------------//
	public function uploadForm(){

		$data['result'] = $this->auth_model->getUploadfiles();
		
		$this->load->view('Auth/upload',$data);
	}

	public function uploadProcess(){
		
		if (isset($_FILES['files'])){

			$name = $_FILES['files']['name'];
			$type = explode('.',$name);
			$type = end($type);
			$size = $_FILES['files']['size'];
			$random_name = rand();
			$tmp = $_FILES['files']['tmp_name'];
			$destination = $random_name.'.'.$type;
			move_uploaded_file($tmp, "uploaded_files/".$destination);

			if($this->session->userdata('connect') == true ){
				$sess = $this->session->userdata('username');
			}
			$data = array(
				"uploader_name" => $sess,
				"uploaded_file" => $destination
			);
			$this->auth_model->insertUpload($data);
			redirect($_SERVER['HTTP_REFERER']);

		}
		redirect($_SERVER['HTTP_REFERER']);

	}
	

	//------------------------------------------//



	// ----------------- subjects ---------------------
	// english sub
	public function english()
	{
		
		$data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromId(), 
        );

		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
		$this->load->view('Auth/subjects/english', $data);
		
	}	

	// mathematics sub
	public function mathematics()
	{
		$data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromMAth(), 
        );

		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
		$this->load->view('Auth/subjects/mathematics', $data);
	}
	// science sub
	public function science()
	{
		$data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromScience(), 
        );

		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
		$this->load->view('Auth/subjects/science', $data);
	}
	// filipino sub
	public function filipino()
	{
		$data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromFilipino(), 
        );

		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
		$this->load->view('Auth/subjects/filipino', $data);
	}

	// araling panlipunan
	public function ap()
	{
		$data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromAP(), 
        );

		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
		$this->load->view('Auth/subjects/ap', $data);
	}
	// PE
	public function pe()
	{
		$data = array( 
            $this->load->model('auth_model'),
            "result" => $this->auth_model->getFromPe(), 
        );

		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
		$this->load->view('Auth/subjects/pe', $data);
	}
	
	// -------------------------------------------
	// -------------------------------------------


	
	// --------------------logout---------------------
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth/index'); 
    }

	//---- getdtails by id english---//

	public function getDetails($id)
    {
        $data = array(
            "result" => $this->auth_model->getFormByid($id),
        );
        $this->load->view("updateenglish", $data);
    }

	//----------------------------------------------------
	public function getFile($id){
		$data = array(
			"result" => $this->auth_model->getFormbyIdFiles($id) // corrected function name
		);
		$this->load->view('files/englishfiles', $data);
	}

	//---- getdtails by id math---//

	public function getDetails1($id)
    {
        $data = array(
            "result" => $this->auth_model->getFormByid1($id),
        );
        $this->load->view("updatemath", $data);
    }

	public function getDetails2($id)
    {
        $data = array(
            "result" => $this->auth_model->getFormByid2($id),
        );
        $this->load->view("updatescience", $data);
    }

	public function getDetails3($id)
    {
        $data = array(
            "result" => $this->auth_model->getFormByid3($id),
        );
        $this->load->view("updatefilipino", $data);
    }

	public function getDetails4($id)
    {
        $data = array(
            "result" => $this->auth_model->getFormByid4($id),
        );
        $this->load->view("updateap", $data);
    }	

	public function getDetails5($id)
    {
        $data = array(
            "result" => $this->auth_model->getFormByid5($id),
        );
        $this->load->view("updatepe", $data);
    }	

    
	// -------------------search functions -------------------

	public function search_keyword() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['result'] = $this->auth_model->get_search($keyword);
        $this->load->view("Auth/subjects/english", $data);
    }

	public function search_keyword1() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['result'] = $this->auth_model->get_search1($keyword);
        $this->load->view("Auth/subjects/mathematics", $data);
    }

	public function search_keyword2() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['result'] = $this->auth_model->get_search2($keyword);
        $this->load->view("Auth/subjects/science", $data);
    }

	public function search_keyword3() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['result'] = $this->auth_model->get_search3($keyword);
        $this->load->view("Auth/subjects/filipino", $data);
    }


	public function search_keyword4() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['result'] = $this->auth_model->get_search4($keyword);
        $this->load->view("Auth/subjects/ap", $data);
    }

	public function search_keyword5() {
        
        $keyword = $this->input->post('keyword');
        $data = array();
		$data['english'] = $this->auth_model->get_count();
		$data['math'] = $this->auth_model->get_count2();
		$data['science'] = $this->auth_model->get_count3();
		$data['filipino'] = $this->auth_model->get_count4();
		$data['pe'] = $this->auth_model->get_count5();
		$data['ap'] = $this->auth_model->get_count6();
        $data['result'] = $this->auth_model->get_search5($keyword);
        $this->load->view("Auth/subjects/pe", $data);
    }

	public function view_file(){
        $this->load->view("file_view");
	}

	public function adding(){
        $this->load->view("request");
	}

}
?>
