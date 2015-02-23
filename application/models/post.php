<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Model
{
	private $table = 'post';
	
	public function addPost($content)
	{
		if(!is_string($content) OR empty($content))
		{
			return false;
		}
		
		return $this->db->set(array('USERNAMEPOST' => '', 'CONTENT' =>$content))
						->insert($this->table);
	}
	public function getAllPosts()
	{
		return $this->db->select('*')
				->from($this->table)
				->get()
				->result();
	}
}
