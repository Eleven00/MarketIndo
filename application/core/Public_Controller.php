<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends MY_Controller {

	function __construct()
	{
		$this->login_p->cek_session();
	}
	public function index()
	{
		
	}

}

/* End of file Public_Controller.php */
/* Location: ./application/core/Public_Controller.php */