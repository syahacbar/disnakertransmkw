<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencaker_model extends MY_Model {
	

	public $table = 'pencaker';

    public function nomorpendaftaran()
    {
        $query = $this->db->query("SELECT RIGHT(nopendaftaran,6) AS nopendaftaran FROM pencaker ORDER BY nopendaftaran DESC LIMIT 1 ");
        if($query->num_rows() <> 0)
        { 
            $data = $query->row();      
            $nourut = intval($data->nopendaftaran) + 1; 
        } else {      
            $nourut = 1;  //cek jika kode belum terdapat pada table
        }

        $tgl=date('dmY'); 
        $batas = str_pad($nourut, 6, "0", STR_PAD_LEFT);    
        $nopendaftaran = "9202".$tgl.$batas;  //format kode
        return $nopendaftaran;  
    }

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

    function get_pencaker_nik($users_id)
    {
        $this->db->select('nik');
        $this->db->from('pencaker');
        $this->db->where('users_id',$users_id);
        $query = $this->db->get();
 
        return $query->row();
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

	function get_jabatan_by_id($id)
	{
		$this->db->select('*');
        $this->db->from('minat_jabatan');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row();
	}

	function add_jabatan($data)
	{
		$this->db->insert('minat_jabatan', $data);
		return $this->db->insert_id();
	}

	function update_jabatan($id,$data)
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
		$query = $this->db->get_where('pencaker_dokumen', array('id' => $id));
		return $query->row();
	}

    function get_jenis_dokumen($iddokumen)
    {
        $this->db->select('jenis_dokumen');
        $this->db->from('dokumen');
        $this->db->where('id',$iddokumen);
        $query = $this->db->get();
 
        return $query->row();
    }
}
/* End of file Pencaker_model.php */
/* Location: ./application/models/Pencaker_model.php */