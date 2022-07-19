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

    function update_by_users_id($id, $data)
	{
		$this->db->where('users_id', $id);
		$this->db->update('pencaker', $data);
		return $id;
	}

}
/* End of file Pencaker_model.php */
/* Location: ./application/models/Pencaker_model.php */