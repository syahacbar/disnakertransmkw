<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<style type="text/css">
    .hide {
        display: none;
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
                <?php echo form_open_multipart('settings/generalUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
                <div class="card-body">
                    <div class="form-card">
                        <div class="alert alert-success" role="alert">
                            Silakan pilih tujuan Anda membuat Kartu Kuning!
                        </div>
                        <div class="row mt-3" id="pilihTujuan">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                <label for="">Pilih Tujuan Anda</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tujuan" id="tujuan1">
                                    <label class="form-check-label" for="tujuan1">
                                        Mencari Pekerjaan
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tujuan" id="tujuan2">
                                    <label class="form-check-label" for="tujuan2">
                                        Melengkapi Persyaratan
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
                <!-- /.card-footer-->
                <?php echo form_close(); ?>
            </div>
            <!-- /.card -->

            <!-- identitaspencaker card -->
            <div class="card identitaspencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title"><?php echo lang('identitas_pencaker') ?></h3>
                </div>
                <?php echo form_open_multipart('settings/generalUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
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
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" name="nik" id="nik" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="nopendaftaran">Nomor Pendaftaran</label>
                                <input type="text" class="form-control" name="nopendaftaran" id="nopendaftaran" />
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
                                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel1">
                                            <label class="form-check-label" for="jenkel1">
                                                Laki-laki
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel2">
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

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <label for="statusnikah">Status Menikah</label>
                            <div class="dropdown w-100">
                                <button class="btn dropdown-toggle w-100" type="button" id="statusnikah" data-toggle="dropdown" aria-expanded="false">
                                    - Pilih -
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="statusnikah">
                                    <li><a class="dropdown-item" href="#">Kawin</a></li>
                                    <li><a class="dropdown-item" href="#">Belum Kawin</a></li>
                                    <li><a class="dropdown-item" href="#">Janda</a></li>
                                    <li><a class="dropdown-item" href="#">Duda</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="tinggibadan">Tinggi Badan</label>
                                <input type="number" class="form-control" name="tinggibadan" id="tinggibadan" placeholder="" required placeholder="Satuan cm, misal 160" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group">
                                <label for="beratbadan">Berat Badan</label>
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
                    <button type="submit" class="btn btn-flat btn-secondary"><?php echo lang('sebelumnya') ?></button>
                    <button type="submit" class="btn btn-flat btn-primary"><?php echo lang('selanjutnya') ?></button>
                </div>
                <!-- /.card-footer-->
                <?php echo form_close(); ?>
            </div>

            <!-- pendidikanpencaker card -->
            <div class="card pendidikanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title"><?php echo lang('pendidikan_pencaker') ?></h3>
                </div>
                <?php echo form_open_multipart('settings/generalUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan isi data terkait pendidikan Anda pada bidang-bidang di bawah ini!
                                </div>
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

                                    <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                                        <label for="jenjang">Jenjang</label>
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle w-100" type="button" id="jenjang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                - Pilih -
                                            </button>
                                            <ul class="dropdown-menu w-100" aria-labelledby="jenjang">
                                                <a class="dropdown-item" href="#">SD</a>
                                                <a class="dropdown-item" href="#">SMTP</a>
                                                <a class="dropdown-item" href="#">SMTA</a>
                                                <a class="dropdown-item" href="#">D1</a>
                                                <a class="dropdown-item" href="#">D2</a>
                                                <a class="dropdown-item" href="#">D3</a>
                                                <a class="dropdown-item" href="#">S-1/Sarjana</a>
                                                <a class="dropdown-item" href="#">S-2/Magister</a>
                                                <a class="dropdown-item" href="#">S-3/Doktor</a>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-3 ">
                                        <div class="form-group">
                                            <label for="jenjang">Nama Sekolah</label>
                                            <input type="text" class="form-control" name="jenjang" id="jenjang" required autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-1 col-lg-1 ">
                                        <div class="form-group">
                                            <label for="ipk">IPK</label>
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
                                            <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('save') ?></a>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-5">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <table id="tabelpendidikanpencaker" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tahun Masuk</th>
                                                    <th>Tahun Lulus</th>
                                                    <th>Jenjang</th>
                                                    <th>Nama Sekolah</th>
                                                    <th>IPK</th>
                                                    <th>Keterampilan</th>
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
                <!-- /.card-footer-->
                <?php echo form_close(); ?>
            </div>

            <!-- pekerjaanpencaker card -->
            <div class="card pekerjaanpencaker" style="display: none;">
                <div class="card-header with-border">
                    <h3 class="card-title"><?php echo lang('pekerjaan_pencaker') ?></h3>
                </div>
                <?php echo form_open_multipart('settings/generalUpdate', ['class' => 'form-validate', 'autocomplete' => 'off', 'method' => 'post']); ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-card">
                                <div class="alert alert-success" role="alert">
                                    Silakan isi data terkait pengalaman kerja Anda pada bidang-bidang di bawah ini!
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                        <div class="form-group">
                                            <label for="tahunmasuk">Tahun Masuk</label>
                                            <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                        <div class="form-group">
                                            <label for="tahunkeluar">Tahun Keluar</label>
                                            <input type="number" class="form-control" name="tahunkeluar" id="tahunkeluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
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
                                            <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('save') ?></a>
                                        </div>
                                    </div>
                                </div>

                                <hr>
                                <div class="row mt-5">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <table id="tabelpekerjaanpencaker" class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Tahun Masuk</th>
                                                    <th>Tahun Keluar</th>
                                                    <th>Nama Perusahan/Instansi</th>
                                                    <th>Jabatan</th>
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
                <!-- /.card-footer-->
                <?php echo form_close(); ?>
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
    $(document).ready(function() {
        $('#tujuanpencaker').click(function() {
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
        });

        $('#identitaspencaker').click(function() {
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
        });

        $('#pendidikanpencaker').click(function() {
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
        });

        $('#pekerjaanpencaker').click(function() {
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
        });

        $('#perusahaanpencaker').click(function() {
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
        });

        $('#datatambahanpencaker').click(function() {
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