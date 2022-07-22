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
                    <h3 class="card-title"><?php echo lang('tujuan_pencaker') ?></h3>
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
                    <h3 class="card-title"><?php echo lang('identitas_pencaker') ?></h3>
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
                                    <input type="date" class="form-control" name="tgllahir" id="tgllahir" required placeholder="Tanggal Lahir Sesuai KTP" autofocus />
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
                    <h3 class="card-title"><?php echo lang('pendidikan_pencaker') ?></h3>
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
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 ">
                                        <div class="form-group">
                                            <label for="tahunmasuk">Tahun Masuk</label>
                                            <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 ">
                                        <div class="form-group">
                                            <label for="tahunlulus">Tahun Lulus</label>
                                            <input type="number" class="form-control" name="tahunlulus" id="tahunlulus" required autofocus />
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 jenjang">
                                        <label for="jenjang">Jenjang</label>
                                        <select name="jenjang" id="jenjang" class="w-100">
                                            <option value="">-- Pilih Salah Satu --</option>
                                            <option value="SD">SD</option>
                                            <option value="SMTP">SMTP</option>
                                            <option value="SMTA">SMTA</option>
                                            <option value="D-I">D-I</option>
                                            <option value="D-II">D-II</option>
                                            <option value="D-III">D-III</option>
                                            <option value="D-IV/S-1/Sarjana">D-IV/S-1/Sarjana</option>
                                            <option value="S-2/Magister">S-2/Magister</option>
                                            <option value="S-3/Doktor">S-3/Doktor</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                                        <div class="form-group">
                                            <label for="nama_sekolah">Nama Sekolah</label>
                                            <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" required autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-1 col-lg-1 ">
                                        <div class="form-group">
                                            <label for="ipk">NEM/NUN/IPK</label>
                                            <input type="text" class="form-control" name="ipk" id="ipk" autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2 ">
                                        <div class="form-group">
                                            <label for="keterampilan">Keterampilan</label>
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
                    <button type="submit" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
            </div>

            <!-- pekerjaanpencaker card -->
            <div class="card pekerjaanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title"><?php echo lang('pekerjaan_pencaker') ?></h3>
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
                                            <input type="number" class="form-control" name="tahunmasukkerja" id="tahunmasukkerja" placeholder="" required placeholder="Tahun masuk kerja" autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                        <div class="form-group">
                                            <label for="tahunkeluarkerja">Tahun Keluar</label>
                                            <input type="number" class="form-control" name="tahunkeluarkerja" id="tahunkeluarkerja" placeholder="" required placeholder="Tahun keluar kerja" autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                        <div class="form-group">
                                            <label for="instansi">Nama Perusahan/Instansi</label>
                                            <input type="text" class="form-control" name="instansi" id="instansi" placeholder="" required placeholder="Nama Perusahan/Instansi" autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
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
                    <button type="submit" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
            </div>

            <!-- perusahaan card -->
            <div class="card perusahaanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title"><?php echo lang('perusahaan_pencaker') ?></h3>
                </div>
                <?php echo form_open_multipart('settings/generalUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan tentukan tujuan perusahan dan jabatan pilihan Anda!
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                            <div class="form-group">
                                <label for="nama_perusahan">Nama Perusahan/Instansi</label>
                                <input type="text" class="form-control" name="nama_perusahan" id="nama_perusahan" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 ">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
                <!-- /.card-footer-->
                <?php echo form_close(); ?>
            </div>

            <!-- datatamabahan card -->
            <div class="card datatambahanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title"><?php echo lang('datatambahan_pencaker') ?></h3>
                </div>
                <?php echo form_open_multipart('settings/generalUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
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
                                            <label for="tahun_masuk">Catatan Pencaker</label>
                                            <textarea type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" rows="3" placeholder="" required placeholder="Tahun masuk sekolah" autofocus></textarea>
                                        </div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                                                <label>Lokasi jabatan yang diinginkan</label>
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Dalam Negeri
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Luar Negeri
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('save') ?></button>
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
    
    $(document).ready(function() {

        function showtujuanpencaker()
        {
            $('.tujuanpencaker').toggle("display");
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').addClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showidentitaspencaker()
        {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').toggle("display");
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').addClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showpendidikanpencaker()
        {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').toggle("display");
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').addClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            tabelpendidikan = $('#tabelpendidikanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true, 
                "order": [[ 0, 'asc' ]], 
                "ajax":
                {
                    "url": "<?php echo site_url('pencaker/get_pendidikan');?>", 
                    "type": "POST"
                },
                "deferRender": true,
                "stateSave": true,
                "bDestroy": true,

                "columns": [
                    {"data": "id","sortable": false, 
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }  
                    }, 
                    {"data": "tahunmasuk"},
                    {"data": "tahunlulus"},
                    {"data": "jenjang"},
                    {"data": "nama_sekolah"},
                    {"data": "ipk"},
                    {"data": "keterampilan"},
                    {"data": "id",
                        "render": 
                        function( data, type, row, meta ) {
                            return '<a href="javascript:void(0)" data-id="'+data+'" class="btn btn-sm btn-primary btnEditPendidikan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusPendidikan" href="javascript:void(0)" data-id="'+data+'"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });

        }

        function reload_table_pendidikan()
        {
            $('#tabelpendidikanpencaker').DataTable().ajax.reload(null, false);
        } 

        function reset_form_pendidikan()
        {
            $( '#formpendidikanpencaker' ).each(function(){
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSavePendidikan').show();
            $('#btnUpdatePendidikan').addClass("hide");
        }

        function editpendidikanpencaker(id)
        {
            $.ajax({
                url: "<?php echo site_url('pencaker/get_pendidikan_by_id') ?>/"+ id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="tahunmasuk"]').val(data.tahunmasuk);
                    $('[name="tahunlulus"]').val(data.tahunlulus);
                    $('[name="jenjang"]').val(data.jenjang).trigger("change");
                    $('[name="nama_sekolah"]').val(data.nama_sekolah);
                    $('[name="ipk"]').val(data.ipk);
                    $('[name="keterampilan"]').val(data.keterampilan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pendidikan');
                }
            });
        }


        $('#tabelpendidikanpencaker').on('click', '.btnEditPendidikan', function () {
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

        $('#tabelpendidikanpencaker').on('click', '.btnHapusPendidikan', function () {
            var result = confirm("Want to delete?");
            if (result) 
            {
                var idpendidikan = $(this).attr("data-id");
                 $.ajax({
                    url: "<?php echo site_url('pencaker/del_pendidikan_by_id') ?>/"+ idpendidikan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if(data.status)
                        {
                            reload_table_pendidikan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
             }
        });

        function showpekerjaanpencaker()
        {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').toggle("display");
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').addClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            tabelpekerjaan = $('#tabelpekerjaanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true, 
                "order": [[ 0, 'asc' ]], 
                "ajax":
                {
                    "url": "<?php echo site_url('pencaker/get_pekerjaan');?>", 
                    "type": "POST"
                },
                "deferRender": true,
                "stateSave": true,
                "bDestroy": true,

                "columns": [
                    {"data": "id","sortable": false, 
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }  
                    }, 
                    {"data": "tahunmasuk"},
                    {"data": "tahunkeluar"},
                    {"data": "instansi"},
                    {"data": "jabatan"},
                    {"data": "id",
                        "render": 
                        function( data, type, row, meta ) {
                            return '<a href="javascript:void(0)" data-id="'+data+'" class="btn btn-sm btn-primary btnEditPekerjaan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusPekerjaan" href="javascript:void(0)" data-id="'+data+'"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });
        }

        function reload_table_pekerjaan()
        {
            $('#tabelpekerjaanpencaker').DataTable().ajax.reload(null, false);
        } 

        function reset_form_pekerjaan()
        {
            $( '#formpekerjaanpencaker' ).each(function(){
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSavePekerjaan').show();
            $('#btnUpdatePekerjaan').addClass("hide");
        }

        function editpekerjaanpencaker(id)
        {
            $.ajax({
                url: "<?php echo site_url('pencaker/get_pekerjaan_by_id') ?>/"+ id,
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


        $('#tabelpekerjaanpencaker').on('click', '.btnEditPekerjaan', function () {
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

        $('#tabelpekerjaanpencaker').on('click', '.btnHapusPekerjaan', function () {
            var result = confirm("Want to delete?");
            if (result) 
            {
                var idpekerjaan = $(this).attr("data-id");
                 $.ajax({
                    url: "<?php echo site_url('pencaker/del_pekerjaan_by_id') ?>/"+ idpekerjaan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if(data.status)
                        {
                            reload_table_pekerjaan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
             }
        });

        function showperusahaanpencaker()
        {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').toggle("display");
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#perusahaanpencaker').addClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showdatatambahanpencaker()
        {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').toggle("display");

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').addClass("active");
        }

        //Default Get Pencaker data
        $.ajax({
            url: "<?php echo site_url('pencaker/get_pencaker') ?>",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                //selected tujuan
                if (data.tujuan == 'tujuan1')
                    $("#tujuan1").prop("checked", true);
                else
                    $("#tujuan2").prop("checked", true);

                //keterangan umum
                $('[name="namalengkap"]').val(data.name);
                $('[name="nik"]').val(data.username);

                //selected jenkel
                if (data.jenkel == 'L')
                    $("#jenkel1").prop("checked", true);
                else
                    $("#jenkel2").prop("checked", true);

                $('[name="tempatlahir"]').val(data.tempatlahir);
                $('[name="tgllahir"]').val(data.tgllahir);
                $('[name="statusnikah"]').val(data.statusnikah).trigger("change");
                $('[name="tinggibadan"]').val(data.tinggibadan);
                $('[name="beratbadan"]').val(data.beratbadan);
                $('[name="alamat"]').val(data.alamat);
                $('[name="kodepos"]').val(data.kodepos);


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

        $('#pekerjaanpencaker').click(function() {
            showpekerjaanpencaker();
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
                        showidentitaspencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave2').click(function() {
            // ajax adding data to database
            $.ajax({
                url: "<?php echo site_url('pencaker/update2') ?>",
                type: "POST",
                data: $('#formidentitaspencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        showinfopendidikan();
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