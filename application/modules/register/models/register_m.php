<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_m extends CI_Model {

	public function daftar(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$re_password = $this->input->post('re_password');

		$object = array(
					'username' => $username,
					'email' => $email,
					'password' => md5($password),
					'level' => 'member',
					'nama' => $username
				);

		$query = $this->db->insert('akun', $object);
		return $query;
	}	

}
