<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_layanan');
	}

	public function index()
	{
		$data['layanan'] = $this->M_layanan->getData();
		$this->load->view('Layanan/layanan',$data);
	}

	public function add()
	{
		$this->load->view('Layanan/form_input');
	}

	public function insert()
	{
		$post = $this->input->post();
		$query = $this->M_layanan->insert($post);
	}

	public function delete($id)
	{
		$query = $this->M_layanan->delete($id);
	}

	public function edit($id)
	{
		$data = $this->M_layanan->edit($id);	
		$this->load->view('Layanan/form_edit', $data);
	}

	public function update()
	{
		$post = $this->input->post();
		$query = $this->M_layanan->update($post);
	}

}

/* End of file Layanan.php */
/* Location: ./application/controllers/Layanan.php */