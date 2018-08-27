<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_transaksi extends CI_Model {

	public function submitData($post)
	{
		// INSERT tbl_header
		$object = array(
						'no_transaksi' => $post['no_trans'],
						'kasir' => $post['kasir'],
						'tanggal' => $post['tanggal'],
				);
		$this->db->insert('tbl_header_transaksi', $object);

		$header_id = $this->db->insert_id();
		$jenis_barang = $post['jenis_barang'];
		$jenis_layanan = $post['jenis_layanan'];
		$qty = $post['qty'];
		$total = $post['total'];

		// INSERT tbl_detail
		for ($i=1; $i <= count($jenis_barang); $i++) { 
			$object = array(
						'header_id' => $header_id,
						'jenis_barang' => $jenis_barang[$i],
						'jenis_layanan' => $jenis_layanan[$i],
						'qty' => $qty[$i],
						'total' => $total[$i],
					);
			$this->db->insert('tbl_detail_transaksi', $object);
		}

		if ($this->db->affected_rows() === 1) {
			$result = array('info' =>true );
		}
		else
		{
			$result = array('info' =>false );	
		}

		return $result;
		
	}

	public function getDataKasir()
    {
		$this->db->select('*');
		$this->db->from('tbl_kasir');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function getJenisBarang()
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_barang');
		$data = $this->db->get()->result_array();
		echo "<select>";
		echo "<option value=''>-- choose --</option>";
		foreach ($data as $rows) {
			echo "<option value='".$rows['id']."'>".$rows['jenis_barang']."</option>";
		}
		echo "</select>";
	}

	public function getJenisLayanan()
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_layanan');
		$data = $this->db->get()->result_array();
		echo "<select>";
		echo "<option value=''>-- choose --</option>";
		foreach ($data as $rows) {
			echo "<option value='".$rows['id']."'>".$rows['nama_layanan']."</option>";
		}
		echo "</select>";
	}

	public function getWhereBarang($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_barang');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		return $data;
	}

	public function getWhereLayanan($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_layanan');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		return $data;
	}

}

/* End of file M_transaksi.php */
/* Location: ./application/models/transaksi.php */