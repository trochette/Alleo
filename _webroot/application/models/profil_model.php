<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Profil_model extends CI_Model
	{
		var $utilisateur;
		var $adresse;
		var $code_postal;
		var $telephone;
		var $texte;
		var $preference_fumeur;
		var $preference_sexe;
		var $preference_type;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function insert($utilisateur, $preference_fumeur, $preference_sexe, $preference_type, $texte)
		{
			$this->load->database();
			$this->utilisateur = $utilisateur;
			$this->preference_fumeur = $preference_fumeur;
			$this->preference_sexe = $preference_sexe;
			$this->preference_type = $preference_type;
			$this->texte = $texte;
			$this->db->insert('profils', $this);
		}
		
		function update($utilisateur, $adresse, $code_postal, $telephone, $preference_fumeur, $preference_sexe, $preference_type, $texte)
		{
			$this->load->database();
			$this->utilisateur = $utilisateur;
			$this->adresse = $adresse;
			$this->code_postal = $code_postal;
			$this->telephone = $telephone;
			$this->preference_fumeur = $preference_fumeur;
			$this->preference_sexe = $preference_sexe;
			$this->preference_type = $preference_type;
			$this->texte = $texte;
			$this->db->update('profils', $this);
		}
		
		function get_by_id($id)
		{
			$this->load->database();
			$sql = "SELECT * FROM profils WHERE utilisateur = $id";
			$query = $this->db->query($sql);		

			if ($query->num_rows() == 1)
			{
				$row =  $query->row();
				$this->utilisateur = $row->utilisateur;
				$this->adresse = $row->adresse;
				$this->code_postal = $row->code_postal;
				$this->telephone = $row->telephone;
				$this->preference_fumeur = $row->preference_fumeur;
				$this->preference_sexe = $row->preference_sexe;
				$this->preference_type = $row->preference_type;
				$this->texte = $row->texte;
			}
		}
	}
?>