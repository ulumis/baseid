<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_m extends CI_Model {

	public function simpan($id)
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$object = array(
					'username' => $username,
					'password' => $password
				);

		$this->db->where('id', $id);
		$query = $this->db->update('akun', $object);

		return $query;
	}

	

}

/* End of file akun_m.php */
/* Location: ./application/modules/akun/models/akun_m.php */