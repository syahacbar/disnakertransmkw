<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Dashboard';
		$this->page_data['page']->menu = 'dashboard';
	}

	public function index()
	{
		if (hasPermissions('dash_user'))
		{
			$users_id = logged('id');
        	$pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
			$this->page_data['dokumen'] = $this->pencaker_model->pencaker_doc($pencaker_id);
			$this->load->view('dashboard_new', $this->page_data);
		}
		elseif (hasPermissions('dash_admin'))
		{
			$this->load->view('dashboard', $this->page_data);
		}
		else
		{
			$this->load->view('errors/html/error_403_permission', $this->page_data);
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */