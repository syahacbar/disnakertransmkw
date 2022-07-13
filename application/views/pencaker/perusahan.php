<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('perusahan') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('perusahan') ?></li>
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
                        Silakan pilih tujuan Anda membuat Kartu Kuning!
                    </div>
                    <div class="row mt-5" id="pilihTujuan">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Mencari Pekerjaan
                                </label>
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Melengkapi Persyaratan
                                </label>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next Step" />
            </div>
        </div>
    </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>