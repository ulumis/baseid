<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_laporan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(!$this->session->userdata('logged_in')){
			redirect('login','refresh');
		}
		else {
			if ($this->session->userdata('level') == 'member') {

			} else {
				redirect('laporan','refresh');
			}
			
		}
		$this->load->model('user_laporan_m');
	}

	public function index()
	{
		$data['content_view'] = 'user_laporan/user_laporan_v';
		$data['title'] = 'Laporan Transaksi Anda';

		$rekening = $this->session->userdata('rekening');

		$data['isi'] = $this->user_laporan_m->getData($rekening)->result_array();

		$this->load->view('template/admin_template_v', $data);
	}


}

/* End of file laporan_admin.php */
/* Location: ./application/modules/laporan_admin/controllers/laporan_admin.php */