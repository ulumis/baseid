<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect('login','refresh');
		}
		else {
			if ($this->session->userdata('level') == 'member') {

			} else {
				redirect('home','refresh');
			}
			
		}
	}

	public function index()
	{
			$data['content_view'] = 'dashboard/dashboard_v';
			$this->load->view('template/admin_template_v', $data);
	}
}