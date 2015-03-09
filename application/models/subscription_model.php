<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Subscription_model extends CI_Model
{
	private $table = 'user';
	
	public function createUser($email, $password, $firstname, $lastname)
	{
		if(!is_string($email) OR !is_string($password) OR !is_string($firstname) OR !is_string($lastname) OR empty($email) OR empty($password) OR empty($firstname) OR empty($lastname))
		{
			return false;
		}
		
		return $this->db->set(array('email' => $email,'password' => $password,'firstname' => $firstname,'lastname' => $lastname, 'picture' => 'default.jpg'))
			->insert($this->table);

	}
}