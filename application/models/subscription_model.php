<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subscription_model extends CI_Model
{
	private $table = 'user';
	
	public function createUser($username, $email, $password, $firstname, $lastname)
	{
		if(!is_string($username) OR !is_string($password) OR !is_string($email) OR empty($username) OR empty($password) OR empty($email))
		{
			return false;
		}
		
		return $this->db->set(array('USERNAME' => $username,'EMAIL' => $email,'PASSWORD' => $password,'FIRSTNAME' => $firstname,'LASTNAME' => $lastname))
			->insert($this->table);

	}
}
