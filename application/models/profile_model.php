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
				->where('email', $email)
				->get()
				->result();
	}
	
	public function editUserProfile($email, $newDescription, $newPicture){
		
		if(!is_string($email) OR empty($email))
		{
			return false;
		}

		$data = array();

		if(!empty($newDescription))
		{
			$data['description'] = $newDescription;
		}
		else
		{
			if(!empty($newPicture))
			{
				$data['picture'] = $newPicture;
			}
			else
			{
				return false;
			}
		}

		$this->db->where('email', $email);
	
		return $this->db->update($this->table, $data);
	}
}
