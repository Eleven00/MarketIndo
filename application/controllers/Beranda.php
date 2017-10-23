<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

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
		$data['kategori'] = $this->user_mo->tampil_data('tbl_kategori');
		$data['terlaris'] = $this->user_mo->tampil_data('v_barang','','','select * from v_barang order by terjual desc');
		// $data['terlaris'] = $this->user_mo->tampil_data('v_barang','','','SELECT *
		// 	FROM v_barang AS r1 JOIN
		// 	(SELECT CEIL(RAND() *(SELECT MAX(6)FROM v_barang)) AS id)AS r2
		// 	WHERE r1.kd_barang >= r2.kd_barang
		// 	ORDER BY r1.kd_barang ASC
		// 	LIMIT 6');
		$this->load->view('templates/header',$data);
		$this->load->view('FrontEnd/home',$data);
		$this->load->view('templates/footer');
	}

}

/* End of file Beranda.php */
/* Location: ./application/controllers/Beranda.php */