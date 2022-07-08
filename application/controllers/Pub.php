<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pub extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Beranda';
		$this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		// $this->page_data['page']->menu = 'dashboard';
	}

	public function welcome()
	{
		$this->load->view('public/welcome', $this->page_data);
	}

}