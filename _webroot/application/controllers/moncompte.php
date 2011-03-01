<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Moncompte extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		session_start();
		
		if($this->session->userdata('courriel') == '')
			redirect('index');
	
		$courriel = $this->session->userdata('courriel');		
		$this->Utilisateur_model->get($courriel);
		
		$data['user'] = $this->Utilisateur_model;
		//$data['page_title'] = "mettre un titre";
		
		/*$this->load->database();
		$query = $this->db->query("select * from trajets where utilisateur_id='" . $data['user']->id . "'");
		$data['trajets'] = array();

		foreach ($query->result_array() as $row)
		{
		   $data['trajets']['nom'] = $row['nom'];
		   $data['trajets']['point_a'] = $row['point_a'];
		   $data['trajets']['point_b'] = $row['point_b'];
		   $data['trajets']['prix_'] = $row['point_b'];
		   $data['trajets']['point_b'] = $row['point_b'];
		   $data['trajets']['point_b'] = $row['point_b'];
		}	*/
		
		$this->load->view('moncompte', $data);
	}
}