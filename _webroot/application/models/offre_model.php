<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Offre_model extends CI_Model
	{
		var $id;
		var $trajet_id;
		var $utilisateur;
		var $date_heure;
		var $description;
		var $vehicule_id;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function insert($id,  $trajet_id, $utilisateur, $date_heure, $description, $vehicule_id)
		{
			$this->load->database();
			$this->id = NULL;
			$this->trajet_id = $trajet_id;
			$this->utilisateur = $utilisateur;
			$this->date_heure = $date_heure;
			$this->description = $description;
			$this->vehicule_id = $vehicule_id;
			$this->db->insert('offres', $this);
		}
	}
?>