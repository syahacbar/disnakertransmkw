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
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;

        $querybahasa  = $this->db->query("SELECT * FROM pencaker WHERE id='$pencaker_id'");

        $this->page_data['page']->title = 'Profil Pencari Kerja';
        $this->page_data['page']->menu = 'profil_pencaker';
        $this->page_data['jenjang_pendidikan'] = $this->pencaker_model->get_jenjang_pendidikan();
        $this->page_data['ket_bahasa'] = $this->pencaker_model->get_keterampilan_bahasa();
        $this->page_data['ket_bahasa_pencaker'] = $querybahasa->row();

        $this->load->view('pencaker/profil_pencaker', $this->page_data);
    }

    // function formulir_ak1($iduser)
    // {
    //     $pencaker_id = $this->pencaker_model->get_pencaker_id($iduser);

    //     //$pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker_id);

    //     $q_pendidikan = $this->db->query("SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id WHERE pd.pencaker_id = $pencaker_id->id ORDER BY jp.id ASC");
    //     $q_pekerjaan = $this->db->query("SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id WHERE pk.pencaker_id = $pencaker_id->id");
    //     $q_minat_jabatan = $this->db->query("SELECT mj.* FROM pencaker p JOIN minat_jabatan mj ON mj.pencaker_id=p.id WHERE p.id = $pencaker_id->id");

    //     $this->page_data['pencaker'] = $this->pencaker_model->get_by_users_id($iduser);
    //     $this->page_data['pendidikan_pencaker'] = $q_pendidikan->result();
    //     $this->page_data['pekerjaan_pencaker'] = $q_pekerjaan->result();
    //     $this->page_data['minat_jabatan'] = $q_minat_jabatan->result();

    //     //$this->page_data['p_dok'] =  $pencaker_dokumen;

    //     $this->page_data['page']->title = 'Review Pencaker';
    //     $this->page_data['page']->menu = 'doc_pencaker';
    //     $this->load->view('printout/formulirak1', $this->page_data);
    // }

    public function pencari_kerja()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

        $pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker_id);
        $this->page_data['pencaker'] = $this->pencaker_model->get_all();
        $this->page_data['users'] = $this->users_model->get();

        $data = $this->pencaker_model->get_by_users_id($users_id);
        echo json_encode($data);

        $this->page_data['dokumen_pencaker'] =  $pencaker_dokumen;
        $this->page_data['page']->title = 'Data Pencari Kerja';
        $this->page_data['page']->menu = 'pencari_kerja';
        $this->load->view('pencaker/pencari_kerja', $this->page_data);
    }

    public function hapus_pencari_kerja($id)
    {
        $users_id = logged('id');
        $del  = $this->pencaker_model->delete_pencaker($id);
        if ($del) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id menghapus data Pendidikan Pencaker");
        echo json_encode($res);

        redirect('pencaker/pencari_kerja');
    }

    // function kartukuning_1($iduser)
    // {
    //     $pencaker_id = $this->pencaker_model->get_pencaker_id($iduser);

    //     $q_pendidikan = $this->db->query("SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id WHERE pd.pencaker_id = $pencaker_id->id ORDER BY jp.id ASC");
    //     $q_pekerjaan = $this->db->query("SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id WHERE pk.pencaker_id = $pencaker_id->id");

    //     $this->page_data['pencaker'] = $this->pencaker_model->get_by_users_id($iduser);
    //     $this->page_data['pendidikan_pencaker'] = $q_pendidikan->result();
    //     $this->page_data['pekerjaan_pencaker'] = $q_pekerjaan->result();
    //     $this->page_data['page']->title = 'Printout Form AK-1';
    //     $this->page_data['page']->menu = 'doc_pencaker';
    //     $this->load->view('printout/kartukuning1', $this->page_data);
    // }

    function kartu_pencaker($iduser)
    {
        $pencaker_id = $this->pencaker_model->get_pencaker_id($iduser);

        $q_pendidikan = $this->db->query("SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id WHERE pd.pencaker_id = $pencaker_id->id ORDER BY jp.id ASC");
        $q_pekerjaan = $this->db->query("SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id WHERE pk.pencaker_id = $pencaker_id->id");

        $this->page_data['pencaker'] = $this->pencaker_model->get_by_users_id($iduser);
        $this->page_data['pasfoto'] = $this->pencaker_model->get_pas_foto($pencaker_id->id);
        $this->page_data['pendidikan_pencaker'] = $q_pendidikan->result();
        $this->page_data['pekerjaan_pencaker'] = $q_pekerjaan->result();
        $this->page_data['page']->title = 'Kartu Pencari Kerja';
        $this->page_data['page']->menu = 'doc_pencaker';
        $this->load->view('printout/kartu_pencaker', $this->page_data);
    }

    // function kartukuning_2()
    // {
    //     $this->page_data['page']->title = 'Printout Form AK-1';
    //     $this->page_data['page']->menu = 'doc_pencaker';
    //     $this->load->view('printout/kartukuning2', $this->page_data);
    // }

    function review_pencaker($iduser)
    {
        $pencaker_id = $this->pencaker_model->get_pencaker_id($iduser);

        $pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker_id->id);

        $q_pendidikan = $this->db->query("SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id WHERE pd.pencaker_id = $pencaker_id->id ORDER BY jp.id ASC");
        $q_pekerjaan = $this->db->query("SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id WHERE pk.pencaker_id = $pencaker_id->id");
        $q_minat_jabatan = $this->db->query("SELECT mj.* FROM pencaker p JOIN minat_jabatan mj ON mj.pencaker_id=p.id WHERE p.id = $pencaker_id->id");

        $this->page_data['pencaker'] = $this->pencaker_model->get_by_users_id($iduser);
        $this->page_data['pendidikan_pencaker'] = $q_pendidikan->result();
        $this->page_data['pekerjaan_pencaker'] = $q_pekerjaan->result();
        $this->page_data['minat_jabatan'] = $q_minat_jabatan->result();

        $this->page_data['dokumen_pencaker'] =  $pencaker_dokumen;

        $this->page_data['page']->title = 'Review Pencaker';
        $this->page_data['page']->menu = 'doc_pencaker';
        $this->load->view('printout/review', $this->page_data);
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

        $query  = "SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id";
        $search = array('pd.nama_sekolah', 'pd.keterampilan');
        $where  = array('pd.pencaker_id' => $pencaker_id->id);
        $set_order = "ORDER BY jp.id ASC";

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere, $set_order);
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
            'jenjang_pendidikan_id' => $this->input->post('jenjang'),
            'ipk' => $this->input->post('ipk'),
            'keterampilan' => $this->input->post('keterampilan'),
        );

        $id = $this->pencaker_model->add_pendidikan($data);

        if ($id) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id menambah data Pendidikan Pencaker");
        echo json_encode($res);
    }

    function update_pendidikan()
    {
        $users_id = logged('id');
        $idpendidikan = $this->input->post('idpendidikan');
        $data = array(
            'tahunmasuk' => $this->input->post('tahunmasuk'),
            'tahunlulus' => $this->input->post('tahunlulus'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'jenjang_pendidikan_id' => $this->input->post('jenjang'),
            'ipk' => $this->input->post('ipk'),
            'keterampilan' => $this->input->post('keterampilan'),
        );

        $update = $this->pencaker_model->update_pendidikan($idpendidikan, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id memperbarui data Pendidikan Pencaker");
        echo json_encode($res);
    }

    function del_pendidikan_by_id($idpendidikan)
    {
        $users_id = logged('id');
        $del  = $this->pencaker_model->del_pendidikan_by_id($idpendidikan);
        if ($del) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id menghapus data Pendidikan Pencaker");
        echo json_encode($res);
    }

    function get_pekerjaan()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

        $query  = "SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id";
        $search = array('pk.instansi', 'pk.jabatan');
        $where  = array('pk.pencaker_id' => $pencaker_id->id);
        $set_order = "ORDER BY pk.tahunmasuk ASC";
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere, $set_order);
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
        if ($id) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id menambah data Pekerjaan Pencaker");
        echo json_encode($res);
    }

    function update_pekerjaan()
    {
        $users_id = logged('id');
        $idpekerjaan = $this->input->post('idpekerjaan');
        $data = array(
            'tahunmasuk' => $this->input->post('tahunmasukkerja'),
            'tahunkeluar' => $this->input->post('tahunkeluarkerja'),
            'instansi' => $this->input->post('instansi'),
            'jabatan' => $this->input->post('jabatan'),
        );

        $update = $this->pencaker_model->update_pekerjaan($idpekerjaan, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id memperbarui data Pekerjaan Pencaker");
        echo json_encode($res);
    }

    function del_pekerjaan_by_id($idpekerjaan)
    {
        $users_id = logged('id');
        $del  = $this->pencaker_model->del_pekerjaan_by_id($idpekerjaan);
        if ($del) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id menghapus data Pekerjaan Pencaker");
        echo json_encode($res);
    }

    function get_jabatan()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

        $query  = "SELECT p.users_id, mj.* FROM pencaker p JOIN minat_jabatan mj ON mj.pencaker_id=p.id";
        $search = array('mj.nama_jabatan');
        $where  = array('mj.pencaker_id' => $pencaker_id->id);
        $set_order = "ORDER BY mj.id ASC";
        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere, $set_order);
    }

    function get_jabatan_by_id($idjabatan)
    {
        $data  = $this->pencaker_model->get_jabatan_by_id($idjabatan);
        echo json_encode($data);
    }

    function add_jabatan()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
        $data = array(
            'pencaker_id' => $pencaker_id,
            'nama_jabatan' => $this->input->post('minat_jabatan'),
        );

        $id = $this->pencaker_model->add_jabatan($data);
        if ($id) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id menambah data Jabatan Pencaker");
        echo json_encode($res);
    }

    function update_jabatan()
    {
        $users_id = logged('id');
        $idjabatan = $this->input->post('idjabatan');
        $data = array(
            'nama_jabatan' => $this->input->post('minat_jabatan'),
        );

        $update = $this->pencaker_model->update_jabatan($idjabatan, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id memperbarui data Jabatan Pencaker");
        echo json_encode($res);
    }

    function del_jabatan_by_id($idjabatan)
    {
        $users_id = logged('id');
        $del  = $this->pencaker_model->del_jabatan_by_id($idjabatan);
        if ($del) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id menghapus data Jabatan Pencaker");
        echo json_encode($res);
    }

    function get_bahasa_pencaker()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;

        $query  = $this->db->query("SELECT keterampilan_bahasa FROM pencaker WHERE id='$pencaker_id'");
        $bahasa = $query->result();
        $data['bahasa'] = $bahasa;
        $data['hasil'] = "sukses";
        echo json_encode($data);
    }

    function update1()
    {
        $users_id = logged('id');
        $data = array(
            'tujuan' => $this->input->post('tujuan'),
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
            $this->activity_model->add("User #$users_id memperbarui data tujuan pembuatan kartu kuning");
        } else {
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
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id memperbarui data identitas/ket. umum Pencaker");
        echo json_encode($res);
    }

    function update4()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;

        $ket_bahasa = $this->input->post('ket_bahasa');
        $arr_bahasa = array();
        for ($i = 0; $i < count($ket_bahasa); $i++) {
            $arr_bahasa[$i] = $ket_bahasa[$i];
        }
        $gabung_bhs = implode(",", $arr_bahasa);
        $this->db->where('id', $pencaker_id);
        $this->db->update('pencaker', array('keterampilan_bahasa' => $gabung_bhs));

        //bahasa lainnya
        $bahasa_lainnya = $this->input->post('txt_bahasa_lainnya');
        if ($bahasa_lainnya != NULL) {
            $this->db->where('id', $pencaker_id);
            $this->db->update('pencaker', array('bahasa_lainnya' => $bahasa_lainnya));
        }

        // $cb_bhslain = $this->input->post('checkboxbahasalainnya');
        // $txt_bhslain = $this->input->post('txt_bahasa_lainnya');
        // if ($cb_bhslain == 'bahasa_lain') {
        //     $this->pencaker_model->update_by_users_id($users_id, array('bahasa_lainnya' => $txt_bhslain));
        // } else {
        //     $this->pencaker_model->update_by_users_id($users_id, array('bahasa_lainnya' => ''));
        // }


        $res['hasil'] = 'sukses';
        $res['status'] = TRUE;

        $this->activity_model->add("User #$users_id memperbarui data keterampilan bahasa");
        echo json_encode($res);
    }

    function update6()
    {
        $users_id = logged('id');
        $data = array(
            'lokasi_jabatan' => $this->input->post('lokasi_jabatan'),
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id memperbarui data lokasi jabatan");
        echo json_encode($res);
    }

    function update7()
    {
        $users_id = logged('id');
        $data = array(
            'tujuan_perusahaan' => $this->input->post('tujuan_perusahaan'),
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id memperbarui data tujuan perusahaan");
        echo json_encode($res);
    }

    function update8()
    {
        $users_id = logged('id');
        $data = array(
            'catatan_pengantar' => $this->input->post('catatan_pengantar'),
        );

        $update = $this->pencaker_model->update_by_users_id($users_id, $data);
        if ($update) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
            $this->session->set_flashdata('alert-type', 'success');
            $this->session->set_flashdata('alert', 'Profile has been Updated Successfully');
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }

        $this->activity_model->add("User #$users_id memperbarui data catatan pengantar");
        echo json_encode($res);
    }

    function dok_pencaker()
    {
        ifPermissions('doc_pencaker');

        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;


        $pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker_id);
        $this->page_data['pencaker_dokumen'] = $pencaker_dokumen;
        $this->page_data['page']->title = 'Dokumen Pencari Kerja';
        $this->page_data['page']->menu = 'doc_pencaker';
        $this->page_data['dokumen'] = $this->pencaker_model->get_dokumen();
        $this->load->view('pencaker/dokumen', $this->page_data);
    }

    function upload_dokumen()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;
        $iddokumen = $this->input->post('iddokumen');
        $pencaker_nopendaftaran = $this->pencaker_model->get_by_users_id($users_id)->nopendaftaran;
        $jenisdokumen = $this->pencaker_model->get_jenis_dokumen($iddokumen)->jenis_dokumen;


        if (!is_dir('uploads/pencaker/' . $pencaker_nopendaftaran)) {
            mkdir('./uploads/pencaker/' . $pencaker_nopendaftaran, 0777, TRUE);
        }

        $newfilename = $pencaker_nopendaftaran . "_" . $jenisdokumen;

        $this->uploadlib->initialize([
            'file_name' => $newfilename
        ]);

        if ($this->uploadlib->uploadImage('dokumenpencaker', '/pencaker/' . $pencaker_nopendaftaran)) {
            $namadokumen = $this->upload->data('file_name');
            $token = $this->input->post('token');
            $uploaded_on = date("Y-m-d H:i:s");
            $mode = $this->input->post('mode');

            if ($mode == "add") {
                $this->db->insert('pencaker_dokumen', array('namadokumen' => $namadokumen, 'token' => $token, 'dokumen_id' => $iddokumen, 'tgl_upload' => $uploaded_on, 'pencaker_id' => $pencaker_id));
            } else {
                $idpencakerdokumen = $this->input->post('idpencakerdokumen');
                $this->db->where('id', $idpencakerdokumen);
                $this->db->update('pencaker_dokumen', array('namadokumen' => $namadokumen, 'tgl_upload' => $uploaded_on));
            }
        }
        $this->activity_model->add("User #$users_id mengunggah dokumen Pencaker");
    }


    function get_dokumen()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id)->id;

        $query  = "SELECT d.*,
                    (SELECT pd.namadokumen FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS namadokumen,
                    (SELECT p.nopendaftaran FROM pencaker p WHERE p.id='$pencaker_id') AS nopendaftaran,
                    (SELECT pd.tgl_upload FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS tgl_upload,
                    (SELECT pd.id FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker_id') AS pencakerdokumen_id
                    FROM dokumen d";
        $search = array('d.jenis_dokumen');
        $where  = NULL;

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
    }


    function preview_doc($id)
    {
        $dokumen = $this->pencaker_model->get_preview_doc($id);
        $namadokumen = $dokumen->namadokumen;
        $folder = $dokumen->nopendaftaran;
        $filepath = $folder . $namadokumen;
        $this->page_data['filepath'] = $filepath;
        $this->load->view('pencaker/preview_dokumen', $this->page_data);
    }
}
