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
		$this->load->model('post_model', 'post_model');
		$this->load->model('profile_model', 'profile_model');
		$this->load->helper('url');

		if(!empty($this->session->userdata('email')))
		{
			$data = array();
			$data['firstname'] = $this->session->userdata('firstname');
			$data['lastname'] = $this->session->userdata('lastname');
			$data['allPosts'] = $this->post_model->getAllPosts();
			$data['errors'] = $this->session->flashdata('errors');

			$this->layout->setTitre('Welcome on Peterbook.');
			$this->layout->views('headerLogin')
						->view('home', $data);
		}
		else
		{
			redirect('/index/');
		}
	}
	
}