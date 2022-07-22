<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pencaker extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->page_data['page']->title = 'Profil Pencari Kerja';
		$this->page_data['page']->menu = 'profil_pencaker';

		$users_id = logged('id');


		$this->load->view('pencaker/profil_pencaker', $this->page_data);
	}
	
	function dokumen_pencaker()
	{
		$this->page_data['page']->title = 'Dokumen Pencari Kerja';
		$this->page_data['page']->menu = 'doc_pencaker';
		$this->load->view('pencaker/dokumen', $this->page_data);
	}

	function get_pencaker()
    {
    	$users_id = logged('id');
        $data = $this->pencaker_model->get_by_users_id($users_id);
        echo json_encode($data);
    }

    function get_pendidikan()
    {
    	$users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);
        
        $query  = "SELECT p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id";
        $search = array('pd.nama_sekolah','pd.keterampilan');
        $where  = array('pd.pencaker_id' => $pencaker_id->id);
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere);
    }

    function get_pendidikan_by_id($idpendidikan)
    {
    	$data  = $this->pencaker_model->get_pendidikan_by_id($idpendidikan);
        echo json_encode($data);
    }

    function add_pendidikan()
    {
    	$users_id = logged('id');
    	$pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
    	$data = array(
    		'pencaker_id' => $pencaker_id,
            'tahunmasuk' => $this->input->post('tahunmasuk'),
            'tahunlulus' => $this->input->post('tahunlulus'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'jenjang' => $this->input->post('jenjang'),
            'ipk' => $this->input->post('ipk'),
            'keterampilan' => $this->input->post('keterampilan'),
        );

       $this->pencaker_model->add_pendidikan($data);  
       $res['hasil'] = 'sukses';
	   $res['status'] = TRUE;
	   echo json_encode($res);
    }

    function update_pendidikan()
    {
    	$idpendidikan = $this->input->post('idpendidikan');
    	$data = array(
            'tahunmasuk' => $this->input->post('tahunmasuk'),
            'tahunlulus' => $this->input->post('tahunlulus'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'jenjang' => $this->input->post('jenjang'),
            'ipk' => $this->input->post('ipk'),
            'keterampilan' => $this->input->post('keterampilan'),
        );

       $update = $this->pencaker_model->update_pendidikan($idpendidikan,$data);  
       if($update)
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

    function del_pendidikan_by_id($idpendidikan)
    {
    	$del  = $this->pencaker_model->del_pendidikan_by_id($idpendidikan);
    	if($del)
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

    function get_pekerjaan()
    {
    	$users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);
        
        $query  = "SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id";
        $search = array('pk.instansi','pk.jabatan');
        $where  = array('pk.pencaker_id' => $pencaker_id->id);
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere);
    }

    function get_pekerjaan_by_id($idpekerjaan)
    {
    	$data  = $this->pencaker_model->get_pekerjaan_by_id($idpekerjaan);
        echo json_encode($data);
    }

    function add_pekerjaan()
    {
    	$users_id = logged('id');
    	$pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
    	$data = array(
    		'pencaker_id' => $pencaker_id,
            'tahunmasuk' => $this->input->post('tahunmasukkerja'),
            'tahunkeluar' => $this->input->post('tahunkeluarkerja'),
            'instansi' => $this->input->post('instansi'),
            'jabatan' => $this->input->post('jabatan'),
        );

        $id = $this->pencaker_model->add_pekerjaan($data);  
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

    function update_pekerjaan()
    {
    	$idpekerjaan = $this->input->post('idpekerjaan');
    	$data = array(
            'tahunmasuk' => $this->input->post('tahunmasukkerja'),
            'tahunkeluar' => $this->input->post('tahunkeluarkerja'),
            'instansi' => $this->input->post('instansi'),
            'jabatan' => $this->input->post('jabatan'),
        );

       $update = $this->pencaker_model->update_pekerjaan($idpekerjaan,$data);  
       if($update)
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

    function del_pekerjaan_by_id($idpekerjaan)
    {
    	$del  = $this->pencaker_model->del_pekerjaan_by_id($idpekerjaan);
    	if($del)
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

    function update1()
    {
        $users_id = logged('id');
    	$data = array(
            'tujuan' => $this->input->post('tujuan'),
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);  
        if($update)
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

    function update2()
    {
        $users_id = logged('id');
    	$data = array(
            'nik' => $this->input->post('nik'),
            'namalengkap' => $this->input->post('namalengkap'),
            'jenkel' => $this->input->post('jenkel'),
            'tempatlahir' => $this->input->post('tempatlahir'),
            'tgllahir' => $this->input->post('tgllahir'),
            'statusnikah' => $this->input->post('statusnikah'),
            'tinggibadan' => $this->input->post('tinggibadan'),
            'beratbadan' => $this->input->post('beratbadan'),
            'alamat' => $this->input->post('alamat'),
            'kodepos' => $this->input->post('kodepos'),
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);  
        if($update)
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
}