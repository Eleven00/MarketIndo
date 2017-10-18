<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

	function __construct()
	{
		$this->load->model('user_mo');
	}
	public function index()
	{
		
	}
	public function barang($id)
	{
		$data['barang'] = $this->user_mo->tampil_data('barang','id_penjual',$id);
	}

}

/* End of file Penjual.php */
/* Location: ./application/controllers/Penjual.php */