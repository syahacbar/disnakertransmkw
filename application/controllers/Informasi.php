<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->page_data['page']->title = 'Starter (Blank Page)';
		// $this->page_data['page']->menu = 'starter';
	}

	public function berita()
	{
		$this->page_data['page']->title = 'Berita';
		$this->page_data['page']->submenu = 'berita';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/berita', $this->page_data);
	}

	public function pengumuman()
	{
		$this->page_data['page']->title = 'Pengumuman';
		$this->page_data['page']->submenu = 'pengumuman';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/pengumuman', $this->page_data);
	}

	public function pelatihan()
	{
		$this->page_data['page']->title = 'Pelatihan';
		$this->page_data['page']->submenu = 'pelatihan';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/pelatihan', $this->page_data);
	}
}