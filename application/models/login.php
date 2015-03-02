<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Model
{
	private $table = 'user';
	
	public function connectUser($email, $password)
	{
		if(!is_string($email) OR !is_string($password) OR empty($email) OR empty($password))
		{
			return false;
		}
		
		return $this->db->select('email, firstname, lastname')
						->from($this->table)
						->where(array('email' => $email, 'password' => $password))
						->get()
						->result();
	}
}
