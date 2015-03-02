<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->helper('url');

		$this->session->unset_userdata('email');
		$this->session->unset_userdata('firstname');
		$this->session->unset_userdata('lastname');

		redirect('/index/');
	}
}