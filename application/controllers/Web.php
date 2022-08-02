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

	public function notifWA($nohp, $pesan)
	{
		$userkey = 'a39a7fbff392';
		$passkey = '7eb931d25b0fa3ee6d55980b';
		$telepon = $nohp;
		$message = $pesan;
		$url = 'https://console.zenziva.net/wareguler/api/sendWA/';
		$curlHandle = curl_init();
		curl_setopt($curlHandle, CURLOPT_URL, $url);
		curl_setopt($curlHandle, CURLOPT_HEADER, 0);
		curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
		curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
		curl_setopt($curlHandle, CURLOPT_POST, 1);
		curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
			'userkey' => $userkey,
			'passkey' => $passkey,
			'to' => $telepon,
			'message' => $message
		));
		$results = json_decode(curl_exec($curlHandle), true);
		curl_close($curlHandle);
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

	public function berita($slug = NULL)
	{
		if ($slug != NULL) {
			//sidebar tags di halaman detail berita
			$querytags = $this->db->query("SELECT tags FROM informasi")->result();
			$tags_sidebar = array();
			foreach ($querytags as $qt) {
				//array_push($tags_sidebar, $qt->tags);
				$tagsarray = explode(",", $qt->tags);
				foreach ($tagsarray as $tag) {
					//array_push($tags_sidebar, $tag);
					if (!in_array($tag, $tags_sidebar)) {
						array_push($tags_sidebar, $tag);
					}
				}
			}

			//end
			$detailberita = $this->informasi_model->get_berita_by_slug($slug);


			$this->page_data['detailberita'] = $detailberita;
			$this->page_data['tags_sidebar'] = $tags_sidebar;
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = $detailberita->judul;
			$this->load->view('web/detailberita', $this->page_data);
		} else {
			$this->page_data['listberita'] = $this->informasi_model->get_berita();
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = 'Berita';
			$this->load->view('web/berita', $this->page_data);
		}
	}

	public function tag($tag)
	{
		$this->page_data['listberita'] = $this->informasi_model->get_berita($tag);
		$this->page_data['tag'] = $tag;
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Berita';
		$this->load->view('web/tags', $this->page_data);
	}

	// public function pengumuman()
	// {
	// 	$this->page_data['page']->menu = 'informasi';
	// 	$this->page_data['page']->title = 'Pengumuman';
	// 	$this->load->view('web/pengumuman', $this->page_data);
	// }

	public function pengumuman($slug = NULL)
	{
		if ($slug != NULL) {
			$querytags = $this->db->query("SELECT tags FROM informasi")->result();
			$tags_sidebar = array();
			foreach ($querytags as $qt) {
				$tagsarray = explode(",", $qt->tags);
				foreach ($tagsarray as $tag) {
					if (!in_array($tag, $tags_sidebar)) {
						array_push($tags_sidebar, $tag);
					}
				}
			}


			//end
			$detailpengumuman = $this->informasi_model->get_pengumuman_by_slug($slug);

			$this->page_data['detailpengumuman'] = $detailpengumuman;
			$this->page_data['tags_sidebar'] = $tags_sidebar;
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = $detailpengumuman->judul;
			$this->load->view('web/detailpengumuman', $this->page_data);
		} else {
			$this->page_data['listpengumuman'] = $this->informasi_model->get_pengumuman();
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = 'Pengumuman';
			$this->load->view('web/pengumuman', $this->page_data);
		}
	}

	public function tag_pengumuman($tag)
	{
		$this->page_data['listpengumuman'] = $this->informasi_model->get_pengumuman($tag);
		$this->page_data['tag'] = $tag;
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Pengumuman';
		$this->load->view('web/tags', $this->page_data);
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
		$this->load->view('web/transm', $this->page_data);
	}

	public function tenagakerja()
	{
		$this->page_data['page']->menu = 'bidang';
		$this->page_data['page']->title = 'Tenaga Kerja';
		$this->load->view('web/tenaker', $this->page_data);
	}

	public function account_registration()
	{
		$name = $this->input->post('namalengkap');
		$phone = $this->input->post('nohp');
		$id = $this->users_model->create([
			'role' => '2',
			'name' => post('namalengkap'),
			'username' => post('nik'),
			'email' => post('email'),
			'phone' => $phone,
			'status' => '1',
			'password' => hash("sha256", post('password')),
		]);

		$this->pencaker_model->create([
			'nik' => post('nik'),
			'users_id' => $id,
			'nopendaftaran' => $this->pencaker_model->nomorpendaftaran(),
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
		$pesan = 'Hai...' . $name . ', anda berhasil membuat akun di website Disnakertrans Manokwari.' . PHP_EOL . 'Silahkan kembali ke halaman website disnakertransmkw.com untuk melakukan login dan melengkapi formulir pembuatan Kartu Pencari Kerja (Form AK-1).' . PHP_EOL . PHP_EOL . 'Terima Kasih...';
		$this->notifWA($phone, $pesan);
		$this->session->set_flashdata('alert-type', 'success');
		$this->session->set_flashdata('alert', 'New User Created Successfully');

		redirect('login');
	}

}
