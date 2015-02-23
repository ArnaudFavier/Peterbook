<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subscription extends CI_Model
{
	private $table = 'user';
	
	public function CreateUser($username, $email, $password, $firstname, $lastname)
	{
		if(!is_string($username) OR !is_string($password) OR !is_string($email) OR empty($username) OR empty($password) OR empty($email))
		{
			return false;
		}
		
		return $this->db->set('USERNAME',$username)
			->set('EMAIL', 	 $email)
			->set('PASSWORD', $password)
			->set('FIRSTNAME', $firstname)
			->set('LASTNAME', $lastname)
			->insert($this->table);
	}
}
