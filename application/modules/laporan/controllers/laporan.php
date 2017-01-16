<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(!$this->session->userdata('logged_in')){
			redirect('login','refresh');
		}
		else {
			if ($this->session->userdata('level') == 'admin') {

			} else {
				redirect('user_laporan','refresh');
			}
			
		}
		$this->load->model('laporan_m');
	}

	public function index()
	{
		$data['content_view'] = 'laporan/laporan_v';
		$data['title'] = 'Laporan Transaksi';
		$data['isi'] = $this->laporan_m->getData()->result_array();

		$this->load->view('template/admin_template_v', $data);
	}


}

/* End of file laporan_admin.php */
/* Location: ./application/modules/laporan_admin/controllers/laporan_admin.php */