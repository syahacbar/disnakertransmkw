<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencaker extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	// public function index()
	// {
	// 	$this->load->view('blank_page', $this->page_data);
	// }

	// public function formpencaker()
	// {
	// 	$this->page_data['page']->title = 'Profil Pencari Kerja';
	// 	$this->page_data['page']->menu = 'form_pencaker';
	// 	$this->load->view('pencaker/form_pencaker', $this->page_data);
	// }

	public function index()
	{
		$this->page_data['page']->title = 'Profil Pencari Kerja';
		$this->page_data['page']->menu = 'profil_pencaker';


		$this->load->view('pencaker/profil_pencaker', $this->page_data);
	}
	
	public function dokumen_pencaker()
	{
		$this->page_data['page']->title = 'Dokumen Pencari Kerja';
		$this->page_data['page']->menu = 'doc_pencaker';
		$this->load->view('pencaker/dokumen', $this->page_data);
	}

	public function get_pencaker()
    {
    	$users_id = logged('id');
        $data = $this->pencaker_model->get_by_users_id($users_id);
        echo json_encode($data);
    }

    public function update_pencaker()
    {
        $users_id = logged('id');
        $tujuan = $this->input->post('tujuan');
    	$data = array(
            'tujuan' => $tujuan,
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);  
        if($update)
        {        	
	    	$res['hasil'] = 'sukses';
	        $res['status'] = TRUE;
	        $res['tujuan'] = $tujuan;
        }     
        else
        {        	
	    	$res['hasil'] = 'gagal';
	        $res['status'] = FALSE;
        }

        echo json_encode($res);
    }
}