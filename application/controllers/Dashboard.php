<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->page_data['page']->title = 'Dashboard';
		$this->page_data['page']->menu = 'dashboard';
	}

	public function index()
	{
		if (hasPermissions('dash_user')) {
			$users_id = logged('id');
			$pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

			$this->page_data['keterangan_status'] = $pencaker_id->keterangan_status;
			$this->page_data['dokumen'] = $this->pencaker_model->pencaker_doc($pencaker_id->id);
			$this->page_data['timeline'] = $this->pencaker_model->get_timeline($users_id);
			$this->page_data['verifikasi'] = $this->pencaker_model->get_verifikasi($users_id);
			$this->load->view('dashboard_new', $this->page_data);

		} elseif (hasPermissions('dash_admin')) {

			$q_pendidikan_terakhir = $this->db->query("SELECT jp.jenjang, (SELECT COUNT(pd.id) FROM pendidikan_pencaker pd WHERE pd.jenjang_pendidikan_id=jp.id) AS total FROM jenjang_pendidikan jp");
			$q_umur = $this->db->query("SELECT (YEAR(CURDATE())-YEAR(tgllahir)) AS umur, COUNT((YEAR(CURDATE())-YEAR(tgllahir))) AS jumlah  FROM pencaker GROUP BY umur ORDER BY umur ASC");
			$q_laki = $this->db->query("SELECT  MONTH(u.created_at) AS bulan, COUNT(u.id) AS jumlah FROM pencaker p JOIN users u ON u.id=p.users_id WHERE p.jenkel='L' GROUP BY bulan;");
			$q_perempuan = $this->db->query("SELECT  MONTH(u.created_at) AS bulan, COUNT(u.id) AS jumlah FROM pencaker p JOIN users u ON u.id=p.users_id WHERE p.jenkel='P' GROUP BY bulan;");

			$this->page_data['q_pendidikan_terakhir'] = $q_pendidikan_terakhir->result();
			$this->page_data['q_umur'] = $q_umur->result();
			$this->page_data['q_laki'] = $q_laki->result();
			$this->page_data['q_perempuan'] = $q_perempuan->result();

			//status keterangan pencaker
			$this->page_data['c_aktif'] = $this->pencaker_model->get_by_keterangan("Aktif")->num_rows();
			$this->page_data['c_bekerja'] = $this->pencaker_model->get_by_keterangan("Bekerja")->num_rows();
			$this->page_data['c_lapor'] = $this->pencaker_model->get_by_keterangan("Lapor")->num_rows();;
			$this->page_data['c_verifikasi'] = $this->pencaker_model->get_by_keterangan("Verifikasi")->num_rows();
			$this->page_data['c_validasi'] = $this->pencaker_model->get_by_keterangan("Validasi")->num_rows();
			$this->page_data['c_registrasi'] = $this->pencaker_model->get_by_keterangan("Registrasi")->num_rows();


			$this->load->view('dashboard', $this->page_data);

		} else {
			$this->load->view('errors/html/error_403_permission', $this->page_data);
		}
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */