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
        ifPermissions('profil_pencaker');
		$this->page_data['page']->title = 'Profil Pencari Kerja';
		$this->page_data['page']->menu = 'profil_pencaker';

		$users_id = logged('id');

		$this->load->view('pencaker/profil_pencaker', $this->page_data);
	}

	function formulir_ak1()
	{
		$this->page_data['page']->title = 'Printout Form AK-1';
		$this->page_data['page']->menu = 'doc_pencaker';
		$this->load->view('printout/formulirak1', $this->page_data);
	}
	function kartukuning_1()
	{
		$this->page_data['page']->title = 'Printout Form AK-1';
		$this->page_data['page']->menu = 'doc_pencaker';
		$this->load->view('printout/kartukuning1', $this->page_data);
	}

	function kartukuning_2()
	{
		$this->page_data['page']->title = 'Printout Form AK-1';
		$this->page_data['page']->menu = 'doc_pencaker';
		$this->load->view('printout/kartukuning2', $this->page_data);
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

        $id = $this->pencaker_model->add_pendidikan($data);  

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
    
    function dok_pencaker()
    {
        ifPermissions('doc_pencaker');
        $this->page_data['page']->title = 'Dokumen Pencari Kerja';
        $this->page_data['page']->menu = 'doc_pencaker';
        $this->page_data['dokumen'] = $this->pencaker_model->get_dokumen();
        $this->load->view('pencaker/dokumen', $this->page_data);
    }

    function upload_dokumen()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
        $pencaker_nik = $this->pencaker_model->get_pencaker_nik($users_id)->nik;
        $jenis_dokumen = $this->pencaker_model->get_jenis_dokumen($this->input->post('doc_category'))->jenis_dokumen;

        $newfilename = $jenis_dokumen."_".$pencaker_nik;

        // $config['upload_path']   = FCPATH.'uploads/pencaker';
        // $config['allowed_types'] = '*';
        // $config['file_name'] = $newfilename;
        // $this->load->library('upload',$config);

        //$this->uploadlib->uploadImage('image', '/users');
        $this->uploadlib->initialize([
                'file_name' => $newfilename
            ]);

        if($this->uploadlib->uploadImage('dokumenpencaker', '/pencaker')){
            $filedokumen=$this->upload->data('file_name');
            $namadokumen=$this->input->post('doc_name');
            $token=$this->input->post('token_pasfoto');
            $dokumen_id=$this->input->post('doc_category');
            $uploaded_on=date("Y-m-d H:i:s");
            $this->db->insert('pencaker_dokumen',array('namadokumen'=>$filedokumen, 'token'=>$token, 'dokumen_id'=>$dokumen_id, 'tgl_upload'=>$uploaded_on, 'pencaker_id'=>$pencaker_id));
        }
    }

 
    function get_dokumen()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
        
        $query  = "SELECT d.*,
                    (SELECT pd.namadokumen FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS namadokumen,
                    (SELECT pd.tgl_upload FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS tgl_upload
                    FROM dokumen d";
        $search = array('d.jenis_dokumen');
        $where  = NULL;
        
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query,$search,$where,$isWhere);
    }
}