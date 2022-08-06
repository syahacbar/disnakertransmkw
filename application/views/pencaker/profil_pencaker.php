<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<style type="text/css">
    .hide {
        display: none;
    }

    .jenjang,
    .statusmenikah {
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        display: flex;
    }

    select#statusnikah,
    select#jenjang {
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        box-shadow: inset 0 0 0 transparent;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('profil_pencaker') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('profil_pencaker') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-3">
            <?php include 'sidebar.php'; ?>
        </div>
        <div class="col-sm-9">
            <!-- tujuanpencaker card -->
            <div class="card tujuanpencaker">
                <div class="card-header with-border">
                    <h3 class="card-title">Tujuan Pembuatan Kartu Pencaker</h3>
                </div>
                <form action="#" id="formtujuanpencaker">
                    <div class="card-body">
                        <div class="form-card">
                            <div class="alert alert-success" role="alert">
                                Silakan pilih tujuan Anda membuat Kartu Kuning!
                            </div>
                            <div class="row mt-3" id="pilihTujuan">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <label for="">Pilih Tujuan Anda</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tujuan" id="tujuan1" value="tujuan1">
                                        <label class="form-check-label" for="tujuan1">
                                            Mencari Pekerjaan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tujuan" id="tujuan2" value="tujuan2">
                                        <label class="form-check-label" for="tujuan2">
                                            Melengkapi Persyaratan Melamar Pekerjaan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="button" id="btnSave1" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

            <!-- identitaspencaker card -->
            <div class="card identitaspencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Keterangan Umum Identitas Pencaker</h3>
                </div>
                <form action="#" id="formidentitaspencaker">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-card">
                                    <div class="alert alert-success" role="alert">
                                        Lengkapi data diri Anda di bawah ini!
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="nopendaftaran">Nomor Pendaftaran</label>
                                    <input type="text" class="form-control" name="nopendaftaran" id="nopendaftaran" readonly />
                                    <!--  <div class="form-row">
                                        <div class="col">
                                          <input type="text" name="kodewil" class="form-control" readonly>
                                        </div>
                                        <div class="col">
                                          <input type="text" name="tglkartu" class="form-control" readonly>
                                        </div>
                                        <div class="col">
                                          <input type="text" name="nomorurut" class="form-control" readonly>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input type="text" class="form-control" name="nik" id="nik" />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="namalengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" required placeholder="Nama Sesuai KTP" autofocus />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="jenkel">Jenis Kelamin</label>
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
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="tempatlahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir Sesuai KTP" required placeholder="Nama Sesuai KTP" autofocus />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="tgllahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control date" name="tgllahir" id="tgllahir" required placeholder="Tanggal Lahir Sesuai KTP" autofocus />
                                </div>
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 statusmenikah ">
                                <label for="statusnikah">Status Menikah</label>
                                <select name="statusnikah" id="statusnikah" class="w-100">
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Janda">Janda</option>
                                    <option value="Duda">Duda</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="tinggibadan">Tinggi Badan (cm)</label>
                                    <input type="number" class="form-control" name="tinggibadan" id="tinggibadan" placeholder="" required placeholder="Satuan cm, misal 160" autofocus />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label for="beratbadan">Berat Badan (kg)</label>
                                    <input type="number" class="form-control" name="beratbadan" id="beratbadan" placeholder="" required placeholder="Satuan kg, misal 56" autofocus />
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="alamat">Alamat Tinggal</label>
                                    <textarea type="text" class="form-control" name="alamat" id="alamat" required placeholder="Alamat tinggal sesuai KTP" autofocus> </textarea>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="kodepos">Kode Pos</label>
                                    <input type="number" class="form-control" name="kodepos" id="kodepos" placeholder="" required placeholder="Ketik Kode pos di sini" autofocus />
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="button" id="btnback1" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                        <button type="button" id="btnSave2" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                    </div>
                </form>
            </div>

            <!-- pendidikanpencaker card -->
            <div class="card pendidikanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Pendidikan Formal</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan isi data terkait pendidikan Anda pada bidang-bidang di bawah ini!
                                </div>

                                <!-- form pendidikan pencaker-->
                                <form action="#" id="formpendidikanpencaker">
                                    <div class="row mb-5">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="tahunmasuk">Tahun Masuk</label>
                                                <input type="text" class="form-control year" name="tahunmasuk" id="tahunmasuk" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="tahunlulus">Tahun Lulus</label>
                                                <input type="text" class="form-control year" name="tahunlulus" id="tahunlulus" required autofocus />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                                            <label for="jenjang">Jenjang</label>
                                            <select name="jenjang" id="jenjang" class="w-100">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <?php foreach($jenjang_pendidikan AS $jp) : ?>
                                                    <option value="<?php echo $jp->id;?>"><?php echo $jp->jenjang;?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                                            <div class="form-group">
                                                <label for="ipk">NEM/NUN/IPK</label>
                                                <input type="text" class="form-control" name="ipk" id="ipk" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label for="nama_sekolah">Nama Sekolah</label>
                                                <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" required autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                                            <div class="form-group">
                                                <label for="keterampilan">Keterampilan/Jurusan</label>
                                                <input type="text" class="form-control" name="keterampilan" id="keterampilan" autofocus />
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
                                </form>
                                <!-- end of formpendidikan pencaker -->

                                <hr>
                                <div class="row mt-5">

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 table-responsive">
                                        <table style="width:100%" id="tabelpendidikanpencaker" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="10px">No</th>
                                                    <th>Tahun Masuk</th>
                                                    <th>Tahun Lulus</th>
                                                    <th>Jenjang</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>NEM/NUN/IPK</th>
                                                    <th>Keterampilan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" id="btnback2" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="button" id="btnSave3" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
            </div>

            <!-- bahasapencaker card -->
            <div class="card bahasapencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Keterampilan Bahasa</h3>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan centang salah satu atau beberapa bahasa yang Anda kuasai di bawah ini!
                                </div>

                                <!-- form bahasa pencaker-->
                                <form action="#" id="formbahasapencaker">
                                    <div class="row mb-5">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Inggris" value="Inggris">
                                                <label class="form-check-label" for="inggris">
                                                    Inggris
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Jerman" value="Jerman">
                                                <label class="form-check-label" for="jerman">
                                                    Jerman
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Perancis" value="Perancis">
                                                <label class="form-check-label" for="perancis">
                                                    Perancis
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Mandarin" value="Mandarin">
                                                <label class="form-check-label" for="mandarin">
                                                    Mandarin
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Arab" value="Arab">
                                                <label class="form-check-label" for="arab">
                                                    Arab
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Belanda" value="Belanda">
                                                <label class="form-check-label" for="belanda">
                                                    Belanda
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="bahasa_Jepang" value="Jepang">
                                                <label class="form-check-label" for="jepang">
                                                    Jepang
                                                </label>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="bahasa_lain" name="checkboxbahasalainnya" id="checkboxbahasalainnya">
                                                <label class="form-check-label" for="lainnya">
                                                    Lainnnya
                                                </label>
                                            </div>
                                        </div>

                                        <div id="textboxbahasalainnya" class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4 hide">
                                            <div class="form-floating">
                                                <label for="lainnya">Bahasa Lainnya</label>
                                                <textarea class="form-control" placeholder="Deskripsikan bahasa yang Anda kuasai di sini" name="txt_bahasa_lainnya" id="txt_bahasa_lainnya" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                <!-- end of formbahasa pencaker -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" id="btnback3" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="button" id="btnSave4" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
            </div>

            <!-- pekerjaanpencaker card -->
            <div class="card pekerjaanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Pengalaman Kerja</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan isi data terkait pengalaman kerja Anda pada bidang-bidang di bawah ini!
                                </div>
                                <!-- form pekerjaan pencaker     -->
                                <form action="#" id="formpekerjaanpencaker">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                            <div class="form-group">
                                                <label for="tahunmasukkerja">Tahun Masuk</label>
                                                <input type="text" class="form-control year" name="tahunmasukkerja" id="tahunmasukkerja" placeholder="" required placeholder="Tahun masuk kerja" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                            <div class="form-group">
                                                <label for="tahunkeluarkerja">Tahun Keluar</label>
                                                <input type="text" class="form-control year" name="tahunkeluarkerja" id="tahunkeluarkerja" placeholder="" required placeholder="Tahun keluar kerja" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-4">
                                            <div class="form-group">
                                                <label for="instansi">Nama Perusahan/Instansi</label>
                                                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="" required placeholder="Nama Perusahan/Instansi" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-4">
                                            <div class="form-group">
                                                <label for="jabatan">Jabatan</label>
                                                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="ml-auto">
                                                <button type="button" id="btnSavePekerjaan" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> <?php echo lang('save') ?></button>
                                                <button type="button" id="btnUpdatePekerjaan" class="btn btn-primary btn-sm hide"><i class="fas fa-edit"></i> <?php echo lang('update') ?></button>
                                                <!-- hiden form untuk id pendidikan saat proses update -->
                                                <input type="hidden" name="idpekerjaan">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end of formpkerjaan pencaker -->

                                <hr>
                                <div class="row mt-5">
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

                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" id="btnback4" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="button" id="btnSave5" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
            </div>

            <!-- jabatan card -->
            <div class="card jabatanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Jabatan Yang Diminati</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan isi data terkait Jabatan yang diminati
                                </div>
                                <!-- form jabatan pencaker     -->
                                <form action="#" id="formjabatanpencaker">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-3 col-lg-9 ">
                                            <div class="form-group">
                                                <label for="minat_jabatan">Jabatan</label>
                                                <input type="text" class="form-control" name="minat_jabatan" id="minat_jabatan" placeholder="" required />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                            <div class="ml-auto">
                                                <button type="button" id="btnSaveJabatan" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> <?php echo lang('save') ?></button>
                                                <button type="button" id="btnUpdateJabatan" class="btn btn-primary btn-sm hide"><i class="fas fa-edit"></i> <?php echo lang('update') ?></button>
                                                <!-- hiden form untuk id pendidikan saat proses update -->
                                                <input type="hidden" name="idjabatan">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- end of formpkerjaan pencaker -->

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
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" id="btnback5" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="button" id="btnSave6" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
            </div>

            <!-- perusahaan card -->
            <div class="card perusahaanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Perusahaan Yang Dituju</h3>
                </div>
                <form action="#" id="formtujuanperusahaan">
                <div class="card-body">
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
                                <label for="tujuan_perusahaan">Nama Perusahan/Instansi</label>
                                <input type="text" class="form-control" name="tujuan_perusahaan" id="tujuan_perusahaan" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" id="btnback6" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="button" id="btnSave7" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
                <!-- /.card-footer-->
            </div>
            </form>
            <!-- datatamabahan card -->
            <div class="card datatambahanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title">Keterangan Tambahan</h3>
                </div>
                <form action="#" id="formcatatanpengantar">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Catatan pengantar kerja yang berkaitan dengan faktor-faktor yang mempengaruhi pekerjaan!
                                </div>
                                <div class="row">

                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                        <div class="form-group">
                                            <label for="catatan_pengantar">Catatan Pencaker</label>
                                            <textarea type="text" class="form-control" name="catatan_pengantar" id="catatan_pengantar" rows="3" placeholder="" required placeholder="Tahun masuk sekolah" autofocus></textarea>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="button" id="btnback7" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="button" id="btnSave8" class="btn btn-flat btn-primary">Selesai</button>
                </div>
                <!-- /.card-footer-->
                <?php echo form_close(); ?>
            </div>

        </div>
    </div>
</section>
<!-- /.content -->

<script type="text/javascript">
    var tabelpendidikan = null;
    var tabelpekerjaan = null;

    $(".year").datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years"
    });

    $(".date").datepicker({
        format: "yyyy-mm-dd",
    });

    $(document).ready(function() {

        function showtujuanpencaker() {
            $('.tujuanpencaker').toggle("display");
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').addClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showidentitaspencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').toggle("display");
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').addClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
        }

        function showpendidikanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').toggle("display");
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').addClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");

            tabelpendidikan = $('#tabelpendidikanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": "<?php echo site_url('pencaker/get_pendidikan'); ?>",
                    "type": "POST"
                },
                "deferRender": true,
                //"stateSave": true,
                "bDestroy": true,

                "columns": [{
                        "data": "id",
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "tahunmasuk"
                    },
                    {
                        "data": "tahunlulus"
                    },
                    {
                        "data": "jenjang"
                    },
                    {
                        "data": "nama_sekolah"
                    },
                    {
                        "data": "ipk"
                    },
                    {
                        "data": "keterampilan"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<a href="javascript:void(0)" data-id="' + data + '" class="btn btn-sm btn-primary btnEditPendidikan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusPendidikan" href="javascript:void(0)" data-id="' + data + '"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });

        }

        function reload_table_pendidikan() {
            $('#tabelpendidikanpencaker').DataTable().ajax.reload(null, false);
        }

        function reset_form_pendidikan() {
            $('#formpendidikanpencaker').each(function() {
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSavePendidikan').show();
            $('#btnUpdatePendidikan').addClass("hide");
        }

        function editpendidikanpencaker(id) {
            $.ajax({
                url: "<?php echo site_url('pencaker/get_pendidikan_by_id') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="tahunmasuk"]').val(data.tahunmasuk);
                    $('[name="tahunlulus"]').val(data.tahunlulus);
                    $('[name="jenjang"]').val(data.jenjang_pendidikan_id).trigger("change");
                    $('[name="nama_sekolah"]').val(data.nama_sekolah);
                    $('[name="ipk"]').val(data.ipk);
                    $('[name="keterampilan"]').val(data.keterampilan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pendidikan');
                }
            });
        }


        $('#tabelpendidikanpencaker').on('click', '.btnEditPendidikan', function() {
            //hide button simpan, show button update
            $('#btnSavePendidikan').hide();
            $('#btnUpdatePendidikan').removeClass("hide");
            var idpendidikan = $(this).attr("data-id");
            //set hidden form untuk Id pendidikan
            $('[name="idpendidikan"]').val(idpendidikan);

            editpendidikanpencaker(idpendidikan);
        });

        $('#btnSavePendidikan').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/add_pendidikan') ?>",
                type: "POST",
                data: $('#formpendidikanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pendidikan();
                        reset_form_pendidikan()
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });

        $('#btnUpdatePendidikan').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update_pendidikan') ?>",
                type: "POST",
                data: $('#formpendidikanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pendidikan();
                        reset_form_pendidikan()
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#tabelpendidikanpencaker').on('click', '.btnHapusPendidikan', function() {
            var result = confirm("Want to delete?");
            if (result) {
                var idpendidikan = $(this).attr("data-id");
                $.ajax({
                    url: "<?php echo site_url('pencaker/del_pendidikan_by_id') ?>/" + idpendidikan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            reload_table_pendidikan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
            }
        });


        function showbahasapencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.bahasapencaker').toggle("display");
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#bahasapencaker').addClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");



            $('input[id="checkboxbahasalainnya"]').click(function() {
                if ($(this).prop("checked") == true) {
                    $('#textboxbahasalainnya').removeClass("hide");
                } else if ($(this).prop("checked") == false) {
                    $('#textboxbahasalainnya').addClass("hide");
                }
            });

            $.ajax({
                url: "<?php echo site_url('pencaker/get_bahasa_pencaker') ?>",
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    //console.log(data.bahasa);
                    for (const element of data.bahasa) { 
                        $('[id="bahasa_'+element.bahasa+'"]').prop("checked", true);

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Keterampilan Bahasa');
                }
            });
        }

        function showpekerjaanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').toggle("display");
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').addClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            tabelpekerjaan = $('#tabelpekerjaanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": "<?php echo site_url('pencaker/get_pekerjaan'); ?>",
                    "type": "POST"
                },
                "deferRender": true,
                //"stateSave": true,
                "bDestroy": true,

                "columns": [{
                        "data": "id",
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "tahunmasuk"
                    },
                    {
                        "data": "tahunkeluar"
                    },
                    {
                        "data": "instansi"
                    },
                    {
                        "data": "jabatan"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<a href="javascript:void(0)" data-id="' + data + '" class="btn btn-sm btn-primary btnEditPekerjaan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusPekerjaan" href="javascript:void(0)" data-id="' + data + '"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });
        }

        function reload_table_pekerjaan() {
            $('#tabelpekerjaanpencaker').DataTable().ajax.reload(null, false);
        }

        function reset_form_pekerjaan() {
            $('#formpekerjaanpencaker').each(function() {
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSavePekerjaan').show();
            $('#btnUpdatePekerjaan').addClass("hide");
        }

        function editpekerjaanpencaker(id) {
            $.ajax({
                url: "<?php echo site_url('pencaker/get_pekerjaan_by_id') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="tahunmasukkerja"]').val(data.tahunmasuk);
                    $('[name="tahunkeluarkerja"]').val(data.tahunkeluar);
                    $('[name="instansi"]').val(data.instansi);
                    $('[name="jabatan"]').val(data.jabatan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pekerjaan');
                }
            });
        }


        $('#tabelpekerjaanpencaker').on('click', '.btnEditPekerjaan', function() {
            //hide button simpan, show button update
            $('#btnSavePekerjaan').hide();
            $('#btnUpdatePekerjaan').removeClass("hide");
            var idpekerjaan = $(this).attr("data-id");
            //set hidden form untuk Id pendidikan
            $('[name="idpekerjaan"]').val(idpekerjaan);

            editpekerjaanpencaker(idpekerjaan);
        });

        $('#btnSavePekerjaan').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/add_pekerjaan') ?>",
                type: "POST",
                data: $('#formpekerjaanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pekerjaan();
                        reset_form_pekerjaan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });

        $('#btnUpdatePekerjaan').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update_pekerjaan') ?>",
                type: "POST",
                data: $('#formpekerjaanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pekerjaan();
                        reset_form_pekerjaan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#tabelpekerjaanpencaker').on('click', '.btnHapusPekerjaan', function() {
            var result = confirm("Want to delete?");
            if (result) {
                var idpekerjaan = $(this).attr("data-id");
                $.ajax({
                    url: "<?php echo site_url('pencaker/del_pekerjaan_by_id') ?>/" + idpekerjaan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            reload_table_pekerjaan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
            }
        });

        function showjabatanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.jabatanpencaker').toggle("display");
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#jabatanpencaker').addClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            tabeljabatan = $('#tabeljabatanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": "<?php echo site_url('pencaker/get_jabatan'); ?>",
                    "type": "POST"
                },
                "deferRender": true,
                "stateSave": true,
                "bDestroy": true,

                "columns": [{
                        "data": "id",
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "nama_jabatan"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<a href="javascript:void(0)" data-id="' + data + '" class="btn btn-sm btn-primary btnEditJabatan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusJabatan" href="javascript:void(0)" data-id="' + data + '"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });
        }

        function editjabatanpencaker(id) {
            $.ajax({
                url: "<?php echo site_url('pencaker/get_jabatan_by_id') ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="minat_jabatan"]').val(data.nama_jabatan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pekerjaan');
                }
            });
        }

        $('#tabeljabatanpencaker').on('click', '.btnEditJabatan', function() {
            //hide button simpan, show button update
            $('#btnSaveJabatan').hide();
            $('#btnUpdateJabatan').removeClass("hide");
            var idjabatan = $(this).attr("data-id");
            //set hidden form untuk Id pendidikan
            $('[name="idjabatan"]').val(idjabatan);

            editjabatanpencaker(idjabatan);
        });

        function reload_table_jabatan() {
            $('#tabeljabatanpencaker').DataTable().ajax.reload(null, false);
        }

        function reset_form_jabatan() {
            $('#formjabatanpencaker').each(function() {
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSaveJabatan').show();
            $('#btnUpdateJabatan').addClass("hide");
        }

        $('#btnSaveJabatan').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/add_jabatan') ?>",
                type: "POST",
                data: $('#formjabatanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_jabatan();
                        reset_form_jabatan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });

        $('#btnUpdateJabatan').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update_jabatan') ?>",
                type: "POST",
                data: $('#formjabatanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_jabatan();
                        reset_form_jabatan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#tabeljabatanpencaker').on('click', '.btnHapusJabatan', function() {
            var result = confirm("Want to delete?");
            if (result) {
                var idjabatan = $(this).attr("data-id");
                $.ajax({
                    url: "<?php echo site_url('pencaker/del_jabatan_by_id') ?>/" + idjabatan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            reload_table_jabatan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
            }
        });

        function showperusahaanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').toggle("display");
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').addClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showdatatambahanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.bahasapencaker').hide();
            $('.datatambahanpencaker').toggle("display");

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').addClass("active");
        }

        //Default Get Pencaker data
        $.ajax({
            url: "<?php echo site_url('pencaker/get_pencaker') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                //selected tujuan
                if (data.tujuan == 'tujuan1') {
                    $("#tujuan1").prop("checked", true);
                    $('#perusahaanpencaker').addClass("hide");
                } else if (data.tujuan == 'tujuan2') {
                    $("#tujuan2").prop("checked", true);
                    $('#perusahaanpencaker').removeClass("hide");
                } else {
                    $('#perusahaanpencaker').addClass("hide");
                }

                //keterangan umum
                $('[name="nopendaftaran"]').val(data.nopendaftaran);
                $('[name="namalengkap"]').val(data.name);
                $('[name="nik"]').val(data.username);
                $('[name="tgllahir"]').datepicker('setDate', data.tgllahir);

                //selected jenkel
                if (data.jenkel == 'L')
                    $("#jenkel1").prop("checked", true);
                else if (data.jenkel == 'P')
                    $("#jenkel2").prop("checked", true);

                $('[name="tempatlahir"]').val(data.tempatlahir);
                $('[name="tgllahir"]').val(data.tgllahir);
                $('[name="statusnikah"]').val(data.statusnikah).trigger("change");
                $('[name="tinggibadan"]').val(data.tinggibadan);
                $('[name="beratbadan"]').val(data.beratbadan);
                $('[name="alamat"]').val(data.alamat);
                $('[name="kodepos"]').val(data.kodepos);

                //keterampilan bahasa 
                if(data.bahasa_lainnya != '')
                {
                    $('#checkboxbahasalainnya').prop("checked",true);
                    $('#textboxbahasalainnya').removeClass("hide");

                    $('[name="txt_bahasa_lainnya"]').val(data.bahasa_lainnya);
                }
                
                //selected lokasi jabatan
                if (data.lokasi_jabatan == 'DN')
                    $("#lokasijabatan1").prop("checked", true);
                else if (data.lokasi_jabatan == 'LN')
                    $("#lokasijabatan2").prop("checked", true);

                //Perusahaan yang dituju
                $('[name="tujuan_perusahaan"]').val(data.tujuan_perusahaan);

                //Keterangan tambahan
                $('[name="catatan_pengantar"]').val(data.catatan_pengantar);


            }, 
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error');
            }
        });

        //menu navigasi form
        $('#tujuanpencaker').click(function() {
            showtujuanpencaker();
        });

        $('#identitaspencaker').click(function() {
            showidentitaspencaker();
        });

        $('#pendidikanpencaker').click(function() {
            showpendidikanpencaker();
        });

        $('#bahasapencaker').click(function() {
            showbahasapencaker();
        });

        $('#pekerjaanpencaker').click(function() {
            showpekerjaanpencaker();
        });

        $('#jabatanpencaker').click(function() {
            showjabatanpencaker();
        });

        $('#perusahaanpencaker').click(function() {
            showperusahaanpencaker();
        });

        $('#datatambahanpencaker').click(function() {
            showdatatambahanpencaker();
        });

        $('#btnback1').click(function() {
            showtujuanpencaker();
        });

        $('#btnback2').click(function() {
            showidentitaspencaker();
        });

        $('#btnback3').click(function() {
            showpendidikanpencaker();
        });

        $('#btnback4').click(function() {
            showbahasapencaker();
        });

        $('#btnback5').click(function() {
            showpekerjaanpencaker();
        });

        $('#btnback6').click(function() {
            showjabatanpencaker();
        });

        $('#btnback7').click(function() {
            showperusahaanpencaker();
        });

        //TOMBOL PREV/NEXT

        $('#btnSave1').click(function() {
            // ajax adding data to database
            $.ajax({
                url: "<?php echo site_url('pencaker/update1') ?>",
                type: "POST",
                data: $('#formtujuanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        console.log(data.hasil);
                        showidentitaspencaker();
                        if (data.tujuan == 'tujuan1')
                            $('#perusahaanpencaker').addClass("hide");
                        else
                            $('#perusahaanpencaker').removeClass("hide");
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave2').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update2') ?>",
                type: "POST",
                data: $('#formidentitaspencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) 
                    {
                        showpendidikanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave3').click(function() {
            showbahasapencaker();
        });

        $('#btnSave4').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update4') ?>",
                type: "POST",
                data: $('#formbahasapencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) 
                    {
                        showpekerjaanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
            
        });

        $('#btnSave5').click(function() {
            showjabatanpencaker();
        });

        $('#btnSave6').click(function() {            
            $.ajax({
                url: "<?php echo site_url('pencaker/update6') ?>",
                type: "POST",
                data: $('#formlokasijabatan').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) 
                    {
                        showperusahaanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave7').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update7') ?>",
                type: "POST",
                data: $('#formtujuanperusahaan').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) 
                    {
                        showdatatambahanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave8').click(function() {
            $.ajax({
                url: "<?php echo site_url('pencaker/update8') ?>",
                type: "POST",
                data: $('#formcatatanpengantar').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) 
                    {
                         window.location.href = 'dashboard/';
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.form-validate').validate();

        //Initialize Select2 Elements
        $('.select2').select2()



        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });

    })

    function previewImage(input, previewDom) {

        if (input.files && input.files[0]) {

            $(previewDom).show();

            var reader = new FileReader();

            reader.onload = function(e) {
                $(previewDom).find('img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            $(previewDom).hide();
        }

    }

    function recaptchKeysHideShow(checked) {

        if (!checked)
            $('.recaptchKeysHideShow').hide(300);
        else
            $('.recaptchKeysHideShow').show(300);

    }

    recaptchKeysHideShow(<?php echo setting('google_recaptcha_enabled') ?>);
</script>

<?php include viewPath('includes/footer'); ?>