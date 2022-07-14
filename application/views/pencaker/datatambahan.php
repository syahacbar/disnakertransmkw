<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('datatambahan') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('datatambahan') ?></li>
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
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <a class="btn btn-secondary" href="<?php echo url('starter/perusahan') ?>" role="button">Kembali</a>
                <a class="btn btn-primary" href="" role="button">Simpan</a>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>