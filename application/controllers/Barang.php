<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
		if (!$this->session->userdata('loggedFirst')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['barang'] = $this->M_barang->getData();
		$this->load->view('Barang/barang',$data);
	}

	public function add()
	{
		$this->load->view('Barang/form_input');
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_barang->insert($post);
	}

	public function deleteData($id)
	{
		$query = $this->M_barang->delete($id);
	}

	public function editData($id)
	{
		$data = $this->M_barang->edit($id);
		$this->load->view('Barang/form_edit',$data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_barang->update($post);
	}

}

/* End of file Petugas.php */
/* Location: ./application/controllers/Petugas.php */ 