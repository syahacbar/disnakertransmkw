<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends MY_Model
{

	function get_informasi($kategori, $status = NULL)
	{
		if ($status != NULL) {
			$this->db->where('status', $status);
		}

		$this->db->where('kategori', $kategori);
		$q = $this->db->get('informasi');

		return $q->result();
	}


	function get_informasi_by_tag($tag, $status = NULL)
	{
		if ($status != NULL) {
			$this->db->where('status', $status);
		}

		$this->db->like('tags', $tag);
		$q = $this->db->get('informasi');

		return $q->result();
	}

	function get_informasi_by_slug($slug)
	{
		$query = $this->db->get_where('informasi', array('slug' => $slug), 1);
		return $query->row();
	}

	function get_informasi_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('informasi');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function get_count_informasi($kategori, $status)
	{
		$this->db->where('kategori', $kategori);
		$this->db->where('status', $status);
		$q = $this->db->get('informasi');
		return $q->num_rows();
	}

	function get_count_pelatihan($status)
	{
		$this->db->where('status', $status);
		$q = $this->db->get('pelatihan');
		return $q->num_rows();
	}

	function update_informasi($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}

	function delete_informasi($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('informasi');
		return $id;
	}

	function get_jenis_pelatihan()
	{
		$q = $this->db->query("SELECT DISTINCT jp.* FROM jenis_pelatihan jp JOIN pelatihan p ON p.jenis_pelatihan_kode=jp.kode");
		return $q->result();
	}

	function get_pelatihan($status = NULL)
	{
		$this->db->from('pelatihan p');
		if ($status != NULL) {
			$this->db->where('status', $status);
		}
		$this->db->join('jenis_pelatihan jp', 'jp.kode=p.jenis_pelatihan_kode');
		$q = $this->db->get();
		return $q->result();
	}

	function get_pelatihan_by_slug($slug)
	{
		$query = $this->db->get_where('pelatihan', array('slug' => $slug), 1);
		return $query->row();
	}

	function get_pelatihan_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('pelatihan');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function get_jenis_pelatihan_kode($jp)
	{
		$query = $this->db->get_where('pelatihan', array('jenis_pelatihan_kode' => $jp, 'kategori' => 'Pengumuman'), 1);
		return $query->row();
	}


	function update_pelatihan($idpelatihan, $data)
	{
		$this->db->where('id', $idpelatihan);
		$this->db->update('pelatihan', $data);
		return $idpelatihan;
	}

	function delete_pelatihan($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('pelatihan');
		return true;
	}
}
