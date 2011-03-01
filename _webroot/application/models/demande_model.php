<?php

	class Demande_model extends CI_Model
	{
		var $id;
		var $trajet_id;
		var $utilisateur_id;
		var $date_heure;
		var $description;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function insert($id,  $trajet_id, $utilisateur_id, $date_heure, $description)
		{
			$this->load->database();
			$this->id = NULL;
			$this->trajet_id = $trajet_id;
			$this->utilisateur_id = $utilisateur_id;
			$this->date_heure = $date_heure;
			$this->description = $description;
			$this->db->insert('utilisateurs', $this);
		}
	}
?>