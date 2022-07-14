<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('bahasa') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('bahasa') ?></li>
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
                        Silakan pilih salah satu atau beberapa bahasa yang Anda kuasai pada pilihan di bawah ini!
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="indonesia">
                                <label class="form-check-label" for="indonesia">
                                    Bahasa Indonesia
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="inggris">
                                <label class="form-check-label" for="inggris">
                                    Bahasa Inggris
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="jerman">
                                <label class="form-check-label" for="jerman">
                                    Bahasa Jerman
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="jepang">
                                <label class="form-check-label" for="jepang">
                                    Bahasa Jepang
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="mandarin">
                                <label class="form-check-label" for="mandarin">
                                    Bahasa Mandarin
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="belanda">
                                <label class="form-check-label" for="belanda">
                                    Bahasa Belanda
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="perancis">
                                <label class="form-check-label" for="perancis">
                                    Bahasa Perancis
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="bahasa" type="checkbox" value="" id="arab">
                                <label class="form-check-label" for="arab">
                                    Bahasa Arab
                                </label>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                            <div class="form-group">
                                <label for="lainnya">Lainnya</label>
                                <textarea type="text" class="form-control" name="lainnya" id="lainnya" required placeholder="Deskripsikan bahasa yang Anda kuasai di sini" autofocus></textarea>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <a class="btn btn-secondary" href="<?php echo url('starter/pendidikan') ?>" role="button">Kembali</a>
                <a class="btn btn-primary" href="<?php echo url('starter/pekerjaan') ?>" role="button">Lanjut</a>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>