<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_m extends CI_Model {

	function getData()
	{
		$query = $this->db->get('kategori');
		return $query;
	}

}

/* End of file laporan_admin_m.php */
/* Location: ./application/modules/laporan_admin/models/laporan_admin_m.php */