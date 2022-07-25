<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<style>
    #jenisdokumen {
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        display: block;
        width: 100%;
        height: calc(2.25rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        box-shadow: inset 0 0 0 transparent;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .alert-warning {
    color: #664d03;
    background-color: #fff3cd;
    border-color: #ffecb5;
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3"><?php echo lang('doc_pencaker') ?></h3>
                        <div class="ml-auto p-2">
                            <button data-toggle="modal" data-target="#unggahDokumen" class="btn btn-primary btn-sm"><span class="pr-1"><i class="fa fa-plus"></i></span> <?php echo lang('upload') ?></button>
                        </div>
                    </div>

                    <!-- /.card-header -->
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
                                        <a href="<?php echo url('users/edit/') ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo url('users/view/') ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo url('users/delete/') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="60">2</td>
                                    <td>
                                        Ijazah Terakhir
                                    </td>
                                    <td>
                                        Sudah Diunggah | Belum
                                    </td>
                                    <td>
                                        <a href="<?php echo url('users/edit/') ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo url('users/view/') ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo url('users/delete/') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>


                                    </td>
                                </tr>
                                <tr>
                                    <td width="60">3</td>
                                    <td>
                                        Transkrip Nilai
                                    </td>
                                    <td>
                                        Sudah Diunggah | Belum
                                    </td>
                                    <td>
                                        <a href="<?php echo url('users/edit/') ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo url('users/view/') ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo url('users/delete/') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>


                                    </td>
                                </tr>
                                <tr>
                                    <td width="60">4</td>
                                    <td>
                                        Riwayat Hidup
                                    </td>
                                    <td>
                                        Sudah Diunggah | Belum
                                    </td>
                                    <td>
                                        <a href="<?php echo url('users/edit/') ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo url('users/view/') ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo url('users/delete/') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>



                                    </td>
                                </tr>
                                <tr>
                                    <td width="60">5</td>
                                    <td>
                                        SKCK
                                    </td>
                                    <td>
                                        Sudah Diunggah | Belum
                                    </td>
                                    <td>
                                        <a href="<?php echo url('users/edit/') ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo url('users/view/') ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo url('users/delete/') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>


                                    </td>
                                </tr>
                                <tr>
                                    <td width="60">6</td>
                                    <td>
                                        Surat Keterangan Berbadan Sehat
                                    </td>
                                    <td>
                                        Sudah Diunggah | Belum
                                    </td>
                                    <td>
                                        <a href="<?php echo url('users/edit/') ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <a href="<?php echo url('users/view/') ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <a href="<?php echo url('users/delete/') ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>


                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<!-- Modal -->
<div class="modal fade" id="unggahDokumen" tabindex="-1" role="dialog" aria-labelledby="unggahDokumenTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="unggahDokumenTitle">Unggah Dokumen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                    <div class="dropzone" id="dokumen_pekerja">
                        <div name="userfile" class="dz-message">
                            <h6>Klik atau seret file/dokumen ke sini</h6>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                    <label for="jenisdokumen">Jenis Dokumen</label>
                    <select name="jenisdokumen" id="jenisdokumen" class="w-100">
                        <option value="">-- Pilih Salah Satu --</option>
                        <option value="KTP">KTP</option>
                        <option value="Ijazah Terakhir">Ijazah Terakhir</option>
                        <option value="Transkrip Nilai">Transkrip Nilai</option>
                        <option value="Riwayat Hidup">Riwayat Hidup</option>
                        <option value="SKCK">SKCK</option>
                        <option value="Surat Keterangan Berbadan Sehat">Surat Keterangan Berbadan Sehat</option>
                    </select>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                    <div class="alert alert-warning" role="alert">
                    File yang diunggah berektensi .jpg, .png, atau .jpeg dengan ukuran maksimal 2 MB.
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="unggahDokumen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="unggahDokumenLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="unggahDokumenLabel">Unggah File/Dokumen</h5>
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