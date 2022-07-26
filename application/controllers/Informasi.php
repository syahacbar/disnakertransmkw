<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->page_data['page']->title = 'Starter (Blank Page)';
		// $this->page_data['page']->menu = 'starter';
	}

	public function berita()
	{
		$this->page_data['page']->title = 'Berita';
		$this->page_data['page']->submenu = 'berita';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/berita', $this->page_data);
	}

	public function get_berita()
	{
		// $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);
        
        $query  = "SELECT * FROM informasi";
        $search = array('judul','isi','tag');
        $where  = null;
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere);
	}

	public function add_berita()
	{
		$users_id = logged('id');
    	$data = array(
    		'kategori' => "Berita",
    		'judul' => $this->input->post('judul'),
            'isi' => $this->input->post('isi'),
            'tag' => $this->input->post('tag'),
            'tgl_publikasi' => date("Y-m-d"),
            'status' => $this->input->post('status'),
            'users_id' => $users_id,

        );

        $id = $this->pencaker_model->add_berita($data);  

        if($id)
        {  
           $res['hasil'] = 'sukses';
    	   $res['status'] = TRUE;
        }     
        else
        {           
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        echo json_encode($res);
	}

	public function pengumuman()
	{
		$this->page_data['page']->title = 'Pengumuman';
		$this->page_data['page']->submenu = 'pengumuman';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/pengumuman', $this->page_data);
	}

	public function pelatihan()
	{
		$this->page_data['page']->title = 'Pelatihan';
		$this->page_data['page']->submenu = 'pelatihan';
		$this->page_data['page']->menu = 'informasi';
		$this->load->view('informasi/pelatihan', $this->page_data);
	}
}