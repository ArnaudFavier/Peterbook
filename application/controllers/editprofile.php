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

		$config = array(
			'upload_path' => "./assets/img/upload/",
			'file_name' => $this->session->userdata('email').".png",
			'allowed_types' => "gif|jpg|png|jpeg",
			'overwrite' => TRUE,
			'max_size' => "2048000",
			'max_height' => "768",
			'max_width' => "1024"
			);

		$this->load->library('upload', $config);

		$this->form_validation->set_error_delimiters('<p class="form_error">', '</p>');

		$this->form_validation->set_rules('picture',  '"Picture"',  'trim|max_length[256]');
		$this->form_validation->set_rules('description', '"Description"', 'trim|max_length[256]');
		
		if($this->form_validation->run())
		{
			$this->upload->do_upload();

			$this->profile_model->editUserProfile($this->session->userdata('email'),
				$this->input->post('description'),
				$this->session->userdata('email')."_.png"); //For get round the security feature of dot -> underscore dot
		}

		$userProfile = $this->profile_model->displayUserProfile($this->session->userdata('email'));
		$this->session->set_userdata('picture', $userProfile[0]->picture);
		$data = array();
		$data['description'] = $userProfile[0]->description;
		$data['picture'] = $userProfile[0]->picture;
		
		$this->layout->setTitre('Edit profile.');
		$this->layout->views('headerLogin', array('picture' => $this->session->userdata('picture')))
					->view('editprofile',$data);
	}
}