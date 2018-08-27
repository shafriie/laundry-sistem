<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_kasir');
		if (!$this->session->userdata('loggedFirst')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['kasirs'] = $this->M_kasir->getData();
		$this->load->view('Kasir/kasir' ,$data);
	}

	public function add()
	{
		$this->load->view('Kasir/form_input_kasir');
	}

	public function insertKasir()
	{
		$post = $this->input->post();
		$query = $this->M_kasir->insertKasir($post);
	}

	public function deleteData($id)
	{
		$query = $this->M_kasir->deleteData($id);
	}

	public function editData($id)
	{
		$data = $this->M_kasir->editData($id);
		$this->load->view('Kasir/form_edit_kasir',$data);
	}

	public function updateKasir()
	{
		$post = $this->input->post();
		$query = $this->M_kasir->updateKasir($post);
	}


}

/* End of file kasir.php */
/* Location: ./application/controllers/kasir.php */ 