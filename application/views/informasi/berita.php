<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<style>
    button#beritaCategori {
        color: #212529;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
    }

    .dropzone {
        min-height: 33px !important;
        border: 2px solid rgba(0, 0, 0, .3);
        background: #fff;
        padding: 20px 20px;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('berita') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('berita') ?></li>
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
                    <!-- /.card-header -->
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahBerita">
                            Tambah Berita
                        </button>

                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Isi Berita</th>
                                    <th>Status</th>
                                    <th width="100px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>1</td>
                                    <td>Bonus Demografi Semakin Dekat, Kemnaker Terus Siapkan SDM Unggul</td>
                                    <td>22 Agustus 2022</td>
                                    <td>Bandung--Sekretaris Jenderal Kementerian Ketenagakerjaan, Anwar Sanusi menegaskan pihaknya terus menyiapkan Sumber Daya Manusia (SDM) yang unggul guna menyambut bonus demografi yang puncaknya terjadi pada 2030.
                                    <td>Publish</td>
                                    <td>
                                        <?php if (hasPermissions('users_edit')) : ?>
                                            <a href="<?php echo url('users/edit/' . $row->id) ?>" class="btn btn-sm btn-primary" title="<?php echo lang('edit_user') ?>" data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                        <?php endif ?>
                                        <?php if (hasPermissions('users_view')) : ?>
                                            <a href="<?php echo url('users/view/' . $row->id) ?>" class="btn btn-sm btn-info" title="<?php echo lang('view_user') ?>" data-toggle="tooltip"><i class="fa fa-eye"></i></a>
                                        <?php endif ?>
                                        <?php if (hasPermissions('users_delete')) : ?>
                                            <?php if ($row->id != 1 && logged('id') != $row->id) : ?>
                                                <a href="<?php echo url('users/delete/' . $row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Do you really want to delete this user ?')" title="<?php echo lang('delete_user') ?>" data-toggle="tooltip"><i class="fa fa-trash"></i></a>
                                            <?php else : ?>
                                                <a href="#" class="btn btn-sm btn-danger" title="<?php echo lang('delete_user_cannot') ?>" data-toggle="tooltip" disabled><i class="fa fa-trash"></i></a>
                                            <?php endif ?>
                                        <?php endif ?>
                                    </td>
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
<div class="modal fade" id="tambahBerita" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tambahBeritaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBeritaLabel">Tambah Artikel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul" id="judul" required autofocus />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="beritaCategori">Kategori Artikel</label>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle w-100 d-flex justify-content-between align-items-center" type="button" id="beritaCategori" data-bs-toggle="dropdown" aria-expanded="false">
                                - Pilih -
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="beritaCategori">
                                <li><a class="dropdown-item" href="#">Berita</a></li>
                                <li><a class="dropdown-item" href="#">Pengumuman</a></li>
                                <li><a class="dropdown-item" href="#">Pelatihan</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <input type="text" class="form-control" name="tag" id="tag" required autofocus />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="isi">Isi</label>
                            <textarea name="isi" id="summernote" cols="30" rows="30"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
                        <div class="form-group">
                            <label for="tanggal">Tanggal Publikasi</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" required autofocus />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="gambar">Gambar Thumbnail</label>
                            <div id="gambar_berita" class="dropzone border-1 dz-clickable">
                                <div class="dz-message">Klik atau drop gambar thumbnail ke sini</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- page script -->
<script>
    $(function() {
        $("#example01").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    $('#summernote').summernote({
        placeholder: 'Tulis isi berita di sini',
        height: 300
    });
</script>

<?php include viewPath('includes/footer'); ?>