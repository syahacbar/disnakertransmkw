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

        $get_timeline = $this->pencaker_model->get_timeline_by_id('2', $users_id);
        if (empty($get_timeline->id)) {
            isitimeline('2', $users_id, 'Tahap ini anda harus mengisi/melengkapi formulir AK-1 pada menu Profil Pencari Kerja');
        }

        $this->page_data['page']->title = 'Profil Pencari Kerja';
        $this->page_data['page']->menu = 'profil_pencaker';
        $this->page_data['jenjang_pendidikan'] = $this->pencaker_model->get_jenjang_pendidikan();
        $this->page_data['ket_bahasa'] = $this->pencaker_model->get_keterampilan_bahasa();
        $this->page_data['ket_bahasa_pencaker'] = $querybahasa->row();

        $this->load->view('pencaker/profil_pencaker', $this->page_data);
    }

    public function pencari_kerja()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

        $pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker_id);
        $this->page_data['pencaker'] = $this->pencaker_model->get_all();

        $this->page_data['dokumen_pencaker'] =  $pencaker_dokumen;
        $this->page_data['page']->title = 'Data Pencari Kerja';
        $this->page_data['page']->menu = 'pencari_kerja';
        $this->load->view('pencaker/pencari_kerja', $this->page_data);
    }

    public function hapus_pencari_kerja()
    {
        $users_id = $this->input->post('usersid');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

        //delete semua yang berkaitan dengan pencaker
        $delminatjabatan = $this->pencaker_model->delete_minat_jabatan($pencaker_id->id);
        $delpendidikanpencaker = $this->pencaker_model->delete_pendidikan_pencaker($pencaker_id->id);
        $delpengalamankerja = $this->pencaker_model->delete_pengalaman_kerja($pencaker_id->id);
        $deltimlineuser = $this->pencaker_model->delete_timeline_user($pencaker_id->id);

        $delpencaker  = $this->pencaker_model->delete_pencaker($pencaker_id->id);
        $deluser = $this->users_model->delete($users_id);

        if ($deluser) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        $this->activity_model->add("User #$users_id menghapus data Pencaker");
        echo json_encode($res);

        //redirect('pencaker/pencari_kerja');
    }

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
            'agama' => $this->input->post('agama'),
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

        $get_timeline = $this->pencaker_model->get_timeline_by_id('3', $users_id);
        if (empty($get_timeline->id)) {
            isitimeline('3', $users_id, 'Tahap ini anda harus mengunggah berkas/dokumen sebagai syarat kelengkapan pengajuan pembuatan Kartu Pencari Kerja');
        }

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

    function update_keterangan_status()
    {
        $users_id = logged('id');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);
        $keterangan_status = $this->input->post('keterangan_status');
        $updateketstatus = $this->pencaker_model->update_keterangan_status($pencaker_id->id, $keterangan_status);
        if ($updateketstatus) {
            $get_timeline = $this->pencaker_model->get_timeline_by_id('4', $users_id);
            if (empty($get_timeline->id)) {
                isitimeline('4', $users_id, 'Tahap ini anda menunggu proses verifikasi data oleh tim Disnakertrans Kab. Manokwari');
            }

            $res['status'] = TRUE;
        } else {
            $res['status'] = FALSE;
        }

        echo json_encode($res);
    }


    function add_verifikasi_data($aksi)
    {
        $users_id = $this->input->post('usersid');
        $pencaker_id = $this->pencaker_model->get_pencaker_id($users_id);

        if ($aksi == 2) {
            $data = array(
                'tglwaktu'  => date("Y-m-d H:i:s"),
                'pesan'  => $this->input->post('pesan'),
                'status_pesan'  => $this->input->post('statusverifikasi'),
                'users_id'  => $users_id,
            );

            $this->pencaker_model->add_verifikasi($data);
        } else if ($aksi == 1) {
            $this->pencaker_model->update_keterangan_status($pencaker_id->id, 'Validasi');
        }
    }

    function export_pencaker_pdf()
    {
        $this->page_data['pencari_kerja'] = $this->pencaker_model->get_all();
        $this->load->view('pencaker/cetakpdf', $this->page_data);
    }

    function export_pencaker_excel()
    {
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';
        $excel = new PHPExcel();
        // Settingan awal fil excel
        $excel->getProperties()->setCreator('Admin DISNAKERTRANS')
            ->setLastModifiedBy('Admin DISNAKERTRANS')
            ->setTitle("Data Pencari Kerja Kabupaten Manokwari")
            ->setSubject("Pencari Kerja")
            ->setDescription("Data Pencari Kerja Kabupaten Manokwari")
            ->setKeywords("Data Pencari Kerja Kabupaten Manokwari");
        // Buat sebuah variabel untuk menampung pengaturan style dari header tabel
        $style_col = array(
            'font' => array('bold' => true), // Set font nya jadi bold
            'alignment' => array(
                'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            ),
            'fill' => array(
                'type' => PHPExcel_Style_Fill::FILL_SOLID,
                'color' => array('rgb' => 'D9D9D9')
            )
        );

        // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
        $style_row = array(
            'alignment' => array(
                'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
            ),
            'borders' => array(
                'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
            )
        );

        $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Pencari Kerja Kabupaten Manokwari");
        $excel->getActiveSheet()->mergeCells('A1:N1');
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
        $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT); // Set text center untuk kolom A1

        // $excel->setActiveSheetIndex(0)->setCellValue('A3', "No.");
        // $excel->getActiveSheet()->mergeCells('A3:A4');

        // $excel->setActiveSheetIndex(0)->setCellValue('B3', "Identitas Pendaftar");
        // $excel->getActiveSheet()->mergeCells('B3:AB3');

        // $excel->setActiveSheetIndex(0)->setCellValue('AC3', "Data Sekolah");
        // $excel->getActiveSheet()->mergeCells('AC3:AL3');

        // $excel->setActiveSheetIndex(0)->setCellValue('AM3', "Data Orang Tua");
        // $excel->getActiveSheet()->mergeCells('AM3:BB3');

        // $excel->setActiveSheetIndex(0)->setCellValue('BC3', "Data Wali");
        // $excel->getActiveSheet()->mergeCells('BC3:BG3');

        // $excel->setActiveSheetIndex(0)->setCellValue('BH3', "Tgl. Pendaftaran");
        // $excel->getActiveSheet()->mergeCells('BH3:BH4');


        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(40);
        // Buat header tabel nya pada baris ke 3
        $table_columns = array("No.", "Nomor Pendaftaran", "Nama Lengkap", "NIK", "Tempat Lahir", "Tanggal Lahir", "Jenis Kelamin", "Agama", "Alamat", "Kode Pos", "Status Menikah", "Tinggi Badan (cm)", "Berat Badan (kg)");
        $column = 0;
        foreach ($table_columns as $field) {
            $excel->getActiveSheet()->setCellValueByColumnAndRow($column, 3, $field);
            $column++;
        }

        // for ($i = 'A'; $i !==   $excel->getActiveSheet()->getHighestColumn(); $i++) {
        for ($i = 'A'; $i !==   'N'; $i++) {
            $excel->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
            $excel->getActiveSheet()->getStyle($i . '3')->applyFromArray($style_col);
            // $excel->getActiveSheet()->getStyle($i . '4')->applyFromArray($style_col);
        }

        $pencaker = $this->pencaker_model->get_all();
        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4

        foreach($pencaker as $r){ // Lakukan looping pada variabel siswa
            $excel->setActiveSheetIndex(0)->setCellValue('A'.$numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B'.$numrow, $r->nopendaftaran,PHPExcel_Cell_DataType::TYPE_STRING);
            $excel->setActiveSheetIndex(0)->setCellValue('C'.$numrow, strtoupper($r->namalengkap));
            $excel->setActiveSheetIndex(0)->setCellValue('D'.$numrow, $r->nik, PHPExcel_Cell_DataType::TYPE_STRING);
            $excel->setActiveSheetIndex(0)->setCellValue('E'.$numrow, $r->tempatlahir);
            $excel->setActiveSheetIndex(0)->setCellValue('F'.$numrow, $r->tgllahir);
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }


        // $excel->getActiveSheet()->getColumnDimension('BH')->setWidth(15);
        // $excel->getActiveSheet()->getStyle('BH3:BH4')->applyFromArray($style_col);

        

        // for ($i = 'A'; $i !=  $excel->getActiveSheet()->getHighestColumn(); $i++) {
        // 	$excel->getActiveSheet()->getColumnDimension($i)->setAutoSize(TRUE);
        // }


        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->getActiveSheet(0)->setTitle("Pencari Kerja");
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Pencari Kerja Kabupaten Manokwari.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
}
