<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<style>
    .dropzone {
        min-height: 94px !important;
        border: 2px solid rgba(0, 0, 0, .3);
        background: #fff;
        padding: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .dz-message {
        margin: 1rem !important;
    }

    .dz-message h6 {
        margin: 0 !important;
    }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('doc_pencaker') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('doc_pencaker') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="card">
            <div class="card-header with-border">

                <div class="card-tools pull-right">
                    <?php if (hasPermissions('permissions_add')) : ?>
                        <a href="<?php echo url('permissions/add') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <?php echo lang('create_permission') ?></a>
                    <?php endif ?>
                </div>

            </div>
            <div class="card-body">
                <table id="tabeldokumen" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Dokumen</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td width="60">1</td>
                            <td>
                                Kartu Tanda Penduduk
                            </td>
                            <td>
                                Sudah Diunggah | Belum
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('file_upload') ?></a>

                            </td>
                        </tr>

                        <tr>
                            <td width="60">1</td>
                            <td>
                                Ijazah Terakhir
                            </td>
                            <td>
                                Sudah Diunggah | Belum
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('file_upload') ?></a>

                            </td>
                        </tr>
                        <tr>
                            <td width="60">1</td>
                            <td>
                                Transkrip Nilai
                            </td>
                            <td>
                                Sudah Diunggah | Belum
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('file_upload') ?></a>

                            </td>
                        </tr>
                        <tr>
                            <td width="60">1</td>
                            <td>
                                Riwayat Hidup
                            </td>
                            <td>
                                Sudah Diunggah | Belum
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('file_upload') ?></a>


                            </td>
                        </tr>
                        <tr>
                            <td width="60">1</td>
                            <td>
                                SKCK
                            </td>
                            <td>
                                Sudah Diunggah | Belum
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('file_upload') ?></a>

                            </td>
                        </tr>
                        <tr>
                            <td width="60">1</td>
                            <td>
                                Surat Keterangan Berbadan Sehat
                            </td>
                            <td>
                                Sudah Diunggah | Belum
                            </td>
                            <td>
                                <a href="" class="btn btn-primary btn-sm"><span class="pr-1"></span> <?php echo lang('file_upload') ?></a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>
<!-- Dropzone JS -->
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<!-- Modal -->
<div class="modal fade" id="unggahKTP" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="unggahKTPLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="unggahKTPLabel">Unggah File/Dokumen</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="dropzone" id="dokumen_pekerja">
                    <div name="userfile" class="dz-message">
                        <h6>Klik atau drop file/dokumen ke sini</h6>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Unggah</button>
            </div>
        </div>
    </div>
</div>
<?php include viewPath('includes/footer'); ?>

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->