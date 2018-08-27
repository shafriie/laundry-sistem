<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		if (!$this->session->userdata('loggedFirst')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$this->load->view('Dashboard/dashboard');	
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */