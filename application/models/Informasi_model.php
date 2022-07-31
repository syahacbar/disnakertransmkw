<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends MY_Model
{

	function get_berita($tag = NULL)
	{
		if ($tag != NULL) {
			$this->db->where('kategori', 'Berita');
			$this->db->like('tags', $tag);
			$q = $this->db->get('informasi');
		} else {
			$this->db->where('kategori', 'Berita');
			$q = $this->db->get('informasi');
		}
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
		$query = $this->db->get_where('informasi', array('slug' => $slug), 1);
		return $query->row();
	}

	function hapusberita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('informasi');
		return true;
	}

	function updateberita($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}


	function get_pengumuman($tag = NULL)
	{
		if ($tag != NULL) {
			$this->db->where('kategori', 'Pengumuman');
			$this->db->like('tags', $tag);
			$q = $this->db->get('informasi');
		} else {
			$this->db->where('kategori', 'Pengumuman');
			$q = $this->db->get('informasi');
		}
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
		$query = $this->db->get_where('informasi', array('slug' => $slug), 1);
		return $query->row();
	}

	function hapuspengumuman($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('informasi');
		return true;
	}

	function updatestatuspengumuman($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}
}
