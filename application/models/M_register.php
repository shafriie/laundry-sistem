<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_register extends CI_Model {

	public function register($post)
	{
		$object = array(
					'username' =>$post['username'],
					'password' =>$post['password'],
					'fullname' =>$post['fullname'],
					'level' =>2,
				);
		$this->db->insert('tbl_user', $object);
		if ($this->db->affected_rows() === 1) {
			$this->session->set_flashdata('messages','Anda berhasil register silahkan login');
			$this->session->set_flashdata('alert','alert alert-success');
			redirect('register');	
		}
		else
		{
			$this->session->set_flashdata('messages','Anda gagal register. Silahkan coba lagi');
			$this->session->set_flashdata('alert','alert alert-success');
			redirect('register');
		}
	}	

}

/* End of file M_register.php */
/* Location: ./application/models/M_register.php */