<?php  if (! defined('BASEPATH')) exit('No direct script access allowed');

class Articles extends Frontend_Controller
{
	protected $article;

	function __construct()
	{
		parent::__construct();

		$this->twiggy->title()->prepend('Articles');

		// Pretend that we're fetching this data from the database
		$this->article = array('title' => 'Some wild article', 'content' => 'Foo bar baz');
	}

	function index()
	{
		$this->twiggy->template('articles/show')->display();
	}

	function view()
	{
		$this->twiggy->title()->prepend($this->article['title']);
		$this->twiggy->set('article', $this->article);

		$this->twiggy->template('articles/view')->display();
	}

	function view_with_sidebar()
	{
		$this->twiggy->title()->prepend($this->article['title']);
		$this->twiggy->set('article', $this->article);

		$this->twiggy->layout('article_with_sidebar')->template('articles/view')->display();
	}
}