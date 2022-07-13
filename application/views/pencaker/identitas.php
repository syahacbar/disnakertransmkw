<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

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
            <div class="col-lg-12">
                <div class="form-card">
                    <div class="alert alert-success" role="alert">
                        Lengkapi data diri Anda di bawah ini!
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" name="namalengkap" id="namalengkap" required placeholder="Nama Sesuai KTP" autofocus />
                    </div>

                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir Sesuai KTP" required placeholder="Nama Sesuai KTP" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required placeholder="Tanggal Lahir Sesuai KTP" autofocus />
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="" required placeholder="Pilih Jenis Kelamin" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="alamat_tinggal">Alamat Tinggal</label>
                        <textarea type="text" class="form-control" name="alamat_tinggal" id="alamat_tinggal" required placeholder="Alamat tinggal sesuai KTP" autofocus> </textarea>
                    </div>

                    <div class="form-group">
                        <label for="kode_pos">Kode Pos</label>
                        <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="" required placeholder="Ketik Kode pos di sini" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="Status Menikah">Status Menikah</label>
                        <input type="text" class="form-control" name="Status Menikah" id="Status Menikah" required placeholder="Pilih" autofocus />
                    </div>

                    <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan</label>
                        <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="" required placeholder="Satuan cm, misal 160" autofocus />
                    </div>
                    <div class="form-group">
                        <label for="berat_badan">Berat Badan</label>
                        <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="" required placeholder="Satuan kg, misal 56" autofocus />
                    </div>
                </div>
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                <input type="button" name="next" class="next action-button" value="Next Step" />
            </div>
        </div>

</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>