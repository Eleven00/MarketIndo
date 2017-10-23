<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mo extends CI_Model {


	public function __construct()
	{
		parent::__construct();
		
	}
	public function tampil_data($tabel='',$kolom='',$nilai='',$query='',$urut='asc')
	{
		if($query != ''){
			$data = $this->db->query($query);
			return $data->result_array();
		}elseif ($kolom != '' && $nilai != '' && $query =='') {
			$data = $this->db->query("select * from $tabel where $kolom='$nilai'");
			return $data->result_array();
		}else{
			$data = $this->db->query('select * from '.$tabel);
			return $data->result_array();
		}
	}
	public function select_one($tabel='',$kolom='',$nilai='')
	{
		$data = $this->db->query("select * from $tabel where $kolom='$nilai'");
			return $data->row();
	}
	public function tambah_data($tabel,$data)
	{
		$data = $this->db->insert($tabel,$data);
		return $data;
	}
	public function ubah_data($tabel,$data,$where)
	{
		$res = $this->db->update($tabel,$data,$where);
		return $res;
	}
	public function hapus_data($tabel,$where)
	{
		$res = $this->db->delete($tabel,$where);
	}	
	// UNTUK MEMBUAT PAGINATION
	public function getTable($nm_table,$kolom='',$nilai='',$by,$urut,$offset, $limit)
	{
		if ($kolom != '' && $nilai != '') 
		{
			$query = $this->db->query('SELECT * FROM '.$nm_table.
			" WHERE $kolom='$nilai' ORDER BY ".$by.' '.$urut." LIMIT $offset, $limit");
		}else{			
		$query = $this->db->query('SELECT * FROM '.$nm_table.
			' ORDER BY '.$by.' '.$urut." LIMIT $offset, $limit");
		}
		return $query->result_array();;
	}
	public function getTable_count($nm_table,$kolom='',$nilai='')
	{
		if ($kolom != '' && $nilai != '') 
		{
			$query = $this->db->query("SELECT * FROM $nm_table where $kolom ='". $nilai."'");
		}
		else
		{
			$query = $this->db->query("SELECT * FROM $nm_table");
		}

		return $query->num_rows();
	}

}

/* End of file user_mo.php */
/* Location: ./application/models/user_mo.php */