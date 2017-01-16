<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {

	public function index()
	{

	}
	public function proses($object)
	{
		$query = $this->db->insert('kategori', $object);
		return $query;
	}
	public function rekening($no)
	{
		$this->db->where('No_Rekening', $no);
		$query = $this->db->get('akun');

		return $query;
	}

	function update($no,$update){
        $this->db->where("No_Rekening",$no);
        $this->db->update("akun",$update);
    }	

}

/* End of file kategori_m.php */
/* Location: ./application/modules/kategori/models/kategori_m.php */