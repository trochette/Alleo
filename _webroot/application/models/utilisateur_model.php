<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Utilisateur_model extends CI_Model
	{
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
		
		function get($courriel)
		{
			$this->load->database();			
			$query = $this->db->get_where('utilisateurs', array('courriel' => $courriel));

			if ($query->num_rows() == 1) 
			{
				$row =  $query->row();
				$this->courriel = $row->courriel;
				$this->nom = $row->nom;
				$this->prenom = $row->prenom;
				$this->sexe = $row->sexe;
				$this->points = ($row->points == '') ? 0 : $row->points;				
				return true;
			}
			return false;
		}
		
		function insertion($courriel, $mot_de_passe, $prenom, $nom, $sexe)
		{
			$this->load->database();
			$this->courriel = $courriel;
			$this->prenom = $prenom;
			$this->nom = $nom;
			$this->sexe = $sexe;
			$this->mot_de_passe = $mot_de_passe;
			return $this->db->insert('utilisateurs', $this);
		}
	}
?>