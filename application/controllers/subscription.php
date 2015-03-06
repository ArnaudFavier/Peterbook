<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subscription extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function index(){
		
		$this->load->database();
		$this->load->model('subscription_model');

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		$this->form_validation->set_rules('firstname',  '"Username"',  'trim|required|min_length[3]|max_length[256]|alpha_dash');
		$this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[3]|max_length[256]');
		$this->form_validation->set_rules('email', '"Email"', 'trim|required|min_length[3]|max_length[256]');
		$this->form_validation->set_rules('firstname', '"Firstname"', 'trim|required|min_length[3]|max_length[256]');
		$this->form_validation->set_rules('lastname', '"Lastname"', 'trim|required|min_length[3]|max_length[256]');

		if($this->form_validation->run() && $this->input->post('email') == $this->input->post('email2'))
		{
			$return = $this->subscription_model->createUser($this->input->post('email'),
												$this->input->post('password'),
												$this->input->post('firstname'),
												$this->input->post('lastname'));
												
			$this->session->set_userdata('email', $return[0]->email);
			$this->session->set_userdata('firstname', $return[0]->firstname);
			$this->session->set_userdata('lastname', $return[0]->lastname);
		}
		else
		{
			echo "Error Subscription (fields empty or email doesn't match)";
		}
		
		redirect('/index/');
	}
}