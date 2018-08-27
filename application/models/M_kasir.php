<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kasir extends CI_Model {

	public function getData()
	{
     // $query = "SELECT * FROM tbl_pelanggan";
		$this->db->select('*');
		$this->db->from('tbl_kasir');
		$data = $this->db->get()->result_array();
		return $data;
	}

	public function deleteData($id)
	{
		$this->db->where('id_kasir', $id);
		$this->db->delete('tbl_kasir');
		if ($this->db->affected_rows() === 1) {
			redirect('kasir','refresh');
		}
		else
		{
			redirect('kasir','refresh');	
		}	
	}

	public function InsertKasir($post)
	     {
	     	$object = array(
	     		'nama_kasir' => $post['nama'],
	     		'alamat' => $post['alamat'],
	     		'no_telp' => $post['no_telp'],
	     		);
		$this->db->insert('tbl_kasir', $object);

		if ($this->db->affected_rows() === 1) {
			redirect('kasir','refresh');
		}

		else
		{
			redirect('kasir/add','refresh');	
		}	
	}

       public function editdata($id)
	   {

		$this->db->select('*');
		$this->db->from('tbl_kasir');
		$this->db->where('id_kasir', $id);
		$data = $this->db->get()->row_array();
		$rows['id_kasir'] = $data['id_kasir'];
		$rows['nama_kasir'] = $data['nama_kasir'];
		$rows['alamat'] = $data['alamat'];
		$rows['no_telp'] = $data['no_telp'];
		return $rows;

	  }

	public function updateKasir($post)
	{
		$object = array(

						'nama_kasir' => $post['nama'],
						'alamat' => $post['alamat'],
						'no_telp' => $post['no_telp'],
					);
		$this->db->where('id_kasir', $post['id_kasir']);
		$this->db->update('tbl_kasir', $object);

		if ($this->db->affected_rows() === 1) {
			redirect('kasir','refresh');
		}
		else
		{
			redirect('kasir/add','refresh');	
		}
	}
}
           

	

/* End of file M_kasir.php */
/* Location: ./application/models/M_kasir.php */