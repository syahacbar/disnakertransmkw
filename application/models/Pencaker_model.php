<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencaker_model extends MY_Model {
	

	public $table = 'pencaker';

	function get_by_users_id($id)
    {
        $this->db->select('*');
        $this->db->from('pencaker p');
        $this->db->join('users u', 'u.id=p.users_id');
        $this->db->where('p.users_id',$id);
        $query = $this->db->get();
 
        return $query->row();
    }

    function get_pencaker_id($users_id)
    {
        $this->db->select('id');
        $this->db->from('pencaker');
        $this->db->where('users_id',$users_id);
        $query = $this->db->get();
 
        return $query->row();
    }

    // function fileupload($users_id)
    // {
    //     $this->db->select('*');
    //     $this->db->from('upload');
    //     $this->db->where('users_id',$users_id);
    //     $query = $this->db->get();
 
    //     return $query->row();
    // }

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
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
	}

	function add_pendidikan($data)
	{
		$this->db->insert('pendidikan_pencaker', $data);
		return $this->db->insert_id();
	}

	function update_pendidikan($id,$data)
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
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
	}

	function add_pekerjaan($data)
	{
		$this->db->insert('pengalaman_kerja', $data);
		return $this->db->insert_id();
	}

	function update_pekerjaan($id,$data)
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

	function add_berita($data)
	{
		$this->db->insert('informasi', $data);
		return $this->db->insert_id();
	}



}
/* End of file Pencaker_model.php */
/* Location: ./application/models/Pencaker_model.php */