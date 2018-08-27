<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_layanan extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_layanan');
		$data = $this->db->get()->result_array();
		return $data;
	}	

	public function insert($post)
	{
		$object = array(
						'nama_layanan' => $post['nama'] ,
						'harga' => $post['harga'] ,
						 );
		$this->db->insert('tbl_jenis_layanan', $object);
		if ($this->db->affected_rows() === 1) {
			redirect('layanan','refresh');
		}
		else
		{
			redirect('layanan','refresh');
		}
	}

	public function update($post)
	{
		$object = array(
						'nama_layanan' => $post['nama'] ,
						'harga' => $post['harga'] ,
						 );
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_jenis_layanan', $object);
		if ($this->db->affected_rows() === 1) {
			redirect('layanan','refresh');
		}
		else
		{
			redirect('layanan','refresh');
		}
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_jenis_layanan');
		if ($this->db->affected_rows() === 1) {
			redirect('layanan','refresh');
		}
		else
		{
			redirect('layanan','refresh');
		}	
	}

	public function edit($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_jenis_layanan');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$rows['id'] = $data['id'];
		$rows['nama_layanan'] = $data['nama_layanan'];
		$rows['harga'] = $data['harga'];
		return $rows;

	}

}

/* End of file M_layanan.php */
/* Location: ./application/models/M_layanan.php */