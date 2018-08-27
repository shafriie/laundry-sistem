<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}	

	public function validateLogin($post)
	{	
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('username',$post['username']);
		$data = $this->db->get()->row_array();
		$baris = count($data);
		if ($baris > 0) {
			$this->db->select('*');
			$this->db->from('tbl_user');
			$this->db->where('username',$post['username']);
			$this->db->where('password',$post['password']);
			$dataRows = $this->db->get()->row_array();
			$barisRows = count($dataRows);
			if ($barisRows > 0) {

				$array = array(
					'loggedFirst' => true,
					'level' => $dataRows['level'],
					'fullname' => $dataRows['fullname'],
				);
				
				$this->session->set_userdata( $array );
				redirect('dashboard','refresh');
			}
			else
			{
				$this->session->set_flashdata('messages','Incorrect Password. Please try again.');
				$this->session->set_flashdata('alert','alert alert-danger');
				redirect('login','refresh');
			}

		}
		else
		{
			$this->session->set_flashdata('messages','The Username does not exist');
			$this->session->set_flashdata('alert','alert alert-danger');
			redirect('login','refresh');
		}

	}

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */