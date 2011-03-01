<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Trajet_model extends CI_Model
	{
		var $id;
		var $point_a;
		var $point_b;
		var $prix_suggere;
		var $nom;
		
		function __construct()
		{
			parent::__construct();
		}
		
		function insert($point_a, $point_b, $nom, $prix_suggere = '')
		{
			$this->load->database();
			$this->id = NULL;
			$this->point_a = $point_a;
			$this->point_b = $point_b;
			$this->prix_suggere = $prix_suggere;
			$this->nom = $nom;
			$this->db->insert('utilisateurs', $this);
		}
	}
?>