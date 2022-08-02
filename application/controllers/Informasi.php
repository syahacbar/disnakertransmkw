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

	public function slug($title)
	{
		$slug = url_title($title, 'dash', true);
		return $slug;
	}

	public function berita()
	{
		$this->page_data['page']->title = 'Berita';
		$this->page_data['page']->submenu = 'berita';
		$this->page_data['page']->menu = 'informasi';

		$informasi = $this->informasi_model->get_berita();
		$this->page_data['informasi'] = $informasi;
		$this->load->view('informasi/berita', $this->page_data);
	}

	public function get_berita()
	{
		// $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

		$query  = "SELECT * FROM informasi";
		$search = array('judul', 'isi', 'tags');
		$where  = null;

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		// $isWhere = 'artikel.deleted_at IS NULL';
		header('Content-Type: application/json');
		echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
	}

	public function add_berita()
	{
		$users_id = logged('id');
		// $config['upload_path']   = FCPATH.'uploads/informasi/berita';
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$this->load->library('upload', $config);

		// if($this->upload->do_upload('thumbnailberita')){
		if ($this->uploadlib->uploadImage('thumbnailberita', '/informasi/berita')) {
			$gambar = $this->upload->data('file_name');
			$kategori = "Berita";
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$tags = $this->input->post('tags');
			$status = $this->input->post('status');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$users_id = $users_id;
			$slug = $this->slug($judul);

			$this->db->insert('informasi', array('gambar' => $gambar, 'kategori' => $kategori, 'judul' => $judul, 'isi' => $isi, 'tags' => $tags, 'status' => $status, 'tgl_publikasi' => $tgl_publikasi, 'users_id' => $users_id, 'slug' => $slug));
		}
	}

	public function get_berita_by_id($id)
	{
		$data  = $this->informasi_model->get_berita_by_id($id);
		echo json_encode($data);
	}

	public function updatestatus_berita()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');

		if ($status == 'true') {
			$statusberita = 1;
		} else {
			$statusberita = 0;
		}

		if ($this->informasi_model->updateberita($id, array('status' => $statusberita))) {
			$data = array(
				'status' => TRUE,
				'info' => 'Berhasil ubah status berita'
			);
		} else {
			$data = array(
				'status' => FALSE,
				'info' => 'Berhasil ubah status berita'
			);
		}

		echo json_encode($data);
	}

	public function update_berita()
	{
		$id = $this->input->post('idberita');

		$users_id = logged('id');
		// $config['upload_path']   = FCPATH.'uploads/informasi/berita';
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$this->load->library('upload', $config);

		// if($this->upload->do_upload('thumbnailberita')){
		if ($this->uploadlib->uploadImage('thumbnailberita', '/informasi/berita')) {
			$gambar = $this->upload->data('file_name');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$tags = $this->input->post('tags');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$slug = $this->slug($judul);

			$result = $this->informasi_model->updateberita($id, array('gambar' => $gambar, 'judul' => $judul, 'isi' => $isi, 'tags' => $tags, 'tgl_publikasi' => $tgl_publikasi, 'slug' => $slug));

			if ($result) {
				$data = array(
					'status' => TRUE,
					'info' => 'Berhasil ubah  berita'
				);
			} else {
				$data = array(
					'status' => FALSE,
					'info' => 'Berhasil ubah  berita'
				);
			}
		}
		echo json_encode($data);
	}

	public function deleteberita()
	{
		$id = $this->input->post('id');
		if ($this->informasi_model->hapusberita($id)) {
			echo json_encode(array('status' => TRUE, 'info' => 'Berhasil hapus berita'));
		} else {
			echo json_encode(array('status' => FALSE, 'info' => 'Gagal hapus berita'));
		}
	}

	public function pengumuman()
	{
		$this->page_data['page']->title = 'Pengumuman';
		$this->page_data['page']->submenu = 'pengumuman';
		$this->page_data['page']->menu = 'informasi';

		$informasi = $this->informasi_model->get_pengumuman();
		$this->page_data['informasi'] = $informasi;
		$this->load->view('informasi/pengumuman', $this->page_data);
	}

	public function get_pengumuman()
	{
		$query  = "SELECT * FROM informasi";
		$search = array('judul', 'isi', 'tags');
		$where  = null;

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		header('Content-Type: application/json');
		echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
	}


	public function add_pengumuman()
	{
		$users_id = logged('id');
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$this->load->library('upload', $config);

		if ($this->uploadlib->uploadImage('thumbnailpengumuman', '/informasi/pengumuman')) {
			$gambar = $this->upload->data('file_name');
			$kategori = "Pengumuman";
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$tag = $this->input->post('tag');
			$status = $this->input->post('status');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$users_id = $users_id;
			$slug = $this->slug($judul);

			$this->db->insert('informasi', array('gambar' => $gambar, 'kategori' => $kategori, 'judul' => $judul, 'isi' => $isi, 'tags' => $tag, 'status' => $status, 'tgl_publikasi' => $tgl_publikasi, 'users_id' => $users_id, 'slug' => $slug));
		}
	}

	public function get_pengumuman_by_id($id)
	{
		$data  = $this->informasi_model->get_pengumuman_by_id($id);
		echo json_encode($data);
	}

	public function updatestatus_pengumuman()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');

		if ($status == 'true') {
			$statuspengumuman = 1;
		} else {
			$statuspengumuman = 0;
		}

		if ($this->informasi_model->updatepengumuman($id, array('status' => $statuspengumuman))) {
			$data = array(
				'status' => TRUE,
				'info' => 'Berhasil ubah status pengumuman'
			);
		} else {
			$data = array(
				'status' => FALSE,
				'info' => 'Berhasil ubah status pengumuman'
			);
		}

		echo json_encode($data);
	}

	public function update_pengumuman()
	{
		$id = $this->input->post('idpengumuman');

		$users_id = logged('id');
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$this->load->library('upload', $config);

		if ($this->uploadlib->uploadImage('thumbnailpengumuman', '/informasi/pengumuman')) {
			$gambar = $this->upload->data('file_name');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$tags = $this->input->post('tags');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$slug = $this->slug($judul);

			$this->informasi_model->updatepengumuman($id, array('gambar' => $gambar, 'judul' => $judul, 'isi' => $isi, 'tags' => $tags, 'tgl_publikasi' => $tgl_publikasi, 'slug' => $slug));
		}
	}


	public function deletepengumuman()
	{
		$id = $this->input->post('id');
		if ($this->informasi_model->hapuspengumuman($id)) {
			echo json_encode(array('status' => TRUE, 'info' => 'Berhasil hapus pengumuman'));
		} else {
			echo json_encode(array('status' => FALSE, 'info' => 'Gagal hapus pengumuman'));
		}
	}

	public function pelatihan()
	{
		$this->page_data['page']->title = 'Pelatihan';
		$this->page_data['page']->submenu = 'pelatihan';
		$this->page_data['page']->menu = 'informasi';

		$pelatihan = $this->informasi_model->get_pelatihan();
		$this->page_data['pelatihan'] = $pelatihan;

		$this->load->view('informasi/pelatihan', $this->page_data);
	}

	public function get_pelatihan()
	{
		$query  = "SELECT * FROM pelatihan";
		$search = array('judul', 'isi');
		$where  = null;

		// jika memakai IS NULL pada where sql
		$isWhere = null;
		header('Content-Type: application/json');
		echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
	}


	public function add_pelatihan()
	{
		$users_id = logged('id');
		// $jenis_pelatihan_kode = $this->informasi_model->jenis_pelatihan_kode();
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$this->load->library('upload', $config);

		if ($this->uploadlib->uploadImage('thumbnailpelatihan', '/informasi/pelatihan')) {
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$gambar = $this->upload->data('file_name');
			$status = $this->input->post('status');
			$users_id = $users_id;
			$slug = $this->slug($judul);
			$jenis_pelatihan_kode = 1;


			$this->db->insert('pelatihan', array('judul' => $judul, 'isi' => $isi, 'tanggal' => $tgl_publikasi, 'gambar' => $gambar, 'status' => $status, 'users_id' => $users_id, 'slug' => $slug, 'jenis_pelatihan_kode' => $jenis_pelatihan_kode));
		}
	}

	public function get_pelatihan_by_id($id)
	{
		$data  = $this->informasi_model->get_pelatihan_by_id($id);
		echo json_encode($data);
	}

	public function updatestatus_pelatihan()
	{
		$id = $this->input->post('id');
		$status = $this->input->post('status');

		if ($status == 'true') {
			$statuspelatihan = 1;
		} else {
			$statuspelatihan = 0;
		}

		if ($this->informasi_model->updatepelatihan($id, array('status' => $statuspelatihan))) {
			$data = array(
				'status' => TRUE,
				'info' => 'Berhasil ubah status pelatihan'
			);
		} else {
			$data = array(
				'status' => FALSE,
				'info' => 'Berhasil ubah status pelatihan'
			);
		}

		echo json_encode($data);
	}

	public function update_pelatihan()
	{
		$id = $this->input->post('idpelatihan');

		$users_id = logged('id');
		$config['allowed_types'] = 'gif|jpg|png|ico';
		$this->load->library('upload', $config);

		if ($this->uploadlib->uploadImage('thumbnailpelatihan', '/informasi/pelatihan')) {
			$gambar = $this->upload->data('file_name');
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi');
			$tags = $this->input->post('tags');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$slug = $this->slug($judul);

			$this->informasi_model->updatepelatihan($id, array('gambar' => $gambar, 'judul' => $judul, 'isi' => $isi, 'tags' => $tags, 'tgl_publikasi' => $tgl_publikasi, 'slug' => $slug));
		}
	}


	public function deletepelatihan()
	{
		$id = $this->input->post('id');
		if ($this->informasi_model->hapuspelatihan($id)) {
			echo json_encode(array('status' => TRUE, 'info' => 'Berhasil hapus pelatihan'));
		} else {
			echo json_encode(array('status' => FALSE, 'info' => 'Gagal hapus pelatihan'));
		}
	}
}
