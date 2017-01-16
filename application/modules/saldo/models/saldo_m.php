<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo_m extends CI_Model {

	function getSaldo($rekening){
		$this->db->where('No_Rekening', $rekening);
		$query = $this->db->get('akun');

		return $query;
	}	

}

/* End of file saldo_m.php */
/* Location: ./application/modules/saldo/models/saldo_m.php */