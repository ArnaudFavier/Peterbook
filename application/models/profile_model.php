<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Profile_Model extends CI_Model
{
	private $table = 'user';
	
	public function getFirstName($email)
	{
		if(!is_string($email) OR empty($email))
		{
			return false;
		}
		
		return $this->db->select('firstname')
						->from($this->table)
						->where(array('email' => $email)
						->get()
						->result();
	}

	public function getLastName($email)
	{
		if(!is_string($email) OR empty($email))
		{
			return false;
		}
		
		return $this->db->select('lastname')
						->from($this->table)
						->where(array('email' => $email)
						->get()
						->result();
	}
}
