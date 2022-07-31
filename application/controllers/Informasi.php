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

		$informasi = $this->informasi_model->get_berita();
		$this->page_data['informasi'] = $informasi;
		$this->load->view('informasi/berita', $this->page_data);
	}

	public function get_berita()
	{
		// $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

		$query  = "SELECT * FROM informasi";
		$search = array('judul', 'isi', 'tag');
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
			$tag = $this->input->post('tag');
			$status = $this->input->post('status');
			$tgl_publikasi = date("Y-m-d H:i:s");
			$users_id = $users_id;

			$this->db->insert('informasi', array('gambar' => $gambar, 'kategori' => $kategori, 'judul' => $judul, 'isi' => $isi, 'tag' => $tag, 'status' => $status, 'tgl_publikasi' => $tgl_publikasi, 'users_id' => $users_id));
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

		if ($this->informasi_model->updatestatusberita($id, array('status' => $statusberita))) {
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
		$this->load->view('informasi/pengumuman', $this->page_data);
		// $informasi = $this->informasi_model->get_berita();
		// $this->page_data['informasi'] = $informasi;
	}

	public function pelatihan()
	{
		$this->page_data['page']->title = 'Pelatihan';
		$this->page_data['page']->submenu = 'pelatihan';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/pelatihan', $this->page_data);
	}
}
