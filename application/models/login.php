<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model
{
	private $table = 'user';
	
	public function connectUser($username, $password)
	{
		if(!is_string($username) OR !is_string($password) OR empty($username) OR empty($password))
		{
			return false;
		}
		
		return $this->db->select('USERNAME, EMAIL, DESCRIPTION, PICTURE, FIRSTNAME, LASTNAME	')
						->from($this->table)
						->where(array('USERNAME' => $username, 'PASSWORD' => $password))
						->get()
						->result();
	}
}
