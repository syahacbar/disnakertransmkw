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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $querybahasa  = $this->db->query("SELECT * FROM pencaker WHERE id='$pencaker->idpencaker'");

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
        $this->page_data['pencaker'] = $this->pencaker_model->get_all();

        $this->page_data['page']->title = 'Data Pencari Kerja';
        $this->page_data['page']->menu = 'pencari_kerja';
        $this->load->view('pencaker/pencari_kerja', $this->page_data);
    }

    public function hapus_pencari_kerja()
    {
        $users_id = $this->input->post('usersid');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        //delete semua yang berkaitan dengan pencaker
        $delminatjabatan = $this->pencaker_model->delete_minat_jabatan($pencaker->idpencaker);
        $delpendidikanpencaker = $this->pencaker_model->delete_pendidikan_pencaker($pencaker->idpencaker);
        $delpengalamankerja = $this->pencaker_model->delete_pengalaman_kerja($pencaker->idpencaker);
        $deltimlineuser = $this->pencaker_model->delete_timeline_user($pencaker->idpencaker);

        $delpencaker  = $this->pencaker_model->delete_pencaker($pencaker->idpencaker);
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
    }

    function kartu_pencaker($iduser)
    {
        $pencaker = $this->pencaker_model->get_by_users_id($iduser);

        $q_pendidikan = $this->db->query("SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id WHERE pd.pencaker_id = $pencaker->idpencaker ORDER BY jp.id ASC");
        $q_pekerjaan = $this->db->query("SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id WHERE pk.pencaker_id = $pencaker->idpencaker");

        $this->page_data['pencaker'] = $this->pencaker_model->get_by_users_id($iduser);
        $this->page_data['pasfoto'] = $this->pencaker_model->get_pas_foto($pencaker->idpencaker);
        $this->page_data['pendidikan_pencaker'] = $q_pendidikan->result();
        $this->page_data['pekerjaan_pencaker'] = $q_pekerjaan->result();
        $this->page_data['page']->title = 'Kartu Pencari Kerja';
        $this->page_data['page']->menu = 'doc_pencaker';
        $this->load->view('printout/kartu_pencaker', $this->page_data);
    }

    function review_pencaker($iduser)
    {
        $pencaker = $this->pencaker_model->get_by_users_id($iduser);

        $pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker->idpencaker);

        $q_pendidikan = $this->db->query("SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id WHERE pd.pencaker_id = $pencaker->idpencaker ORDER BY jp.id ASC");
        $q_pekerjaan = $this->db->query("SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id WHERE pk.pencaker_id = $pencaker->idpencaker");
        $q_minat_jabatan = $this->db->query("SELECT mj.* FROM pencaker p JOIN minat_jabatan mj ON mj.pencaker_id=p.id WHERE p.id = $pencaker->idpencaker");

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

    function get_pencaker_verifikasi()
    {
        $users_id = logged('id');
        $data = $this->pencaker_model->get_verifikasi_dokwajib($users_id);
        echo json_encode($data);
    }

    function get_pendidikan()
    {
        $users_id = logged('id');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $query  = "SELECT jp.id AS idjenjang, jp.jenjang, p.users_id, pd.* FROM pencaker p JOIN pendidikan_pencaker pd ON pd.pencaker_id=p.id JOIN jenjang_pendidikan jp ON jp.id=pd.jenjang_pendidikan_id";
        $search = array('pd.nama_sekolah', 'pd.keterampilan');
        $where  = array('pd.pencaker_id' => $pencaker->idpencaker);
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $data = array(
            'pencaker_id' => $pencaker->idpencaker,
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $query  = "SELECT p.users_id, pk.* FROM pencaker p JOIN pengalaman_kerja pk ON pk.pencaker_id=p.id";
        $search = array('pk.instansi', 'pk.jabatan');
        $where  = array('pk.pencaker_id' => $pencaker->idpencaker);
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $data = array(
            'pencaker_id' => $pencaker->idpencaker,
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $query  = "SELECT p.users_id, mj.* FROM pencaker p JOIN minat_jabatan mj ON mj.pencaker_id=p.id";
        $search = array('mj.nama_jabatan');
        $where  = array('mj.pencaker_id' => $pencaker->idpencaker);
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $data = array(
            'pencaker_id' => $pencaker->idpencaker,
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $query  = $this->db->query("SELECT keterampilan_bahasa FROM pencaker WHERE id='$pencaker->idpencaker'");
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $ket_bahasa = $this->input->post('ket_bahasa');
        $arr_bahasa = array();
        for ($i = 0; $i < count($ket_bahasa); $i++) {
            $arr_bahasa[$i] = $ket_bahasa[$i];
        }
        $gabung_bhs = implode(",", $arr_bahasa);
        $this->db->where('id', $pencaker->idpencaker);
        $this->db->update('pencaker', array('keterampilan_bahasa' => $gabung_bhs));

        //bahasa lainnya
        $bahasa_lainnya = $this->input->post('txt_bahasa_lainnya');
        if ($bahasa_lainnya != NULL) {
            $this->db->where('id', $pencaker->idpencaker);
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $get_timeline = $this->pencaker_model->get_timeline_by_id('3', $users_id);
        if (empty($get_timeline->id)) {
            isitimeline('3', $users_id, 'Tahap ini anda harus mengunggah berkas/dokumen sebagai syarat kelengkapan pengajuan pembuatan Kartu Pencari Kerja');
        }

        $pencaker_dokumen =  $this->pencaker_model->pencaker_doc($pencaker->idpencaker);
        $this->page_data['pencaker_dokumen'] = $pencaker_dokumen;
        $this->page_data['page']->title = 'Dokumen Pencari Kerja';
        $this->page_data['page']->menu = 'doc_pencaker';
        // $this->page_data['dokumen'] = $this->pencaker_model->get_dokumen();
        $this->load->view('pencaker/dokumen', $this->page_data);
    }

    function dok_pencaker_wajib()
    {
        $users_id = logged('id');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $dokumenwajib = $this->pencaker_model->pencaker_doc_wajib($pencaker->idpencaker);
        $res['dokumenwajib'] = $dokumenwajib->num_rows();

        echo json_encode($res);
    }

    function upload_dokumen()
    {
        $users_id = logged('id');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $iddokumen = $this->input->post('iddokumen');
        $jenisdokumen = $this->pencaker_model->get_jenis_dokumen($iddokumen)->jenis_dokumen;


        if (!is_dir('uploads/pencaker/' . $pencaker->nopendaftaran)) {
            mkdir('./uploads/pencaker/' . $pencaker->nopendaftaran, 0777, TRUE);
        }

        $newfilename = $pencaker->nopendaftaran . "_" . $jenisdokumen;

        $this->uploadlib->initialize([
            'file_name' => $newfilename
        ]);

        if ($this->uploadlib->uploadImage('dokumenpencaker', '/pencaker/' . $pencaker->nopendaftaran)) {
            $namadokumen = $this->upload->data('file_name');
            $token = $this->input->post('token');
            $uploaded_on = date("Y-m-d H:i:s");
            $mode = $this->input->post('mode');

            if ($mode == "add") {
                $this->db->insert('pencaker_dokumen', array('namadokumen' => $namadokumen, 'token' => $token, 'dokumen_id' => $iddokumen, 'tgl_upload' => $uploaded_on, 'pencaker_id' => $pencaker->idpencaker));
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
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        $query  = "SELECT d.*,
                    (SELECT pd.namadokumen FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker->idpencaker') AS namadokumen,
                    (SELECT p.nopendaftaran FROM pencaker p WHERE p.id='$pencaker->idpencaker') AS nopendaftaran,
                    (SELECT pd.tgl_upload FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker->idpencaker') AS tgl_upload,
                    (SELECT pd.id FROM pencaker_dokumen pd WHERE pd.dokumen_id=d.id AND pd.pencaker_id='$pencaker->idpencaker') AS pencakerdokumen_id
                    FROM dokumen d";
        $search = array('d.jenis_dokumen');
        $where  = NULL;

        // jika memakai IS NULL pada where sql
        $isWhere = null;
        // $isWhere = 'artikel.deleted_at IS NULL';
        header('Content-Type: application/json');
        echo $this->M_Datatables->get_tables_query($query, $search, $where, $isWhere);
    }

    function update_keterangan_status()
    {
        $users_id = logged('id');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $keterangan_status = $this->input->post('keterangan_status');
        $updateketstatus = $this->pencaker_model->update_keterangan_status($pencaker->idpencaker, $keterangan_status);
        if ($updateketstatus) {
            $get_timeline = $this->pencaker_model->get_timeline_by_id('4', $users_id);
            if (empty($get_timeline->id)) {
                isitimeline('4', $users_id, 'Tahap ini anda menunggu proses verifikasi data oleh tim Disnakertrans Kab. Manokwari');
            }

            $pesan = 'Notifikasi disnakertransmkw.com' . PHP_EOL . PHP_EOL . 'Pencari Kerja a.n. *' . strtoupper($pencaker->namalengkap) . '* telah melengkapi formulir dan dokumen pembuatan Kartu Pencari Kerja.' . PHP_EOL . PHP_EOL . 'Silahkan login di dashboard admin untuk meninjau dan memverifikasi pengajuan tersebut.' . PHP_EOL . PHP_EOL . '<noreply>';

            notifWA(setting('whatsapp_admin'), $pesan);

            $res['status'] = TRUE;
        } else {
            $res['status'] = FALSE;
        }

        echo json_encode($res);
    }


    function add_verifikasi_data($aksi)
    {
        $users_id = $this->input->post('usersid');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);

        if ($aksi == 2) {
            $data = array(
                'tglwaktu'  => date("Y-m-d H:i:s"),
                'pesan'  => $this->input->post('pesan'),
                'status_pesan'  => '0',
                'users_id'  => $users_id,
                'revisi_dokumen' => $this->input->post('jenis_dokumen'),
            );

            $this->pencaker_model->add_verifikasi($data);
            $this->pencaker_model->update_keterangan_status($pencaker->idpencaker, 'Re-Verifikasi');

            $pesan = 'Hai...' . strtoupper($pencaker->namalengkap) . ',' . PHP_EOL . 'Data dan berkas anda telah kami verifikasi dan dinyatakan belum memenuhi syarat.' . PHP_EOL . 'Selanjutnya kami mohon untuk login di panel Pencaker disnakertransmkw.com dan melihat pemberitahuan pada bagian *linimasa* terkait data/berkas yang perlu diperbaiki.' . PHP_EOL . PHP_EOL . 'Terima Kasih...' . PHP_EOL . PHP_EOL . '<noreply>';

            notifWA($this->users_model->getById($users_id)->phone, $pesan);
        } else if ($aksi == 1) {
            $this->pencaker_model->update_keterangan_status($pencaker->idpencaker, 'Validasi');
            isitimeline('5', $pencaker->iduser, 'Silahkan datang ke kantor Disnakertrans Kab. Manokwari untuk mengambil Kartu Pencari Kerja (Kartu Kuning) dengan menunjukkan dokumen asli yang sebelumnya telah anda unggah di sistem disnakertransmkw.com');
            $pesan = 'Hai...' . strtoupper($pencaker->namalengkap) . ',' . PHP_EOL . 'Data dan berkas anda telah kami verifikasi dan dinyatakan lengkap.' . PHP_EOL . 'Selanjutnya kami mohon untuk datang ke kantor Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari untuk mengambil *Kartu Pencari Kerja (Kartu Kuning)* dengan syarat menunjukkan *dokumen asli* yang telah diunggah di sistem disnakertransmkw.com.' . PHP_EOL . PHP_EOL . 'Terima Kasih...' . PHP_EOL . PHP_EOL . '<noreply>';

            notifWA($this->users_model->getById($users_id)->phone, $pesan);
        } else if ($aksi == 3) {
            $this->pencaker_model->update_keterangan_status($pencaker->idpencaker, 'Aktif');
            isitimeline('6', $pencaker->iduser, 'Anda telah resmi terdaftar sebagai Pencari Kerja (Aktif) di Disnakertrans Manokwari. Kami mohon untuk kembali melapor setiap 6 (enam) bulan sekali melalui panel Pencaker pada website disnakertransmkw.com.');
            $pesan = 'Hai...' . strtoupper($pencaker->namalengkap) . ',' . PHP_EOL . 'Anda telah resmi terdaftar sebagai Pencari Kerja (Aktif) di Disnakertrans Manokwari.' . PHP_EOL . 'Kami mohon untuk kembali melapor setiap 6 (enam) bulan sekali melalui panel Pencaker pada website disnakertransmkw.com.' . PHP_EOL . PHP_EOL . 'Terima Kasih...' . PHP_EOL . PHP_EOL . '<noreply>';

            notifWA($this->users_model->getById($users_id)->phone, $pesan);
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

        $excel->setActiveSheetIndex(0);
        $excel->getActiveSheet()->getRowDimension('3')->setRowHeight(40);
        // Buat header tabel nya pada baris ke 3
        $table_columns = array("No.", "Nomor Pendaftaran", "Nama Lengkap", "NIK", "Tempat Lahir", "Tanggal Lahir", "Jenis Kelamin", "Agama", "Status Menikah", "Tinggi Badan (cm)", "Berat Badan (kg)", "Alamat", "Kode Pos");
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

        foreach ($pencaker as $r) { // Lakukan looping pada variabel siswa
            $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
            $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $r->nopendaftaran);
            $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, strtoupper($r->namalengkap));
            $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $r->nik);
            $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $r->tempatlahir);
            $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $r->tgllahir);
            $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $r->jenkel);
            $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $r->agama);
            $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $r->statusnikah);
            $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $r->tinggibadan);
            $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $r->beratbadan);
            $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $r->alamat);
            $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $r->kodepos);
            $no++; // Tambah 1 setiap kali looping
            $numrow++; // Tambah 1 setiap kali looping
        }

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


    function lapor_pencari_kerja()
    {
        $users_id = logged('id');
        $pencaker = $this->pencaker_model->get_by_users_id($users_id);
        $nourutlapor = $this->pencaker_model->nomorurutlaporpencaker();
        $status_kerja = $this->input->post('status_kerja');

        $data1 = array(
            'tglwaktu'  => date("Y-m-d H:i:s"),
            'status_kerja' => $status_kerja,
            'urut_lapor' => $nourutlapor,
            'pencaker_id' => $pencaker->idpencaker,
        );

        $idlaporanpencaker = $this->pencaker_model->add_lapor_pencaker($data1);

        if($status_kerja == 'Sudah Bekerja')
        {
            $data2 = array(
                'nama_perusahaan'  => $this->input->post('nama_perusahaan'),
                'no_telp' => $this->input->post('notelp_perusahaan'),
                'alamat' => $this->input->post('alamat_perusahaan'),
                'lapor_pencaker_id' => $idlaporanpencaker,
            );
            $this->pencaker_model->add_lapor_kerja($data2);
        }

        if ($idlaporanpencaker) {
            $res['hasil'] = 'sukses';
            $res['status'] = TRUE;
        } else {
            $res['hasil'] = 'gagal';
            $res['status'] = FALSE;
        }
        echo json_encode($res);
    }
}
