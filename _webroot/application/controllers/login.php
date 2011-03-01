<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()
	{	
		$this->session->unset_userdata('courriel');
		$this->load->helper(array('form'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', "Nom d'utilisateur", 'trim|required|valid_email|callback_username_check');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required|md5');		
		
		if ($this->form_validation->run() == false)
		{
			$this->load->view('index');
		}
		else
		{			
			$this->session->unset_userdata('courriel');
			$data = array(
                   'courriel'  => $this->input->post('username'),				   
                   'logged_in' => TRUE
               );
			$this->session->set_userdata($data);
			redirect('profil');
		}
	}	
	function username_check($str)
	{
		$this->load->database();
		
		$this->form_validation->set_message('username_check', "Nom d'utilisateur ou le mot de passe est invalide");
		
		$query = $this->db->get_where('utilisateurs', array('courriel' => $str));
		return ($query->num_rows() == 1);			
	}
}
?>