<?php
	class Utilisateur_model extends CI_Model
	{
		var $id;
		var $courriel;
		var $mot_de_passe;
		var $nom;
		var $prenom;
		var $sexe;
		var $points;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function connection($courriel, $mot_de_passe)
		{
			$this->load->database();

			$courriel = $this->db->escape($courriel);
			$mot_de_passe = md5($mot_de_passe);
			$sql = "SELECT * FROM utilisateurs WHERE courriel = $courriel AND mot_de_passe = '$mot_de_passe'";
			$query = $this->db->query($sql);		

			if ($query->num_rows() == 1)
			{
				$row =  $query->row();
				$this->id = $row->id;
				$this->courriel = $row->courriel;
				$this->nom = $row->nom;
				$this->prenom = $row->prenom;
				$this->sexe = $row->sexe;
				$this->points = $row->points;
				return true;
			}
			return false;
		}
		
		function insert($courriel, $mot_de_passe, $prenom, $nom, $sexe)
		{
			$this->load->database();
			$this->id = NULL;
			$this->courriel = $courriel;
			$this->prenom = $prenom;
			$this->nom = $nom;
			$this->sexe = $sexe;
			$this->mot_de_passe = md5($mot_de_passe);
			return $this->db->insert('utilisateurs', $this);
		}
		
		function add_points($id, $points)
		{
			$this->load->database();
			$sql = "update utilisateurs set points = $points where id = $id";
			$this->db->query($sql);
		}
	}
?>