<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index($data = '')
	{
		$this->load->view('template/admin_template_v',$data);	
	}

}

/* End of file Template.php */
/* Location: ./application/modules/template/controllers/Template.php */