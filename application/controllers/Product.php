<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_mo');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('FrontEnd/detail_produk');
		$this->load->view('templates/footer');
	}
	public function penjual($id)
	{
		$data['barang'] = $this->user_mo->tampil_data('v_barang','id_penjual',$id);

		$data['kategori'] = $this->user_mo->tampil_data('tbl_kategori','','',"select * from tbl_kategori",'desc');
		// print_r($data['kategori']);exit;
		$data['anak'] = $this->user_mo->tampil_data('tbl_child_kat');
		$this->load->library('pagination');
		// mengatur nilai mulai untuk menampilkan data
		if($this->uri->segment(4)=="")
		{
			$offset=0;
		}
		else
		{
			$offset=$this->uri->segment(4);
		} 
        // mengatur jumlah data yang akan ditampilkan
		$limit = 4; 
		$data['brng'] = $this->user_mo->getTable('v_barang','id_penjual',$id,'kd_barang','desc',$offset, $limit);
		// menghitung jumlah record/baris pada tabel
		$data['count'] = $this->user_mo->getTable_count('tbl_barang'); 
		// echo $data['count'];exit;
		$config['base_url'] = base_url().'index.php/product/penjual'.'/'.$id;
		$config['total_rows'] = $data['count'];
		$config['per_page'] = 4;
		$config['first_tag_open'] = '<li>';
    	$config['first_link'] = 'First';
    	$config['first_tag_close'] = '</li>';
    	$config['prev_link'] = 'Sebelumnya';
    	$config['prev_tag_open'] = '<li>';
    	$config['prev_tag_close'] = '</li>';
    	$config['cur_tag_open'] = '<li class="active"><a href>';
    	$config['cur_tag_close'] = '</a></li>';
    	$config['next_link'] = 'Selanjutnya';
    	$config['next_tag_open'] = '<li>';
    	$config['next_tag_close'] = '</li>';
    	$config['num_tag_open'] = '<li>';
    	$config['num_tag_close'] = '</li>';
    	$config['last_tag_open'] = '<li>';
    	$config['last_link'] = 'Last';
    	$config['last_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$this->load->view('templates/header');
		$this->load->view('FrontEnd/penjual',$data);
		$this->load->view('templates/footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */