<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('saldo_m');
	}
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$data['content_view'] = 'saldo/saldo_v';
			$this->load->view('template/admin_template_v', $data);
		}
		else {
			redirect('login','refresh');
		}			
	}

}