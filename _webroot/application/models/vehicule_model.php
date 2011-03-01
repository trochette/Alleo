<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Vehicule_model extends CI_Model
	{
		var $id;
		var $utilisateur;
		var $marque;
		var $modele;
		var $annnee;
		var $couleur;
		var $immatriculation;
		var $manger;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function insert($id, $utilisateur, $marque, $modele, $annnee, $couleur, $immatriculation, $manger)
		{
			$this->load->database();
			$this->id = $id;
			$this->utilisateur = $utilisateur;
			$this->marque = $marque;
			$this->modele = $modele;
			$this->annnee = $annnee;
			$this->couleur = $couleur;
			$this->immatriculation = $immatriculation;
			$this->manger = $manger;
			$this->db->insert('vehicules', $this);
		}
		
		function update($id, $utilisateur, $marque, $modele, $annnee, $couleur, $immatriculation, $manger)
		{
			$this->load->database();
			$this->id = $id;
			$this->utilisateur = $utilisateur;
			$this->marque = $marque;
			$this->modele = $modele;
			$this->annnee = $annnee;
			$this->couleur = $couleur;
			$this->immatriculation = $immatriculation;
			$this->manger = $manger;
			$this->db->update('vehicules', $this);
		}
		
		function delete($id)
		{
			$this->load->database();
			$sql = "DELETE FROM vehicules WHERE id = $id";
			$this->db->query($sql);
		}
		
		function get_by_id($id)
		{
			$this->load->database();
			$sql = "SELECT * FROM vehicules WHERE id = $id";
			$query = $this->db->query($sql);		

			if ($query->num_rows() == 1)
			{
				$row =  $query->row();
				$this->id = $row->id;
				$this->utilisateur = $row->utilisateur;
				$this->marque = $row->marque;
				$this->modele = $row->modele;
				$this->annnee = $row->annnee;
				$this->couleur = $row->couleur;
				$this->immatriculation = $row->immatriculation;
				$this->manger = $row->manger;
			}
		}
	}
?>