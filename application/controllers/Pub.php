<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pub extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Beranda';
		$this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		// $this->page_data['page']->menu = 'dashboard';
	}

	public function comingsoon()
	{
		$this->load->view('public/comingsoon');
	}

	public function welcome()
	{
		$this->load->view('public/welcome', $this->page_data);
	}


	public function formkartu()
	{
		$this->load->view('public/form_registrasi', $this->page_data);
	}

	public function formregistrasi()
	{
		$this->load->view('public/form_registrasi', $this->page_data);
	}

	public function profil()
	{
		$this->load->view('public/profil', $this->page_data);
	}
	public function berita()
	{
		$this->load->view('public/berita', $this->page_data);
	}
	public function pengumuman()
	{
		$this->load->view('public/pengumuman', $this->page_data);
	}
	public function pelatihan()
	{
		$this->load->view('public/pelatihan', $this->page_data);
	}
}
