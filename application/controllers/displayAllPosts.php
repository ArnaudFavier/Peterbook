<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class DisplayAllPosts extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function displayAllPosts()
	{
		
			
		$data = $this->ModelPost->getAllPosts();
		$this->load->view('livreor/afficher_commentaires', $data);
	}
}