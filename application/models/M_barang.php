<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {
      
    public function getData()
	{
		// $query = "SELECT * FROM tbl_pelanggan";
		$this->db->select('*');
		$this->db->from('tbl_jenis_barang');
		$data = $this->db->get()->result_array();
		return $data;
	}	

	public function insert($post)
	{
		$object = array(

						'jenis_barang' => $post['jenis_barang'],
						'harga_perkilo' => $post['harga'],
					);
		$this->db->insert('tbl_jenis_barang', $object);

		if ($this->db->affected_rows() === 1) {
			redirect('barang','refresh');
		}
		else
		{
			redirect('barang/add','refresh');	
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_jenis_barang');
		if ($this->db->affected_rows() === 1) {
			redirect('barang','refresh');
		}
		else
		{
			redirect('barang','refresh');	
		}	
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_barang');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$rows['id'] = $data['id'];
		$rows['jenis_barang'] = $data['jenis_barang'];
		$rows['harga_perkilo'] = $data['harga_perkilo'];
		return $rows;

	}


	public function update($post)
	{
		$object = array(

						'jenis_barang' => $post['jenis_barang'],
						'harga_perkilo' => $post['harga_perkilo'],
					);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_jenis_barang', $object);

		if ($this->db->affected_rows() === 1) {
			redirect('barang','refresh');
		}
		else
		{
			redirect('barang','refresh');	
		}
	}

}

/* End of file M_pelanggan.php */
/* Location: ./application/models/M_pelanggan.php */