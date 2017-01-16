<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['content'] = "good job";
		$this->load->view('tes_v', $data);
	}

	public function home()
	{
		echo "ini halaman home !!!";
	}

}

/* End of file tes.php */
/* Location: ./application/controllers/tes.php */