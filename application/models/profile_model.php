<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_Model extends CI_Model
{
	private $table = 'user';
	
	public function displayUserProfile($email)
	{
		if(!is_string($email) OR empty($email))
		{
			return false;
		}
		return $this->db->select('picture, description, firstname, lastname')
				->from($this->table)
				->where('email' = $email)
				->get()
				->result();
	}
}
