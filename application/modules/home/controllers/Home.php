<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('login','refresh');
		}
		else {
			if ($this->session->userdata('level') == 'admin') {

			} else {
				redirect('dashboard','refresh');
			}
			
		}
	}

	public function index()
	{
			$data['content_view'] = 'home/home_v';
			$this->load->view('template/admin_template_v', $data);
	}
}

/* End of file Home.php */
/* Location: ./application/modules/home/controllers/Home.php */