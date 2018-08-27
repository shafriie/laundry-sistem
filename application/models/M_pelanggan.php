<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pelanggan extends CI_Model {

	public function getData()
	{
		// $query = "SELECT * FROM tbl_pelanggan";
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('level',2);
		$data = $this->db->get()->result_array();
		return $data;
	}	

	public function insertPelanggan($post)
	{
		$object = array(

						'username' => $post['username'],
						'fullname' => $post['fullname'],
						'password' => $post['password'],
						'level'	   => 2
					);
		$this->db->insert('tbl_user', $object);

		if ($this->db->affected_rows() === 1) {
			redirect('pelanggan','refresh');
		}
		else
		{
			redirect('pelanggan/add','refresh');	
		}
	}

	public function deleteData($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbl_user');
		if ($this->db->affected_rows() === 1) {
			redirect('pelanggan','refresh');
		}
		else
		{
			redirect('pelanggan','refresh');	
		}	
	}

	public function editData($id)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('id', $id);
		$data = $this->db->get()->row_array();
		$rows['id'] = $data['id'];
		$rows['username'] = $data['username'];
		$rows['fullname'] = $data['fullname'];
		$rows['password'] = $data['password'];
		return $rows;

	}


	public function updatePelanggan($post)
	{
		$object = array(

						'username' => $post['username'],
						'fullname' => $post['fullname'],
						'password' => $post['password'],
					);
		$this->db->where('id', $post['id']);
		$this->db->update('tbl_user', $object);

		if ($this->db->affected_rows() === 1) {
			redirect('pelanggan','refresh');
		}
		else
		{
			redirect('pelanggan/add','refresh');	
		}
	}

}

/* End of file M_pelanggan.php */
/* Location: ./application/models/M_pelanggan.php */