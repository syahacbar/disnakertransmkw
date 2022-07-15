<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    button#dropdownMenuButton1 {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #000;
        background-color: transparent;
        border: 1px solid #ced4da;
        box-shadow: none;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('identitas') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('identitas') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="form-card">
                    <div class="alert alert-success" role="alert">
                        Lengkapi data diri Anda di bawah ini!
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="namalengkap">Nama Lengkap</label>
                    <input type="text" class="form-control" name="namalengkap" id="namalengkap" required placeholder="Nama Sesuai KTP" autofocus />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="tempatlahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir Sesuai KTP" required placeholder="Nama Sesuai KTP" autofocus />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tgllahir" id="tgllahir" required placeholder="Tanggal Lahir Sesuai KTP" autofocus />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
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

            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <label for="kode_pos">Status Menikah</label>
                <div class="dropdown w-100">
                    <button class="btn dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        - Pilih -
                    </button>
                    <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Kawin</a></li>
                        <li><a class="dropdown-item" href="#">Belum Kawin</a></li>
                        <li><a class="dropdown-item" href="#">Janda</a></li>
                        <li><a class="dropdown-item" href="#">Duda</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="tinggibadan">Tinggi Badan</label>
                    <input type="number" class="form-control" name="tinggibadan" id="tinggibadan" placeholder="" required placeholder="Satuan cm, misal 160" autofocus />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="beratbadan">Berat Badan</label>
                    <input type="number" class="form-control" name="beratbadan" id="beratbadan" placeholder="" required placeholder="Satuan kg, misal 56" autofocus />
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="alamat">Alamat Tinggal</label>
                    <textarea type="text" class="form-control" name="alamat" id="alamat" required placeholder="Alamat tinggal sesuai KTP" autofocus> </textarea>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                <div class="form-group">
                    <label for="kodepos">Kode Pos</label>
                    <input type="text" class="form-control" name="kodepos" id="kodepos" placeholder="" required placeholder="Ketik Kode pos di sini" autofocus />
                </div>
            </div>


        </div>
        <a class="btn btn-secondary" href="<?php echo url('starter/tujuan') ?>" role="button">Kembali</a>
        <a class="btn btn-primary" href="<?php echo url('starter/pendidikan') ?>" role="button">Lanjut</a>

    </div>

</section>
<!-- /.content -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


<?php include viewPath('includes/footer'); ?>