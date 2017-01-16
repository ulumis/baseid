<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('register_m');
	}
	public function index()
	{
		$this->load->view('register_v');
	}
	public function daftar()
	{
		if ($this->input->post('password') == $this->input->post('re_password'))
		{
			$query = $this->register_m->daftar();

			if ($query) {
				redirect(base_url('login'),'refresh');
			} else {
				echo "REGISTRASI GAGAL :(";
			}
		}
		else{
			echo "<script>alert('Gagal Register: Password dan Re-Password Tidak Sama!');history.go(-1);</script>";
		}
	}
}