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

}

/* End of file Login_U.php */
/* Location: ./application/controllers/Beranda.php */