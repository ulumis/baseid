<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('akun_m');
	}
	public function index()
	{
		if($this->session->userdata('logged_in')){
			$data['content_view'] = 'akun/akun_v';
			$this->load->view('template/admin_template_v', $data);
		}
		else {
			redirect('login','refresh');
		}			
	}
	public function sunting()
	{
		if($this->session->userdata('logged_in')){
			$data['content_view'] = 'akun/sunting_v';
			$this->load->view('template/admin_template_v', $data);
		}
		else {
			redirect('login','refresh');
		}			
	}
	public function simpan($id)
	{
		if($this->session->userdata('logged_in')){
			if($this->akun_m->simpan($id)){
				redirect('home','refresh');
			}
			else{
				redirect('akun/sunting','refresh');
			}
		}
		else {
			redirect('login','refresh');
		}			
	}

}

/* End of file Akun.php */
/* Location: ./application/modules/akun/controllers/Akun.php */