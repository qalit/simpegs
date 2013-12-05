<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('com_dashboard/dashboard');
		
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/dashboard.php */