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

	// public function formpencaker()
	// {
	// 	$this->page_data['page']->title = 'Profil Pencari Kerja';
	// 	$this->page_data['page']->menu = 'form_pencaker';
	// 	$this->load->view('pencaker/form_pencaker', $this->page_data);
	// }

	// public function profilpencaker()
	// {
	// 	$this->page_data['page']->title = 'Profil Pencari Kerja';
	// 	$this->page_data['page']->menu = 'profil_pencaker';
	// 	$this->page_data['page']->submenu = 'form_pencaker';
	// 	$this->load->view('pencaker/profil_pencaker', $this->page_data);
	// }

	public function tujuan()
	{
		$this->page_data['page']->title = 'Tujuan Pencaker';
		$this->page_data['page']->submenu = 'tujuan';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/tujuan', $this->page_data);
	}
	public function identitas()
	{
		$this->page_data['page']->title = 'Informasi Umum';
		$this->page_data['page']->submenu = 'identitas';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/identitas', $this->page_data);
	}
	public function pendidikan()
	{
		$this->page_data['page']->title = 'Informasi Pendidikan';
		$this->page_data['page']->submenu = 'pendidikan';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/pendidikan', $this->page_data);
	}
	public function bahasa()
	{
		$this->page_data['page']->title = 'Informasi Bahasa';
		$this->page_data['page']->submenu = 'bahasa';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/bahasa', $this->page_data);
	}

	public function pekerjaan()
	{
		$this->page_data['page']->title = 'Informasi Pekerjaan';
		$this->page_data['page']->submenu = 'pekerjaan';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/pekerjaan', $this->page_data);
	}

	public function perusahan()
	{
		$this->page_data['page']->title = 'Tujuan Perusahan';
		$this->page_data['page']->submenu = 'perusahan';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/perusahan', $this->page_data);
	}
	public function datatambahan()
	{
		$this->page_data['page']->title = 'Data Tambahan';
		$this->page_data['page']->submenu = 'datatambahan';
		$this->page_data['page']->menu = 'formpencaker';
		$this->load->view('pencaker/datatambahan', $this->page_data);
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