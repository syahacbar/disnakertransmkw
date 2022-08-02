<?php
defined('BASEPATH') or exit('No direct script access allowed');
 
class Informasi_model extends MY_Model
{

	function get_informasi($tag)
	{
		$this->db->like('tags', $tag);
		$q = $this->db->get('informasi');

		return $q->result();
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

	function get_berita()
	{
		$this->db->where('kategori', 'Berita');
		$q = $this->db->get('informasi');
		
		return $q->result();
	}

	function get_berita_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('informasi');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function get_berita_by_slug($slug)
	{
		$query = $this->db->get_where('informasi', array('slug' => $slug, 'kategori' => 'Berita'), 1);
		return $query->row();
	}

	function hapusberita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('informasi');
		return true;
	}

	function updateberita($idberita, $data)
	{
		$this->db->where('id', $idberita);
		$this->db->update('informasi', $data);
		return $idberita;
	}


	function get_pengumuman()
	{
		$this->db->where('kategori', 'Pengumuman');
		$q = $this->db->get('informasi');

		return $q->result();
	}

	function get_pengumuman_by_id($id)
	{
		$this->db->select('*');
		$this->db->from('informasi');
		$this->db->where('id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	function get_pengumuman_by_slug($slug)
	{
		$query = $this->db->get_where('informasi', array('slug' => $slug, 'kategori' => 'Pengumuman'), 1);
		return $query->row();
	}

	function hapuspengumuman($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('informasi');
		return true;
	}
	function updatepengumuman($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}

	function updatestatuspengumuman($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}

	function get_pelatihan()
	{
		$q = $this->db->get('pelatihan');
		return $q->result();
	}

	function get_pelatihan_by_slug($slug)
	{
		$query = $this->db->get_where('informasi', array('slug' => $slug, 'kategori' => 'Pengumuman'), 1);
		return $query->row();
	}
}
