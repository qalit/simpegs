<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/dashboard.php */