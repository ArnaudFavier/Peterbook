<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Editprofile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	
	
	public function index()
	{
		$this->load->library('form_validation');
		$this->load->model('profile_model');
					
		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		$this->form_validation->set_rules('picture',  '"Picture"',  'trim|required|min_length[3]|max_length[256]|alpha_dash');
		$this->form_validation->set_rules('description', '"Description"', 'trim|required|min_length[3]|max_length[256]');
		
		if($this->form_validation->run())
		{
			$return = $this->profile_model->editUserProfile($this->session->userdata('email'),
															$this->input->post('picture'),
															$this->input->post('description'));
		redirect('/index/');
															
														
		}
		
		else{
		}
		$variable = $this->profile_model->displayUserProfile($this->session->userdata('email'));
			$data = array();
			$data['description'] = $variable[0]->description;
			$data['picture'] =$variable[0]->picture;
		
		$this->layout->setTitre('Edit profile.');
		$this->layout->views('headerLogin', array('picture' => $this->session->userdata('picture')))
					->view('editprofile',$data);
		
	}
}