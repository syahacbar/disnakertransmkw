<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Starter extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Starter (Blank Page)';
		$this->page_data['page']->menu = 'starter';
	}

	public function index()
	{
		$this->load->view('blank_page', $this->page_data);
	}

	public function formpencaker()
	{
		$this->load->view('pencaker/form_pencaker', $this->page_data);
	}

	public function dokumen()
	{
		$this->load->view('pencaker/dokumen', $this->page_data);
	}
}

/* End of file Starter.php */
/* Location: ./application/controllers/Starter.php */