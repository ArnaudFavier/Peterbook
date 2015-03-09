<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addPost()
	{
		$this->load->database();
		$this->load->model('post_model');
		$this->load->helper('url');
		$this->load->library('form_validation');

		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		$this->form_validation->set_rules('content',  '"Content"',  'trim|required|min_length[1]');

		$valide = false;

		if($this->form_validation->run())
		{
			$return = $this->post_model->addPost($this->session->userdata('email'), $this->input->post('content'));
			
			if($return != false)
			{
				redirect('/home/');
			}

			$this->session->set_flashdata('errors','Error : database problem (addPost).');
		}

		$this->session->set_flashdata('errors', validation_errors());

		if($valide == false)
		{
			redirect('/home/');
		}
	}
}