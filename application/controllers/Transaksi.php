<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_transaksi');
		if (!$this->session->userdata('loggedFirst')) {
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$data['kasir'] = $this->M_transaksi->getDataKasir();
		$this->load->view('Transaksi/transaksi' ,$data);
	}

	public function submit()
	{
		$post = $this->input->post();
		$query = $this->M_transaksi->submitData($post);
		echo json_encode($query);
	}

	public function getJenisBarang()
	{
		$query = $this->M_transaksi->getJenisBarang();
	}

	public function getJenisLayanan()
	{
		$query = $this->M_transaksi->getJenisLayanan();
	}

	public function getWhereBarang()
	{
		$jenis_barang = $this->input->post('jenis_barang');
		$query = $this->M_transaksi->getWhereBarang($jenis_barang);
		echo json_encode($query);
	}

	public function getWhereLayanan()
	{
		$jenis_layanan = $this->input->post('jenis_layanan');
		$query = $this->M_transaksi->getWhereLayanan($jenis_layanan);
		echo json_encode($query);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/Transaksi.php */ 