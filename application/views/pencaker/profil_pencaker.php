<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<style type="text/css">
    .hide {
        display: none;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet" />
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
                                <select name="statusnikah" id="statusnikah" class="w-100 form-control">
                                    <option value="Kawin">Kawin</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Janda">Janda</option>
                                    <option value="Duda">Duda</option>
                                </select>
                            </div>

                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 agama">
                                <label for="agama">Agama</label>
                                <select name="agama" id="agama" class="w-100 form-control">
                                    <option value="">- Pilih -</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
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
                                            <select name="jenjang" id="jenjang" class="w-100 form-control">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <?php foreach ($jenjang_pendidikan as $jp) : ?>
                                                    <option value="<?php echo $jp->id; ?>"><?php echo $jp->jenjang; ?></option>
                                                <?php endforeach; ?>
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
                                <?php
                                $arr_bhs = explode(',', $ket_bahasa_pencaker->keterampilan_bahasa);

                                ?>

                                <!-- form bahasa pencaker-->
                                <form action="#" id="formbahasapencaker">
                                    <div class="row mb-5">
                                        <?php foreach ($ket_bahasa as $kb) : ?>
                                            <div class="col-12 col-sm-12 col-md-4 col-lg-3 mt-3">
                                                <div class="form-check">
                                                    <input class="form-check-input ket_bahasa" type="checkbox" name="ket_bahasa[]" id="<?php echo "b_" . $kb->bahasa; ?>" value="<?php echo $kb->bahasa; ?>" <?php if (in_array($kb->bahasa, $arr_bhs)) {
                                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                                }; ?>>
                                                    <label class="form-check-label" for="<?php echo $kb->bahasa; ?>">
                                                        <?php echo $kb->bahasa; ?>
                                                    </label>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                        <div id="textboxbahasalainnya" class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4">
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


<?php include viewPath('includes/footer'); ?>
<script src="<?php echo base_url(); ?>/assets/js/profil-pencaker-custom-js.js"></script>
<script type="text/javascript">
    var baseURL = "<?php echo site_url() ?>";
    var baseURL1 = "<?php echo setting() ?>";
</script>