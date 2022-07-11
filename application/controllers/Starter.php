<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Starter extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->page_data['page']->title = 'Starter (Blank Page)';
		// $this->page_data['page']->menu = 'starter';
	}

	public function index()
	{
		$this->load->view('blank_page', $this->page_data);
	}

	public function formpencaker()
	{
		$this->page_data['page']->title = 'Profil Pencari Kerja';
		$this->page_data['page']->menu = 'form_pencaker';
		$this->load->view('pencaker/form_pencaker', $this->page_data);
	}

	public function dokumenpencaker()
	{
		$this->page_data['page']->title = 'Dokumen Pencari Kerja';
		$this->page_data['page']->menu = 'doc_pencaker';
		$this->load->view('pencaker/dokumen', $this->page_data);
	}
}

/* End of file Starter.php */
/* Location: ./application/controllers/Starter.php */