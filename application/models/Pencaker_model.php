<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencaker_model extends MY_Model
{


	public $table = 'pencaker';

	public function nomorpendaftaran()
	{
		$query = $this->db->query("SELECT RIGHT(nopendaftaran,6) AS nopendaftaran FROM pencaker ORDER BY nopendaftaran DESC LIMIT 1 ");
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$nourut = intval($data->nopendaftaran) + 1;
		} else {
			$nourut = 1;  //cek jika kode belum terdapat pada table
		}

		$tgl = date('dmY');
		$batas = str_pad($nourut, 6, "0", STR_PAD_LEFT);
		$nopendaftaran = "9202" . $tgl . $batas;  //format kode
		return $nopendaftaran;
	}

	function get_kartu_kuning($iduser)
	{
		$query = $this->db->query("SELECT * FROM pencaker p WHERE p.users_id=$iduser");
		return $query->result();
	}

	function get_by_users_id($iduser)
	{
		$this->db->select('*,p.id as idpencaker, u.id as iduser');
		$this->db->from('pencaker p');
		$this->db->join('users u', 'u.id=p.users_id');
		$this->db->where('p.users_id', $iduser);
		$query = $this->db->get();

		return $query->row();
	}

	function get_pencaker_id($users_id)
	{
		$this->db->select('*');
		$this->db->from('pencaker');
		$this->db->where('users_id', $users_id);
		$query = $this->db->get();

		return $query->row();
	}

	function update_keterangan_status($idpencaker, $status)
	{
		$this->db->where('id', $idpencaker);
		$this->db->update('pencaker', array('keterangan_status' => $status));
		return TRUE;
	}

	function delete_pencaker($pencaker_id)
	{
		$this->db->where('id', $pencaker_id);
		$this->db->delete('pencaker');
		return true;
	}

	function delete_minat_jabatan($pencaker_id)
	{
		$this->db->where('pencaker_id', $pencaker_id);
		$this->db->delete('minat_jabatan');
		return true;
	}

	function delete_pendidikan_pencaker($pencaker_id)
	{
		$this->db->where('pencaker_id', $pencaker_id);
		$this->db->delete('pendidikan_pencaker');
		return true;
	}

	function delete_pengalaman_kerja($pencaker_id)
	{
		$this->db->where('pencaker_id', $pencaker_id);
		$this->db->delete('pengalaman_kerja');
		return true;
	}

	function delete_timeline_user($users_id)
	{
		$this->db->where('users_id', $users_id);
		$this->db->delete('timeline_user');
		return true;
	}

	function get_all()
	{
		$query = $this->db->query("SELECT * FROM pencaker p JOIN users u ON u.id=p.users_id");
		return $query->result();
	}

	function get_by_keterangan($ket)
	{
		$query = $this->db->get_where('pencaker', array('keterangan_status' => $ket));
		return $query;
	}

	function update_by_users_id($id, $data)
	{
		$this->db->where('users_id', $id);
		$this->db->update('pencaker', $data);
		return $id;
	}

	function get_pendidikan_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('pendidikan_pencaker');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function add_pendidikan($data)
	{
		$this->db->insert('pendidikan_pencaker', $data);
		return $this->db->insert_id();
	}

	function update_pendidikan($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('pendidikan_pencaker', $data);
		return true;
	}

	function del_pendidikan_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pendidikan_pencaker');
		return true;
	}

	function get_pekerjaan_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('pengalaman_kerja');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function add_pekerjaan($data)
	{
		$this->db->insert('pengalaman_kerja', $data);
		return $this->db->insert_id();
	}

	function update_pekerjaan($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('pengalaman_kerja', $data);
		return true;
	}

	function del_pekerjaan_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pengalaman_kerja');
		return true;
	}

	function get_jabatan_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('minat_jabatan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function add_jabatan($data)
	{
		$this->db->insert('minat_jabatan', $data);
		return $this->db->insert_id();
	}

	function update_jabatan($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('minat_jabatan', $data);
		return true;
	}

	function del_jabatan_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('minat_jabatan');
		return true;
	}




	function add_berita($data)
	{
		$this->db->insert('informasi', $data);
		return $this->db->insert_id();
	}

	function get_dokumen()
	{
		return $this->db->get('dokumen')->result();
	}

	function get_preview_doc($id)
	{
		$query = $this->db->query("SELECT * FROM pencaker_dokumen pd JOIN pencaker p ON p.id=pd.pencaker_id WHERE pd.id='$id'");
		return $query->row();
	}

	function get_jenis_dokumen($iddokumen)
	{
		$this->db->select('jenis_dokumen');
		$this->db->from('dokumen');
		$this->db->where('id', $iddokumen);
		$query = $this->db->get();

		return $query->row();
	}

	function get_pas_foto($pencaker_id)
	{
		$q = $this->db->query("SELECT * FROM pencaker_dokumen pd JOIN dokumen d ON d.id=pd.dokumen_id JOIN pencaker p ON p.id=pd.pencaker_id WHERE d.id = '1' AND p.id=$pencaker_id");
		return $q->row();
	}

	function pencaker_doc($pencaker_id)
	{
		$query  = $this->db->query("SELECT d.*,
                    (SELECT pd.namadokumen FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS namadokumen,
                    (SELECT pd.tgl_upload FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS tgl_upload,
                    (SELECT pd.id FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS pencakerdokumen_id,
                    (SELECT p.nopendaftaran FROM pencaker_dokumen pd JOIN pencaker p ON p.id=pd.pencaker_id WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS nopendaftaran
                    FROM dokumen d");
		return $query->result();
	}

	function get_jenjang_pendidikan()
	{
		$q = $this->db->get('jenjang_pendidikan');
		return $q->result();
	}

	function get_keterampilan_bahasa()
	{
		$q = $this->db->get('keterampilan_bahasa');
		return $q->result();
	}

	function get_timeline($users_id)
	{
		$q = $this->db->query("
			SELECT tl.*,
			(SELECT tu.description FROM timeline_user tu WHERE tu.timeline_id=tl.id AND tu.users_id='$users_id') AS description,
			(SELECT tu.tglwaktu FROM timeline_user tu WHERE tu.timeline_id=tl.id AND tu.users_id='$users_id') AS tglwaktu
			FROM timeline tl");
		return $q->result();
	}

	function get_timeline_by_id($timeline_id, $users_id)
	{
		$q = $this->db->query("SELECT * FROM timeline_user tu WHERE tu.timeline_id=$timeline_id AND tu.users_id=$users_id");
		return $q->row();
	}

	function add_timeline($data)
	{
		$this->db->insert('timeline_user', $data);
		return $this->db->insert_id();
	}

	function get_verifikasi($users_id)
	{
		$q = $this->db->query("SELECT * FROM verifikasi v WHERE v.users_id = $users_id");
		return $q->result();
	}

	function add_verifikasi($data)
	{
		//PR nya supri sekalian belajar lah
		$this->db->insert('verifikasi', $data);
		// return TRUE;
		return $this->db->insert_id();
	}
}
/* End of file Pencaker_model.php */
/* Location: ./application/models/Pencaker_model.php */