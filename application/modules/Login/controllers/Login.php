<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('login_m');
	}
	public function index()
	{
		$this->load->view('login_v');
	}
	public function cek_login() {
		$data = array('username' => $this->input->post('username', TRUE),
					  'password' => md5($this->input->post('password', TRUE))
			);
		//$this->load->model('login_m');
		$hasil = $this->login_m->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				
				$sess_data['logged_in'] = 'Sudah Login';
				$sess_data['id'] = $sess->id;
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$sess_data['email'] = $sess->email;
				$sess_data['level'] = $sess->level;
				$sess_data['rekening'] = $sess->No_Rekening;
				$sess_data['nama'] = $sess->nama;
				$sess_data['saldo'] = $sess->saldo;

				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('home');
			}
			elseif ($this->session->userdata('level')=='member') {
				redirect('dashboard');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}
}

/* End of file Login.php */
/* Location: ./application/modules/Login/Login.php */