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
		$q_umur = $this->db->query("SELECT (YEAR(CURDATE())-YEAR(tgllahir)) AS umur, COUNT((YEAR(CURDATE())-YEAR(tgllahir))) AS jumlah  FROM pencaker GROUP BY umur ORDER BY umur ASC");

		$q_pendidikan_terakhir = $this->db->query("SELECT jp.jenjang, (SELECT COUNT(pd.id) FROM pendidikan_pencaker pd WHERE pd.jenjang_pendidikan_id=jp.id) AS total FROM jenjang_pendidikan jp");

		$pencaker = $this->db->query("SELECT * FROM pencaker");

		$this->page_data['c_umur'] = $q_umur->result();
		$this->page_data['c_pendidikan_terakhir'] = $q_pendidikan_terakhir->result();
		$this->page_data['max_umur'] = $pencaker->num_rows();
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

	public function kontak()
	{
		$this->page_data['page']->menu = 'kontak';
		$this->page_data['page']->title = 'Kontak';

		$this->load->view('web/kontak', $this->page_data);
	}

	public function kirim_email()
	{
		$page = $this->input->post('page');
		if ($page == 'welcome') {
			$redirectx = 'web';
			$viewx = 'web/welcome';
		} else if ($page == 'kontak') {
			$redirectx = 'web/kontak';
			$viewx = 'web/kontak';
		}

		$q_smtp = $this->db->query("SELECT * FROM smtp LIMIT 1")->row();
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean|callback_alpha_space_only');
		$this->form_validation->set_rules('email', 'Emaid ID', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			//validation fails
			$this->load->view($viewx, $this->page_data);
			// $this->load->view('web/contact_form_view');
		} else {
			//get the form data
			$name = $this->input->post('name');
			$from_email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');

			//set to_email id to which you want to receive mails
			$to_email = 'noreply@disnakertransmkw.com';

			//configure email settings
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = $q_smtp->smtp_host;
			$config['smtp_port'] = '465';
			$config['smtp_user'] = $q_smtp->smtp_user;
			$config['smtp_pass'] = $q_smtp->smtp_pass;
			$config['mailtype'] = 'html';
			$config['charset'] =  'iso-8859-1';
			$config['wordwrap'] = TRUE;
			$config['smtp_crypto'] = 'ssl';
			$config['crypto'] = 'ssl';
			$config['newline'] = "\r\n"; //use double quotes
			//$this->load->library('email', $config);
			$this->email->initialize($config);

			$this->email->from($from_email, $name);
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			if ($this->email->send()) {
				$this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Pesan Anda telah dikirim!</div>');
				redirect($redirectx);
			} else {
				//error
				$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Ada kesalahan! Silakan coba sesaat lagi!</div>');
				redirect($redirectx);
			}
		}
	}

	function alpha_space_only($str)
	{
		if (!preg_match("/^[a-zA-Z ]+$/", $str)) {
			$this->form_validation->set_message('alpha_space_only', 'Hanya boleh mengandung huruf dan spasi');
			return FALSE;
		} else {
			return TRUE;
		}
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
			$detailberita = $this->informasi_model->get_informasi_by_slug($slug);


			$this->page_data['count_berita'] = $this->informasi_model->get_count_informasi('Berita', '1');
			$this->page_data['count_pengumuman'] = $this->informasi_model->get_count_informasi('Pengumuman', '1');
			$this->page_data['count_pelatihan'] = $this->informasi_model->get_count_pelatihan('1');
			$this->page_data['detailberita'] = $detailberita;
			$this->page_data['tags_sidebar'] = $tags_sidebar;
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = $detailberita->judul;
			$this->load->view('web/detailberita', $this->page_data);
		} else {
			$this->page_data['listberita'] = $this->informasi_model->get_informasi('Berita', '1');
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = 'Berita';
			$this->load->view('web/berita', $this->page_data);
		}
	}

	public function tag($tag)
	{
		$this->page_data['listinformasi'] = $this->informasi_model->get_informasi_by_tag($tag, 1);
		$this->page_data['tag'] = $tag;
		$this->page_data['page']->menu = 'informasi';
		$this->page_data['page']->title = 'Tags';
		$this->load->view('web/tags', $this->page_data);
	}

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
			$detailpengumuman = $this->informasi_model->get_informasi_by_slug($slug);
			$this->page_data['count_berita'] = $this->informasi_model->get_count_informasi('Berita', '1');
			$this->page_data['count_pengumuman'] = $this->informasi_model->get_count_informasi('Pengumuman', '1');
			$this->page_data['count_pelatihan'] = $this->informasi_model->get_count_pelatihan('1');

			$this->page_data['detailpengumuman'] = $detailpengumuman;
			$this->page_data['tags_sidebar'] = $tags_sidebar;
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = $detailpengumuman->judul;
			$this->load->view('web/detailpengumuman', $this->page_data);
		} else {
			$this->page_data['listpengumuman'] = $this->informasi_model->get_informasi('Pengumuman', '1');
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = 'Pengumuman';
			$this->load->view('web/pengumuman', $this->page_data);
		}
	}

	public function pelatihan($slug = NULL)
	{
		if ($slug != NULL) {
			$detailpelatihan = $this->informasi_model->get_pelatihan_by_slug($slug);
			$this->page_data['count_berita'] = $this->informasi_model->get_count_informasi('Berita', '1');
			$this->page_data['count_pengumuman'] = $this->informasi_model->get_count_informasi('Pengumuman', '1');
			$this->page_data['count_pelatihan'] = $this->informasi_model->get_count_pelatihan('1');

			$this->page_data['detailpelatihan'] = $detailpelatihan;
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = $detailpelatihan->judul;
			$this->load->view('web/detailpelatihan', $this->page_data);
		} else {

			$this->page_data['jenis_pelatihan'] = $this->informasi_model->get_jenis_pelatihan();
			$this->page_data['listpelatihan'] = $this->informasi_model->get_pelatihan('1');
			$this->page_data['page']->menu = 'informasi';
			$this->page_data['page']->title = 'Pelatihan';
			$this->load->view('web/pelatihan', $this->page_data);
		}
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
		isitimeline('1', $id, 'Anda berhasil melakukan registrasi akun di portal Disnakertrans Kab. Manokwari');
		$pesan = 'Hai...' . $name . ', anda berhasil membuat akun di website Disnakertrans Manokwari.' . PHP_EOL . 'Silahkan kembali ke halaman website disnakertransmkw.com untuk melakukan login dan melengkapi formulir pembuatan Kartu Pencari Kerja (Form AK-1).' . PHP_EOL . PHP_EOL . 'Terima Kasih...';
		$this->notifWA($phone, $pesan);
		$this->session->set_flashdata('alert-type', 'success');
		$this->session->set_flashdata('alert', 'New User Created Successfully');

		redirect('login');
	}
}
