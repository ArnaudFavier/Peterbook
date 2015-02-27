<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->database();
		$this->load->model('post_model');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		//$this->form_validation->set_rules('username',  '"Username"',  'trim|required|min_length[3]|max_length[256]|alpha_dash');
		//$this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[3]|max_length[256]');

		if(!empty($this->session->userdata('username')))
		{
			$data = array();
			$data['username'] = $this->session->userdata('username');
			$data['allPosts'] = $this->post_model->getAllPosts();

			$this->layout->setTitre('Welcome on Peterbook.');
			$this->layout->views('headerLogin')
						->view('home', $data);
		}
	}
	
}