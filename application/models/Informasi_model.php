<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi_model extends MY_Model {

	function get_berita()
	{
		$this->db->where('kategori','Berita');
		$q = $this->db->get('informasi');
		return $q->result();
	}

	function get_berita_by_id($id)
	{
		$this->db->select('*');
        $this->db->from('informasi');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
	}

	function hapusberita($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('informasi');
		return true;
	}

	function updatestatusberita($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('informasi', $data);
		return $id;
	}
}
