<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post_Model extends CI_Model
{
	private $table = 'post';
	
	public function addPost($username, $content)
	{
		if(!is_string($username) OR !is_string($content) OR empty($username) OR empty($content))
		{
			return false;
		}

		return $this->db->set(array('USERNAMEPOST' => $username, 'CONTENT' =>$content))
						->insert($this->table);
	}
}
