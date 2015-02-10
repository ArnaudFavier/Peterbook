<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Layout
{
	private $CI;
	private $var = array();
	private $theme = 'default';

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->var['contenu'] = '';
		$this->var['titre'] = ucfirst($this->CI->router->fetch_method()) . ' ' . ucfirst($this->CI->router->fetch_class()) . ' - Peterbook.';
	}

	public function view($name, $data = array())
	{
		$this->var['contenu'] .= $this->CI->load->view($name, $data, true);
		$this->CI->load->view('../views/themes/' . $this->theme, $this->var);
	}

	public function views($name, $data = array())
	{
		$this->var['contenu'] .= $this->CI->load->view($name, $data, true);
		return $this;
	}

	public function setTitre($titre)
	{
		if(is_string($titre) AND !empty($titre))
		{
			$this->var['titre'] = $titre;
			return true;
		}
		return false;
	}

	public function setTheme($theme)
	{
		if(is_string($theme) AND !empty($theme) AND file_exists('./application/views/themes/' . $theme . '.php'))
		{
			$this->theme = $theme;
			return true;
		}
		return false;
	}
}