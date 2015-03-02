<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Editprofile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->layout->setTitre('Edit profile.');
		$this->layout->views('headerLogin')
					->view('editprofile');
	}
}