<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('login','refresh');
		}
		else{

		}
	}
	public function index()
	{
		$data['content_view'] = 'bantuan/bantuan_v';
		$this->load->view('template/admin_template_v', $data);
	}

}

/* End of file bantuan.php */
/* Location: ./application/modules/bantuan/controllers/bantuan.php */