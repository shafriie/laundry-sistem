<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_register');
		
	}

	public function index()
	{
		$this->load->view('Register/register');
	}

	public function registerCustomer()
	{
		$post = $this->input->post();
		$query = $this->M_register->register($post);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */