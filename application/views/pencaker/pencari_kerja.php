<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<style>
    .toggle {
        --width: 80px;
        --height: calc(var(--width) / 3);

        position: relative;
        display: inline-block;
        width: var(--width);
        height: var(--height);
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
        border-radius: var(--height);
        cursor: pointer;
    }

    .toggle input {
        display: none;
    }

    .toggle .slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: var(--height);
        background-color: #ccc;
        transition: all 0.4s ease-in-out;
    }

    .toggle .slider::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: calc(var(--height));
        height: calc(var(--height));
        border-radius: calc(var(--height) / 2);
        background-color: #fff;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease-in-out;
    }

    .toggle input:checked+.slider {
        background-color: #2196F3;
    }

    .toggle input:checked+.slider::before {
        transform: translateX(calc(var(--width) - var(--height)));
    }

    .toggle .labels {
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: 12px;
        font-family: sans-serif;
        transition: all 0.4s ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .toggle .labels::after {
        content: attr(data-off);
        position: absolute;
        right: 20px;
        color: #fff;
        opacity: 1;
        transition: all 0.4s ease-in-out;
    }

    .toggle .labels::before {
        content: attr(data-on);
        position: absolute;
        left: 10px;
        color: #fff;
        opacity: 0;
        transition: all 0.4s ease-in-out;
    }

    .toggle input:checked~.labels::after {
        opacity: 0;
    }

    .toggle input:checked~.labels::before {
        opacity: 1;
    }

    #modalEditPencariKerja .modal-body * {
        font-size: 14px;
        font-weight: normal;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('pencari_kerja') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('pencari_kerja') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3"><?php echo lang('pencari_kerja') ?></h3>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="dataPencariKerja" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Nama</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIK</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pencaker as $p) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <img width="40" height="40" alt="" class="img-avtar" src="<?php echo pencakerFoto($p->id); ?>">
                                        </td>
                                        <td><?php echo $p->namalengkap; ?> </td>
                                        <td><?php echo $p->nopendaftaran; ?> </td>
                                        <td><?php echo $p->nik; ?> </td>
                                        <td><?php echo $p->keterangan_status; ?></td>
                                        <td>
                                            <a target="_blank" href="<?php echo site_url('pencaker/review_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-warning" title="Review Data Pencaker"><i class="fas fa-search"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-secondary" title="Verifikasi Pencaker" data-toggle="modal" data-target="#modalVerifikasi"><i class="fas fa-check"></i></a>&nbsp;
                                            <a target="_blank" href="<?php echo site_url('pencaker/kartu_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-info" title="Cetak Kartu Pencaker"><i class="fas fa-id-card"></i></a>&nbsp;
                                            <!-- <a href="" data-id="" class="btn btn-sm btn-primary editPencariKerja" title="Edit Pencaker"><i class="fas fa-edit"></i></a>&nbsp; -->
                                            <a class="btn btn-sm btn-danger" id="hapusPencariKerja" href="" data-idberita="" title="Hapus Pencaker"><i class="fas fa-trash"></i></a>
                                            <a target="_blank" href="<?php echo site_url('pencaker/kartu_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-info" title="Cetak Kartu Pencaker"><i class="fas fa-id-card"></i></a>&nbsp;
                                            <a href="" data-id="" class="btn btn-sm btn-primary editPencariKerja" data-toggle="modal" data-target="#modalEditPencariKerja"><i class="fas fa-edit"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-danger" id="hapusPencariKerja" onclick="return confirm('Do you really want to delete this user ?')" href="<?php echo site_url('pencaker/hapus_pencari_kerja/') . $p->id; ?>" title="Hapus Pencaker"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal Verifikasi -->
<div class="modal fade" id="modalVerifikasi" tabindex="-1" aria-labelledby="modalVerifikasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVerifikasiLabel">Verifikasi Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <label class="col-form-label" for="datalengkap">Status Data</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="datalengkap" id="datalengkap1" value="option1" checked>
                        <label class="form-check-label" for="datalengkap1">
                            Lengkap
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="datalengkap" id="datalengkap2" value="option2">
                        <label class="form-check-label" for="datalengkap2">
                            Tidak Lengkap
                        </label>
                    </div>

                    <div class="form-group mt-3">
                        <label class="col-form-label" for="pesan">Catatan</label>
                        <textarea type="email" class="form-control form-control-sm" id="pesan" aria-describedby="emailHelp"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit Pencari Kerja -->
<div class="modal fade" id="modalEditPencariKerja" tabindex="-1" aria-labelledby="modalEditPencariKerjaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalEditPencariKerjaLabel">Edit Pencari Kerja</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="list-group" id="list-tab" role="tablist">
                                <a class="list-group-item list-group-item-action active" id="editData-diri-list" data-toggle="list" href="#editData-diri" role="tab" aria-controls="editData-diri">Keterangan Umum</a>
                                <a class="list-group-item list-group-item-action" id="editPendidikan-list" data-toggle="list" href="#editPendidikan" role="tab" aria-controls="editPendidikan">Pendidikan Formal</a>
                                <a class="list-group-item list-group-item-action" id="editBahasa-list" data-toggle="list" href="#editBahasa" role="tab" aria-controls="editBahasa">Keterampilan Bahasa</a>
                                <a class="list-group-item list-group-item-action" id="editKerja-list" data-toggle="list" href="#editKerja" role="tab" aria-controls="editKerja">Pengalaman Kerja</a>
                                <a class="list-group-item list-group-item-action" id="editJabatan-list" data-toggle="list" href="#editJabatan" role="tab" aria-controls="editJabatan">Jabatan Yang Diminati</a>
                                <a class="list-group-item list-group-item-action" id="editPerusahan-list" data-toggle="list" href="#editPerusahan" role="tab" aria-controls="editPerusahan">Perusahaan Yang Dituju</a>
                                <a class="list-group-item list-group-item-action" id="editDatatambahan-list" data-toggle="list" href="#editDatatambahan" role="tab" aria-controls="editDatatambahan">Keterangan Tambahan</a>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="editData-diri" role="tabpanel" aria-labelledby="editData-diri-list">
                                    <div class="row">

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="nopendaftaran">Nomor Pendaftaran</label>
                                                <input type="text" class="form-control form-control-sm" name="nopendaftaran" id="nopendaftaran" readonly />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="nik">NIK</label>
                                                <input type="text" class="form-control form-control-sm" name="nik" id="nik" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="namalengkap">Nama Lengkap</label>
                                                <input type="text" class="form-control form-control-sm" name="namalengkap" id="namalengkap" required placeholder="Nama Sesuai KTP" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="jenkel">Jenis Kelamin</label>
                                                <div class="row">
                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel1" value="L">
                                                            <label class="form-check-label" for="jenkel1">
                                                                Laki-laki
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel2" value="P">
                                                            <label class="form-check-label" for="jenkel2">
                                                                Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tempatlahir">Tempat Lahir</label>
                                                <input type="text" class="form-control form-control-sm" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir Sesuai KTP" required placeholder="Nama Sesuai KTP" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tgllahir">Tanggal Lahir</label>
                                                <input type="text" class="form-control form-control-sm date" name="tgllahir" id="tgllahir" required placeholder="Tanggal Lahir Sesuai KTP" autofocus />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 statusmenikah ">
                                            <label class="col-form-label" for="statusnikah">Status Menikah</label>
                                            <select name="statusnikah" id="statusnikah" class="w-100">
                                                <option value="Kawin">Kawin</option>
                                                <option value="Belum Kawin">Belum Kawin</option>
                                                <option value="Janda">Janda</option>
                                                <option value="Duda">Duda</option>
                                            </select>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tinggibadan">Tinggi Badan (cm)</label>
                                                <input type="number" class="form-control form-control-sm" name="tinggibadan" id="tinggibadan" placeholder="" required placeholder="Satuan cm, misal 160" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="beratbadan">Berat Badan (kg)</label>
                                                <input type="number" class="form-control form-control-sm" name="beratbadan" id="beratbadan" placeholder="" required placeholder="Satuan kg, misal 56" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="alamat">Alamat Tinggal</label>
                                                <textarea type="text" class="form-control form-control-sm" name="alamat" id="alamat" required placeholder="Alamat tinggal sesuai KTP" autofocus> </textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="kodepos">Kode Pos</label>
                                                <input type="number" class="form-control form-control-sm" name="kodepos" id="kodepos" placeholder="" required placeholder="Ketik Kode pos di sini" autofocus />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="editPendidikan" role="tabpanel" aria-labelledby="editPendidikan-list">
                                    <div class="row mb-5">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tahunmasuk">Tahun Masuk</label>
                                                <input type="text" class="form-control form-control-sm year" name="tahunmasuk" id="tahunmasuk" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tahunlulus">Tahun Lulus</label>
                                                <input type="text" class="form-control form-control-sm year" name="tahunlulus" id="tahunlulus" required autofocus />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <label class="col-form-label" for="jenjang">Jenjang</label>
                                            <select name="jenjang" id="jenjang" class="w-100">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="ipk">NEM/NUN/IPK</label>
                                                <input type="text" class="form-control form-control-sm" name="ipk" id="ipk" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="nama_sekolah">Nama Sekolah</label>
                                                <input type="text" class="form-control form-control-sm" name="nama_sekolah" id="nama_sekolah" required autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="keterampilan">Keterampilan/Jurusan</label>
                                                <input type="text" class="form-control form-control-sm" name="keterampilan" id="keterampilan" autofocus />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="ml-auto">
                                                <button type="button" id="btnSavePendidikan" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> <?php echo lang('save') ?></button>
                                                <button type="button" id="btnUpdatePendidikan" class="btn btn-primary btn-sm hide"><i class="fas fa-edit"></i> <?php echo lang('update') ?></button>
                                                <!-- hiden form untuk id pendidikan saat proses update -->
                                                <input type="hidden" name="idpendidikan">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="editBahasa" role="tabpanel" aria-labelledby="editBahasa-list">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-card">
                                                <div class="alert alert-success" role="alert">
                                                    Silakan centang salah satu atau beberapa bahasa yang Anda kuasai di bawah ini!
                                                </div>
                                                <form action="#" id="formbahasapencaker">
                                                    <div class="row mb-5">
                                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input ket_bahasa" type="checkbox" name="" id="" value="">
                                                                <label class="form-check-label" for="">
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div id="textboxbahasalainnya" class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
                                                            <div class="form-floating">
                                                                <label class="col-form-label" for="lainnya">Bahasa Lainnya</label>
                                                                <textarea class="form-control form-control-sm" placeholder="Deskripsikan bahasa yang Anda kuasai di sini" name="txt_bahasa_lainnya" id="txt_bahasa_lainnya" style="height: 100px"></textarea>
                                                            </div>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="editKerja" role="tabpanel" aria-labelledby="editKerja-list">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tahunmasukkerja">Tahun Masuk</label>
                                                <input type="text" class="form-control form-control-sm year" name="tahunmasukkerja" id="tahunmasukkerja" placeholder="" required placeholder="Tahun masuk kerja" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tahunkeluarkerja">Tahun Keluar</label>
                                                <input type="text" class="form-control form-control-sm year" name="tahunkeluarkerja" id="tahunkeluarkerja" placeholder="" required placeholder="Tahun keluar kerja" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="instansi">Nama Perusahan/Instansi</label>
                                                <input type="text" class="form-control form-control-sm" name="instansi" id="instansi" placeholder="" required placeholder="Nama Perusahan/Instansi" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label class="col-form-label" for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control form-control-sm" name="jabatan" id="jabatan" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="ml-auto">
                                                <button type="button" id="btnSavePekerjaan" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> <?php echo lang('save') ?></button>
                                                <button type="button" id="btnUpdatePekerjaan" class="btn btn-primary btn-sm hide"><i class="fas fa-edit"></i> <?php echo lang('update') ?></button>
                                                <input type="hidden" name="idpekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                            <table style="width:100%" id="tabelpekerjaanpencaker" class="table table-bordered table-hover table-striped">
                                                <thead>
                                                    <tr>
                                                        <th width="10px">No</th>
                                                        <th>Tahun Masuk</th>
                                                        <th>Tahun Keluar</th>
                                                        <th>Nama Perusahan/Instansi</th>
                                                        <th>Jabatan</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="editJabatan" role="tabpanel" aria-labelledby="editJabatan-list">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-card">
                                                <div class="alert alert-success" role="alert">
                                                    Silakan isi data terkait Jabatan yang diminati
                                                </div>
                                                <form action="#" id="formjabatanpencaker">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-3 col-lg-9 ">
                                                            <div class="form-group">
                                                                <label class="col-form-label" for="minat_jabatan">Jabatan</label>
                                                                <input type="text" class="form-control form-control-sm" name="minat_jabatan" id="minat_jabatan" placeholder="" required />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                            <div class="ml-auto">
                                                                <button type="button" id="btnSaveJabatan" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> <?php echo lang('save') ?></button>
                                                                <button type="button" id="btnUpdateJabatan" class="btn btn-primary btn-sm hide"><i class="fas fa-edit"></i> <?php echo lang('update') ?></button>
                                                                <input type="hidden" name="idjabatan">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="row mt-5">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                                        <table style="width:100%" id="tabeljabatanpencaker" class="table table-bordered table-hover table-striped">
                                                            <thead>
                                                                <tr>
                                                                    <th width="10px">No</th>
                                                                    <th>Jabatan</th>
                                                                    <th>Aksi</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <hr>
                                                <br>
                                                <div class="row mt-3">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                        <label>Lokasi jabatan yang diinginkan</label>
                                                    </div>
                                                    <form action="#" id="formlokasijabatan">
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="lokasi_jabatan" id="lokasijabatan1" value="DN">
                                                                <label class="form-check-label" for="lokasijabatan1">
                                                                    Dalam Negeri
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="lokasi_jabatan" id="lokasijabatan2" value="LN">
                                                                <label class="form-check-label" for="lokasijabatan2">
                                                                    Luar Negeri
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="editPerusahan" role="tabpanel" aria-labelledby="editPerusahan-list">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-card">
                                                <div class="alert alert-success" role="alert">
                                                    Silakan tentukan tujuan Perusahan pilihan Anda!
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-6 col-lg-9">
                                            <div class="form-group">
                                                <label class="col-form-label" for="tujuan_perusahaan">Nama Perusahan/Instansi</label>
                                                <input type="text" class="form-control form-control-sm" name="tujuan_perusahaan" id="tujuan_perusahaan" placeholder="" required placeholder="" autofocus />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="editDatatambahan" role="tabpanel" aria-labelledby="editDatatambahan-list">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-card">
                                                <div class="alert alert-success" role="alert">
                                                    Catatan pengantar kerja yang berkaitan dengan faktor-faktor yang mempengaruhi pekerjaan!
                                                </div>
                                                <div class="row">

                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                        <div class="form-group">
                                                            <label class="col-form-label" for="catatan_pengantar">Catatan Pencaker</label>
                                                            <textarea type="text" class="form-control form-control-sm" name="catatan_pengantar" id="catatan_pengantar" rows="3" placeholder="" required placeholder="Tahun masuk sekolah" autofocus></textarea>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>

    </div>
</div>
<?php include viewPath('includes/footer'); ?>
<script>
    $('#dataPencariKerja').DataTable();
</script>