<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('index');
		//$this->load->view('footer');
	}
	
	function inscription()
	{
		$data['type'] = 'Passager';
		if(isset($_GET['passager']))
			$data['type'] = 'Passager';
		else
			$data['type'] = 'Chauffeur';
		
		$this->load->view('inscription', $data);
	}
	
	function ajout_utilisateur()
	{
		$erreur = array();
		
		$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$courriel = $this->input->post('courriel');
		$password = $this->input->post('password');
		$passwordconf = $this->input->post('passwordconf');
		$fumeur = $this->input->post('fumeur');
		
		$meme_sexe = $this->input->post('meme_sexe');
		$precisions = $this->input->post('precisions');
		
		$marque = $this->input->post('marque');
		$annee = $this->input->post('annee');
		$couleur = $this->input->post('couleur');
		$immatriculation = $this->input->post('immatriculation');
		
		$this->load->database();
		$query = $this->db->query("select * from utilisateurs where courriel='$courriel'");
		
		if ($query->num_rows() > 0)
		{
			$erreur[] = 'erreur_compte';
		}
		
		
		if(strlen($nom) < 1)
		{
			$erreur[] = 'erreur_nom';
		}
		if(strlen($prenom) < 1)
		{
			$erreur[] = 'erreur_prenom';
		}
		if(strlen($courriel) < 1)
		{
			$erreur[] = 'erreur_courriel';
		}
		if(strlen($password) < 8 || $password != $passwordconf)
		{
			$erreur[] = 'erreur_mdp';
		}
		
		if(isset($_GET['conducteur']))
			$type = 'Chauffeur';
		else	
			$type = 'Passager';
			
			
		$this->load->helper('url');
		
		$count = count($erreur);
		if($count > 0)
		{
			redirect('index?' . implode('&', $erreur));			
		}
		
		
		
		//$this->Utilisateur_model->insert('alleo2@alleo.ca', 'alleo', 'Boby', 'Michelin', 'M');
		$this->Utilisateur_model->insert($courriel, $password, $prenom, $nom, 'M');
		
		$query = $this->db->query("select * from utilisateurs where courriel='$courriel'");
		$row = $query->row();
		
		$this->load->model('Profil_model');
		//$this->Profil_model->insert($row->id, $);
		
		redirect('profil');
	}
	
	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		if($this->Utilisateur_model->connection($username, $password))
		{			
			session_start();
			$_SESSION['user'] = $this->Utilisateur_model;
			$this->load->helper('url');
			redirect('profil');
		}
		else
		{
			$this->load->helper('url');
			redirect("index?erreur_login=Nom d'utilisateur ou mot de passe invalide");
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */