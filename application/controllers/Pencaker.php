<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencaker extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	// public function index()
	// {
	// 	$this->load->view('blank_page', $this->page_data);
	// }

	// public function formpencaker()
	// {
	// 	$this->page_data['page']->title = 'Profil Pencari Kerja';
	// 	$this->page_data['page']->menu = 'form_pencaker';
	// 	$this->load->view('pencaker/form_pencaker', $this->page_data);
	// }

	public function index()
	{
		$this->page_data['page']->title = 'Profil Pencari Kerja';
		$this->page_data['page']->menu = 'profil_pencaker';
		$this->load->view('pencaker/profil_pencaker', $this->page_data);
	}
}