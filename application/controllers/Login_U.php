<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_U extends CI_Controller {

	public function index()
	{
		$this->load->view('FrontEnd/login');
	}
	public function register()
	{
		$this->load->view('FrontEnd/register');
	}
	public function proses_login()
	{
		$this->load->model('login_p');
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		// echo($user." ".$pass);
		$terdaftar = $this->login_p->cek_user($user,$pass);
		// print_r($terdaftar);exit;
		if ($terdaftar) {
			$data_session = array(
				md5('id_pelanggan') => $terdaftar->id_pelanggan,
				md5('username') => $user,
				md5('password') => $pass
			);

			$this->session->set_userdata($data_session);
			// print_r($this->session->userdata());exit();
			redirect(site_url('pelanggan'));
		}else{
			// redirect(site_url('login_u'));
			echo("lsksl");
		}
	}
	public function logout()
	{
		$this->session->unset_userdata(md5('id_pelanggan'));
		$this->session->unset_userdata(md5('username'));
		$this->session->unset_userdata(md5('password'));
		redirect(site_url('login_u'));
	}

}

/* End of file Login_U.php */
/* Location: ./application/controllers/Beranda.php */