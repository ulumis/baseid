<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {

	public function cek_user($data){
		$query = $this->db->get_where('akun',$data);
		return $query;
	}	

}

/* End of file login_m.php */
/* Location: ./application/modules/Login/models/login_m.php */