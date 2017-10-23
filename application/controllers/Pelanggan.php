<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_mo');
	}
	public function index()
	{
		$data['pelanggan'] = $this->user_mo->select_one('tbl_pelanggan','id_pelanggan',$this->session->userdata(md5('id_pelanggan')));
		$data['ses'] = array('id' => $this->session->userdata(md5('id_pelanggan')), 
							'user'=>$this->session->userdata(md5('username')),
							'pass'=>$this->session->userdata(md5('password')));
		$this->load->view('templates/header',$data);
		$this->load->view('user/beranda',$data);
		$this->load->view('templates/footer');
	}
	public function profil($id)
	{
		$data['pelanggan'] = $this->user_mo->select_one('tbl_pelanggan','id_pelanggan',$id);
		$this->load->view('templates/header');
		$this->load->view('user/profil',$data);
		$this->load->view('templates/footer');
	}
	public function edit_profil($id)
	{
		$data['pelanggan'] = $this->user_mo->select_one('tbl_pelanggan','id_pelanggan',$id);
		$this->load->view('templates/header');
		$this->load->view('user/edit_profile',$data);
		$this->load->view('templates/footer');
	}
}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */