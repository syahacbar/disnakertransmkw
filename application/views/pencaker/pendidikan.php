<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('pendidikan') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('pendidikan') ?></li>
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
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunmasuk">Tahun Masuk</label>
                                <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunlulus">Tahun Lulus</label>
                                <input type="number" class="form-control" name="tahunlulus" id="tahunlulus" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                            <div class="form-group">
                                <label for="jenjang">Nama Sekolah</label>
                                <input type="text" class="form-control" name="jenjang" id="jenjang" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="ipk">IPK</label>
                                <input type="text" class="form-control" name="ipk" id="ipk" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">
                            <div class="form-group">
                                <label for="keterampilan">Keterampilan</label>
                                <input type="text" class="form-control" name="keterampilan" id="keterampilan" autofocus />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunmasuk">Tahun Masuk</label>
                                <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunlulus">Tahun Lulus</label>
                                <input type="number" class="form-control" name="tahunlulus" id="tahunlulus" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                            <div class="form-group">
                                <label for="jenjang">Nama Sekolah</label>
                                <input type="text" class="form-control" name="jenjang" id="jenjang" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="ipk">IPK</label>
                                <input type="text" class="form-control" name="ipk" id="ipk" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">
                            <div class="form-group">
                                <label for="keterampilan">Keterampilan</label>
                                <input type="text" class="form-control" name="keterampilan" id="keterampilan" autofocus />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunmasuk">Tahun Masuk</label>
                                <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunlulus">Tahun Lulus</label>
                                <input type="number" class="form-control" name="tahunlulus" id="tahunlulus" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                            <div class="form-group">
                                <label for="jenjang">Nama Sekolah</label>
                                <input type="text" class="form-control" name="jenjang" id="jenjang" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="ipk">IPK</label>
                                <input type="text" class="form-control" name="ipk" id="ipk" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">
                            <div class="form-group">
                                <label for="keterampilan">Keterampilan</label>
                                <input type="text" class="form-control" name="keterampilan" id="keterampilan" autofocus />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunmasuk">Tahun Masuk</label>
                                <input type="number" class="form-control" name="tahunmasuk" id="tahunmasuk" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="tahunlulus">Tahun Lulus</label>
                                <input type="number" class="form-control" name="tahunlulus" id="tahunlulus" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                            <div class="form-group">
                                <label for="jenjang">Nama Sekolah</label>
                                <input type="text" class="form-control" name="jenjang" id="jenjang" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-1 ">
                            <div class="form-group">
                                <label for="ipk">IPK</label>
                                <input type="text" class="form-control" name="ipk" id="ipk" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-2 col-lg-3 ">
                            <div class="form-group">
                                <label for="keterampilan">Keterampilan</label>
                                <input type="text" class="form-control" name="keterampilan" id="keterampilan" autofocus />
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <a class="btn btn-secondary" href="<?php echo url('starter/identitas') ?>" role="button">Kembali</a>
                <a class="btn btn-primary" href="<?php echo url('starter/bahasa') ?>" role="button">Lanjut</a>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>