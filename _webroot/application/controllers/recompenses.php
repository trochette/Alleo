<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recompenses extends CI_Controller {

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
			$this->load->view('recompenses');
		//}
		//else
		//{
		//	$this->load->helper('url');
		//	redirect('accueil/index');
		//}
	}

}