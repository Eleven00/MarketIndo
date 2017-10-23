<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_p extends CI_Model {

	function cek_user($username,$password){
		$query = $this->db->get_where('tbl_pelanggan', array(
			'username' => $username,
			'password' => $password
		));
		return $query->row();
	}
	function cek_session()
	{
		$userLogin = array('us' => $this->session->userdata(md5('username')), 
			'ps'=>$this->session->userdata(md5('password')),
			'id' =>$this->session->userdata(md5('username')));
		if (empty($userLogin)) {
			redirect(site_url('login_u'));
		}
	}

}

/* End of file login_p.php */
/* Location: ./application/models/login_p.php */