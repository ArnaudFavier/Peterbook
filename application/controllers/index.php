<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->layout->setTitre('Welcome on Peterbook.');
		$this->layout->views('headerIndex')
					->view('home');
	}
}