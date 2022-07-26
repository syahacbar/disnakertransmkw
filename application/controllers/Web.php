<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->page_data['url'] = (object) [
			'assets' => assets_url() . '/'
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
		$this->page_data['page']->site_title = 'Disnakertrans Kab. Manokwari';
		// $this->page_data['page']->menu = 'dashboard';
	}

	public function comingsoon()
	{
		$this->page_data['page']->title = 'Comingsoon';

		$this->load->view('web/comingsoon');
	}

	public function index()
	{
		$this->page_data['page']->menu = 'beranda';
		$this->page_data['page']->title = 'Beranda';

		$this->load->view('web/welcome', $this->page_data);
	}

	public function registrasi()
	{
		$this->page_data['page']->menu = 'layanan';
		$this->page_data['page']->title = 'Registrasi';

		$this->load->view('web/form_registrasi', $this->page_data);
	}

	public function profil()
	{
		$this->page_data['page']->menu = 'profil';
		$this->page_data['page']->title = 'Profil';

		$this->load->view('web/profil', $this->page_data);
	}

	public function berita()
	{
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Berita';
		$this->load->view('web/berita', $this->page_data);
	}

	public function detailberita()
	{
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Detail Berita';
		$this->load->view('web/detailberita', $this->page_data);
	}

	public function pengumuman()
	{
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Pengumuman';
		$this->load->view('web/pengumuman', $this->page_data);
	}

	public function pelatihan()
	{
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Pelatihan';
		$this->load->view('web/pelatihan', $this->page_data);
	}

	public function transmigrasi()
	{
		$this->page_data['page']->menu = 'bidang';
		$this->page_data['page']->title = 'Transmigrasi';
		$this->load->view('web/transmigrasi', $this->page_data);
	}
	public function tenagakerja()
	{
		$this->page_data['page']->menu = 'bidang';
		$this->page_data['page']->title = 'Tenaga Kerja';
		$this->load->view('web/tenagakerja', $this->page_data);
	}

	public function account_registration()
	{
		$id = $this->users_model->create([
			'role' => '2',
			'name' => post('namalengkap'),
			'username' => post('nik'),
			'email' => post('email'),
			'phone' => post('nohp'),
			'status' => '1',
			'password' => hash("sha256", post('password')),
		]);

		$this->pencaker_model->create([
			'nik' => post('nik'),
			'users_id' => $id,
		]);

		if (!empty($_FILES['image']['name'])) {

			$path = $_FILES['image']['name'];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			$this->uploadlib->initialize([
				'file_name' => $id . '.' . $ext
			]);
			$image = $this->uploadlib->uploadImage('image', '/users');

			if ($image['status']) {
				$this->users_model->update($id, ['img_type' => $ext]);
			} else {
				copy(FCPATH . 'uploads/users/default.png', 'uploads/users/' . $id . '.png');
			}
		} else {

			copy(FCPATH . 'uploads/users/default.png', 'uploads/users/' . $id . '.png');
		}

		$this->activity_model->add('New User $' . $id . ' Created by User:' . logged('name'), logged('id'));

		$this->session->set_flashdata('alert-type', 'success');
		$this->session->set_flashdata('alert', 'New User Created Successfully');

		redirect('login');
	}
}
