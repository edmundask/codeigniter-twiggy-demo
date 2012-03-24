<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend_Controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		$this->twiggy->title('Twiggy Demo App');
	}
}