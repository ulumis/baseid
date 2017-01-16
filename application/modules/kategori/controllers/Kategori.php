<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_m');
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
		redirect('home','refresh');
	}
	public function plastik()
	{
			$data['kategori']='Plastik';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);	
	}
	public function kertas()
	{
		
			$data['kategori']='Kertas';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);			
	}
	public function kaleng()
	{
		
			$data['kategori']='Kaleng';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);				
	}
	public function logam()
	{
		
			$data['kategori']='Logam';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);							
	}
	public function kaca()
	{
		
			$data['kategori']='Kaca';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);					
	}
	public function styrofoam()
	{
		
			$data['kategori']='Styrofoam';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);			
	}
	public function dll()
	{
		
			$data['kategori']='Dan Lain-lain';
			$data['content_view'] = 'kategori/kategori_v';
			$this->load->view('template/admin_template_v', $data);			
	}

	public function proses()
	{
		$rekening = $this->input->post('rekening');
		$berat = $this->input->post('berat');
		$nominal = $this->input->post('nominal');
		$kategori = $this->input->post('kategori');

		$object = array(
					'No_Rekening' => $rekening,
					'Berat' => $berat,
					'Nominal' => $nominal,
					'Kategori' => $kategori
				);

		$this->kategori_m->proses($object);

		redirect('home','refresh');
	}

}