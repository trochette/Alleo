<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inscription extends CI_Controller {

	function index()
	{
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('courriel', 'Courriel', 'trim|required|valid_email|callback_username_check');
		$this->form_validation->set_rules('mot_de_passe', 'Mot de passe', 'trim|required|min_length[8]|max_length[30]|matches[confirmation]|md5');
		$this->form_validation->set_rules('confirmation', 'Confirmation', 'trim|required');
		$this->form_validation->set_rules('nom', 'Nom', 'trim|required|xss_clean');
		$this->form_validation->set_rules('prenom', 'Prenom', 'trim|required|xss_clean');
		
		
		if ($this->form_validation->run() == false)
		{
			$data['javascript'] = $this->load->view('inscription_javascript', '', true);
			$data['header_bottom'] = $this->load->view('inscription_header_bottom', '', true);
			$this->load->view('header', $data);
			$this->load->view('inscription_form');
			$this->load->view('footer');
		}
		else
		{
			$this->Utilisateur_model->insertion($this->input->post('courriel'), $this->input->post('mot_de_passe'), $this->input->post('prenom'), $this->input->post('nom'),  $this->input->post('sexe'));
			//enregistré le profil
			//si conducteur ajouté le vehicule
			
			$this->session->unset_userdata('courriel');
			$data = array(
                   'courriel'  => $this->input->post('courriel'),				   
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($data);
			redirect('profil');
		}
	}	
	function username_check($str)
	{
		$this->load->database();
		
		$this->form_validation->set_message('username_check', 'The %s already exists');
		
		$query = $this->db->get_where('utilisateurs', array('courriel' => $str));
		return ($query->num_rows() == 0);			
	}
}
?>