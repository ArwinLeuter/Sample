
<?php

class viewing_controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('pagination');
		$this->load->model('viewing_model');

    }

    // --------------------- english --------------------------//

    public function view_tab($id) {
		$this->load->model('viewing_model');
		$record = $this->viewing_model->getRecord($id);
		$data = array('record' => $record);
		$this->load->view('view_tab', $data);
	}

	public function viewData($id) {
        $data['record'] = $this->viewing_model->getRecord($id);
        $this->load->view('Auth/viewing/viewEnglish', $data);
    }

    // --------------------- mathematics --------------------------//

    public function view_tab1($id) {
		$this->load->model('viewing_model');
		$record = $this->viewing_model->getRecord1($id);
		$data = array('record' => $record);
		$this->load->view('view_tab1', $data);
	}

	public function viewData1($id) {
        $data['record'] = $this->viewing_model->getRecord1($id);
        $this->load->view('Auth/viewing/viewMath', $data);
    }

	    // --------------------- mathematics --------------------------//

		public function view_tab2($id) {
			$this->load->model('viewing_model');
			$record = $this->viewing_model->getRecord2($id);
			$data = array('record' => $record);
			$this->load->view('view_tab2', $data);
		}
	
		public function viewData2($id) {
			$data['record'] = $this->viewing_model->getRecord2($id);
			$this->load->view('Auth/viewing/viewScience', $data);
		}

	// --------------------- filipino --------------------------//

	public function view_tab3($id) {
		$this->load->model('viewing_model');
		$record = $this->viewing_model->getRecord3($id);
		$data = array('record' => $record);
		$this->load->view('view_tab3', $data);
	}

	public function viewData3($id) {
		$data['record'] = $this->viewing_model->getRecord3($id);
		$this->load->view('Auth/viewing/viewFilipino', $data);
	}

	// --------------------- AP --------------------------//

	public function view_tab4($id) {
		$this->load->model('viewing_model');
		$record = $this->viewing_model->getRecord4($id);
		$data = array('record' => $record);
		$this->load->view('view_tab4', $data);
	}

	public function viewData4($id) {
		$data['record'] = $this->viewing_model->getRecord4($id);
		$this->load->view('Auth/viewing/viewAp', $data);
	}

	// --------------------- PE --------------------------//

	public function view_tab5($id) {
		$this->load->model('viewing_model');
		$record = $this->viewing_model->getRecord5($id);
		$data = array('record' => $record);
		$this->load->view('view_tab5', $data);
	}

	public function viewData5($id) {
		$data['record'] = $this->viewing_model->getRecord5($id);
		$this->load->view('Auth/viewing/viewPe', $data);
	}


}
?>