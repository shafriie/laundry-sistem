<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pelanggan');
		if (!$this->session->userdata('loggedFirst')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['pelanggans'] = $this->M_pelanggan->getData();
		$this->load->view('Pelanggan/pelanggan',$data);
	}

	public function add()
	{
		$this->load->view('Pelanggan/form_input');
	}

	public function insertPelanggan()
	{
		$post = $this->input->post();
		$query = $this->M_pelanggan->insertPelanggan($post);
	}

	public function deleteData($id)
	{
		$query = $this->M_pelanggan->deleteData($id);
	}

	public function editData($id)
	{
		$data = $this->M_pelanggan->editData($id);
		$this->load->view('Pelanggan/form_edit',$data);
	}

	public function updatePelanggan()
	{
		$post = $this->input->post();
		$query = $this->M_pelanggan->updatePelanggan($post);
	}

}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */ 