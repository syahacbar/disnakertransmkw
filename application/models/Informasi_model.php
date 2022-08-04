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

	function get_count_informasi($kategori)
	{
		$this->db->where('kategori', $kategori);
		$q = $this->db->get('informasi');
		return $q->num_rows();
	}

	function get_count_pelatihan()
	{
		$q = $this->db->get('pelatihan');
		return $q->num_rows();
	}

	function update_informasi($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}

	function delete_informasi($idberita)
	{
		$this->db->where('id', $idberita);
		$this->db->delete('informasi');
		return $idberita;
	}

	// function get_berita_by_slug($slug)
	// {
	// 	$query = $this->db->get_where('informasi', array('slug' => $slug, 'kategori' => 'Berita'), 1);
	// 	return $query->row();
	// }

	// function get_berita_by_status()
	// {
	// 	$this->db->where('status', 1);
	// 	$q = $this->db->get('informasi');

	// 	return $q->result();
	// }

	// function hapusberita($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('informasi');
	// 	return true;
	// }

	// function updateberita($idberita, $data)
	// {
	// 	$this->db->where('id', $idberita);
	// 	$this->db->update('informasi', $data);
	// 	return $idberita;
	// }


	// function get_pengumuman()
	// {
	// 	$this->db->where('kategori', 'Pengumuman');
	// 	$q = $this->db->get('informasi');

	// 	return $q->result();
	// }

	// function get_pengumuman_by_id($id)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('informasi');
	// 	$this->db->where('id', $id);
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// function get_pengumuman_by_slug($slug)
	// {
	// 	$query = $this->db->get_where('informasi', array('slug' => $slug, 'kategori' => 'Pengumuman'), 1);
	// 	return $query->row();
	// }

	// function hapuspengumuman($id)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->delete('informasi');
	// 	return true;
	// }

	// function updatepengumuman($idpengumuman, $data)
	// {
	// 	$this->db->where('id', $idpengumuman);
	// 	$this->db->update('informasi', $data);
	// 	return $idpengumuman;
	// }

	// function updatestatuspengumuman($id, $data)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->update('informasi', $data);
	// 	return $id;
	// }
	function get_jenis_pelatihan()
	{
		$q = $this->db->get('jenis_pelatihan');
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

	// function update_pelatihan($id, $data)
	// {
	// 	$this->db->where('id', $id);
	// 	$this->db->update('pelatihan', $data);
	// 	return $id;
	// }

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
