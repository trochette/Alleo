<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gagnants extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		session_start();
		//if(isset($_SESSION['user']))
		//{
		//	$data['user'] = $_SESSION['user'];
			//$data['page_title'] = "mettre un titre";
			$this->load->view('gagnants');
		//}
		//else
		//{
		//	$this->load->helper('url');
		//	redirect('accueil/index');
		//}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */