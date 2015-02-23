<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->database();
		$this->load->model('login');

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		$this->form_validation->set_rules('username',  '"Username"',  'trim|required|min_length[3]|max_length[256]|alpha_dash');
		$this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[3]|max_length[256]');
		
		$valide = false;

		if($this->form_validation->run())
		{
			$return = $this->login->connectUser($this->input->post('username'),
												$this->input->post('password'));

			$this->session->set_userdata('username', $return[0]->USERNAME);
		}

		if(!empty($this->session->userdata('username')))
		{
				$data = array();
				$data['username'] = $this->session->userdata('username');

				$this->layout->setTitre('Welcome on Peterbook.');
				$this->layout->views('headerLogin')
							->view('home', $data);
				$valide = true;
		}

		if($valide == false)
		{
			$this->layout->setTitre('Welcome on Peterbook.');
			$this->layout->views('headerIndex')
						->view('index');	
		}
	}
	
	public function subscription(){
		
		$this->load->database();
		$this->load->model('subscription');

		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		$this->form_validation->set_rules('username',  '"Username"',  'trim|required|min_length[3]|max_length[256]|alpha_dash');
		$this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[3]|max_length[256]');
		$this->form_validation->set_rules('email', '"Email"', 'trim|required|min_length[3]|max_length[256]');
		$this->form_validation->set_rules('firstname', '"Firstname"', 'trim|required|min_length[3]|max_length[256]');
		$this->form_validation->set_rules('lastname', '"Lastname"', 'trim|required|min_length[3]|max_length[256]');
		$valide = false;

		if($this->form_validation->run())
		{
			$return = $this->subscription->createUser($this->input->post('username'),
												$this->input->post('password'),
												$this->input->post('email'),
												$this->input->post('firstname'),
												$this->input->post('lastname'));
			
			if($return != false)
			{
				$this->layout->setTitre('Welcome on Peterbook.');
				$this->layout->views('headerLogin')
							->view('home', $data);
				$valide = true;
			}
		}

		if($valide == false)
		{
			$this->layout->setTitre('Welcome on Peterbook.');
			$this->layout->views('headerIndex')
						->view('index');	
		}
	}	
}