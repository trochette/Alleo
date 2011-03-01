<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajoutertrajet extends CI_Controller {

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
			$this->load->view('ajoutertrajet');
		//}
		//else
		//{
		//	$this->load->helper('url');
		//	redirect('accueil/index');
		//}
	}

        function ajouter()
	{
		session_start();


                $obj_trajet = new Trajet_model();
                $obj_trajet->insert($point_a, $point_b, $prix_suggere);
		//if(isset($_SESSION['user']))
		//{
		//	$data['user'] = $_SESSION['user'];
			//$data['page_title'] = "mettre un titre";
			$this->load->view('ajoutertrajet');
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