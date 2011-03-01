<?php
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
trajet_id INT NOT NULL ,
utilisateur_id INT NOT NULL ,
description VARCHAR( 250 ) NOT NULL ,
date_heure DATETIME NOT NULL,
vehicule_id INT NOT NULL,


	class Offre_model extends CI_Model
	{
		var $id;
		var $trajet_id;
		var $utilisateur_id;
		var $date_heure;
		var $description;
		var $vehicule_id;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function insert($id,  $trajet_id, $utilisateur_id, $date_heure, $description, $vehicule_id)
		{
			$this->load->database();
			$this->id = NULL;
			$this->trajet_id = $trajet_id;
			$this->utilisateur_id = $utilisateur_id;
			$this->date_heure = $date_heure;
			$this->description = $description;
			$this->vehicule_id = $vehicule_id;
			$this->db->insert('offres', $this);
		}
	}
?>