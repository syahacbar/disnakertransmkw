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




            <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-5">
                <a class="btn btn-secondary" href="<?php echo url('starter/pekerjaan') ?>" role="button">Kembali</a>
                <a class="btn btn-primary" href="<?php echo url('starter/datatambahan') ?>" role="button">Lanjut</a>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>