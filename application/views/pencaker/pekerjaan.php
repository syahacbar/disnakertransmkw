<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('pekerjaan') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('pekerjaan') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
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
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                            <div class="form-group">
                                <label for="tahunmasuk">Tahun Masuk</label>
                                <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                            <div class="form-group">
                                <label for="tahunkeluar">Tahun Keluar</label>
                                <input type="number" class="form-control" name="tahunkeluar" id="tahunkeluar" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                            <div class="form-group">
                                <label for="instansi">Nama Perusahan/Instansi</label>
                                <input type="text" class="form-control" name="instansi" id="instansi" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="" autofocus />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <a class="btn btn-secondary" href="<?php echo url('starter/bahasa') ?>" role="button">Kembali</a>
                <a class="btn btn-primary" href="<?php echo url('starter/perusahan') ?>" role="button">Lanjut</a>
            </div>
        </div>

    </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>