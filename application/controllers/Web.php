<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->page_data['url'] = (object) [
			'assets' => assets_url().'/'
		];

		$this->page_data['app'] = (object) [
			'site_title' => setting('company_name')
		];

		$this->page_data['page'] = (object) [
			'title' => 'Dashboard',
			'menu' => 'dashboard',
			'submenu' => '',
		];

		// $this->page_data['page']->title = 'Beranda';
		// $this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		// $this->page_data['page']->menu = 'dashboard';
	}

	public function comingsoon()
	{
		$this->page_data['page']->title = 'Comingsoon';
		$this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		$this->load->view('web/comingsoon');
	}

	public function index()
	{
		$this->page_data['page']->title = 'Beranda';
		$this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		$this->load->view('web/welcome', $this->page_data);
	}

	public function registrasi()
	{
		$this->page_data['page']->title = 'Registrasi';
		$this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		$this->load->view('web/form_registrasi', $this->page_data);
	}

	public function profil()
	{
		$this->load->view('web/profil', $this->page_data);
	}

	public function berita()
	{
		$this->load->view('web/berita', $this->page_data);
	}
	public function pengumuman()
	{
		$this->load->view('web/pengumuman', $this->page_data);
	}
	public function pelatihan()
	{
		$this->load->view('web/pelatihan', $this->page_data);
	}

	public function account_registration()
	{
		// ifPermissions('users_add');
		// postAllowed();

		$id = $this->users_model->create([
			'role' => '2',
			'name' => post('namalengkap'),
			'username' => post('nik'),
			'email' => post('email'),
			'phone' => post('nohp'),
			//'address' => post('address'),
			'status' => '1',
			'password' => hash( "sha256", post('password') ),
		]);
		
		$this->pencaker_model->create([
			'nik' => post('nik'),
			'users_id' => $id,
		]);

		if (!empty($_FILES['image']['name'])) {

			$path = $_FILES['image']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$this->uploadlib->initialize([
				'file_name' => $id.'.'.$ext
			]);
			$image = $this->uploadlib->uploadImage('image', '/users');

			if($image['status']){
				$this->users_model->update($id, ['img_type' => $ext]);
			}else{
				copy(FCPATH.'uploads/users/default.png', 'uploads/users/'.$id.'.png');
			}

		}else{

			copy(FCPATH.'uploads/users/default.png', 'uploads/users/'.$id.'.png');

		}

		$this->activity_model->add('New User $'.$id.' Created by User:'.logged('name'), logged('id'));

		$this->session->set_flashdata('alert-type', 'success');
		$this->session->set_flashdata('alert', 'New User Created Successfully');
		
		redirect('login');


	}
}
