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
        	$pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

			$this->page_data['keterangan_status'] = $pencaker_id->keterangan_status;
			$this->page_data['dokumen'] = $this->pencaker_model->pencaker_doc($pencaker_id->id);
			$this->page_data['timeline'] = $this->pencaker_model->get_timeline($users_id);
			$this->load->view('dashboard_new', $this->page_data);
		}
		elseif (hasPermissions('dash_admin'))
		{
			$q_pendidikan_terakhir = $this->db->query("SELECT jp.jenjang, (SELECT COUNT(pd.id) FROM pendidikan_pencaker pd WHERE pd.jenjang_pendidikan_id=jp.id) AS total FROM jenjang_pendidikan jp");
			$q_umur = $this->db->query("SELECT (YEAR(CURDATE())-YEAR(tgllahir)) AS umur, COUNT((YEAR(CURDATE())-YEAR(tgllahir))) AS jumlah  FROM pencaker GROUP BY umur ORDER BY umur ASC");

			$this->page_data['q_pendidikan_terakhir'] = $q_pendidikan_terakhir->result();
			$this->page_data['q_umur'] = $q_umur->result();

			$this->page_data['aktif'] = $this->pencaker_model->get_by_keterangan("Aktif")->num_rows();
			$this->page_data['bekerja'] = $this->pencaker_model->get_by_keterangan("Bekerja")->num_rows();
			$this->page_data['lapor'] = $this->pencaker_model->get_by_keterangan("Lapor")->num_rows();;
			$this->page_data['verifikasi'] = $this->pencaker_model->get_by_keterangan("Verifikasi")->num_rows();
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