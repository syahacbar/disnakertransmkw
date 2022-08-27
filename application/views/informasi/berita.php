<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<!-- Dropzone CSS -->
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<!-- Dropzone JS -->
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<style>
    .toggle {
        --width: 80px;
        --height: calc(var(--width) / 3);

        position: relative;
        display: inline-block;
        width: var(--width);
        height: var(--height);
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
        border-radius: var(--height);
        cursor: pointer;
    }

    .toggle input {
        display: none;
    }

    .toggle .slider {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: var(--height);
        background-color: #ccc;
        transition: all 0.4s ease-in-out;
    }

    .toggle .slider::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: calc(var(--height));
        height: calc(var(--height));
        border-radius: calc(var(--height) / 2);
        background-color: #fff;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
        transition: all 0.4s ease-in-out;
    }

    .toggle input:checked+.slider {
        background-color: #2196F3;
    }

    .toggle input:checked+.slider::before {
        transform: translateX(calc(var(--width) - var(--height)));
    }

    .toggle .labels {
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        font-size: 12px;
        font-family: sans-serif;
        transition: all 0.4s ease-in-out;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .toggle .labels::after {
        content: attr(data-off);
        position: absolute;
        right: 20px;
        color: #fff;
        opacity: 1;
        transition: all 0.4s ease-in-out;
    }

    .toggle .labels::before {
        content: attr(data-on);
        position: absolute;
        left: 10px;
        color: #fff;
        opacity: 0;
        transition: all 0.4s ease-in-out;
    }

    .toggle input:checked~.labels::after {
        opacity: 0;
    }

    .toggle input:checked~.labels::before {
        opacity: 1;
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
                    <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3"><?php echo lang('berita') ?></h3>
                        <div class="ml-auto p-2">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambahberita"><span class="pr-1"><i class="fa fa-plus"></i></span>
                                Tambah Berita
                            </button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="tabelberita" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal Publikasi</th>
                                    <th>Tags</th>
                                    <th>Status</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($berita as $b) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $b->judul ?></td>
                                        <td><?php echo $b->tgl_publikasi ?></td>
                                        <td><?php echo $b->tags ?></td>
                                        <td>
                                            <label class="toggle"><input class="cbStatusberita" type="checkbox" onchange="updateStatusberita(<?php echo $b->id; ?>,$(this).is(':checked'))" <?php echo ($b->status) ? 'checked' : ''; ?>><span class="slider"></span><span class="labels" data-on="Published" data-off="Draf"></span></label>
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?php echo site_url() . 'berita/' . $b->slug; ?>" title="Detail Berita" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>&nbsp;
                                            <a href="javascript:void(0)" data-id="<?php echo $b->id; ?>" title="Ubah Berita" class="btn btn-sm btn-primary btnEditBerita"><i class="fas fa-edit"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-danger btnHapusBerita" href="javascript:void(0)" title="Hapus Berita" data-id="<?php echo $b->id; ?>"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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

<!-- Modal Tambah Berita -->
<div class="modal fade" id="modalTambahberita" tabindex="-1" role="dialog" aria-labelledby="modalTambahberitaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Berita Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formtambahberita">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="judul">Judul Berita</label>
                                <input type="text" class="form-control" name="judul" id="judul" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="isi">Isi Berita</label>
                                <textarea name="isi" id="summernote" cols="20" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="tag">Tags</label>
                                <input type="text" class="form-control" name="tags" id="tags" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="gambar_berita">Gambar</label>
                                <div id="tambah_gbrBerita" class="dropzone border-1 dz-clickable">
                                    <div class="dz-message">Klik atau drop gambar thumbnail ke sini</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btnSubmit" type="submit" name="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Edit Berita -->
<div class="modal fade" id="modalEditBerita" tabindex="-1" role="dialog" aria-labelledby="modalEditBeritaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditberita">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editjudul">Judul Berita</label>
                                <input type="text" class="form-control" name="editjudul" id="editjudul" value="" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editisi">Isi Berita</label>
                                <textarea name="editisi" id="editberitasummernote" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="edittags">Tags</label>
                                <input type="text" class="form-control" name="edittags" id="edittags" value="" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="edit_gambar">Gambar</label>
                                <div id="ubah_gbrBerita" class="dropzone border-1 dz-clickable">
                                    <div class="dz-message">Klik atau drop gambar thumbnail ke sini</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idberita">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btnSimpan" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include viewPath('includes/footer'); ?>

<script type="text/javascript">
    Dropzone.autoDiscover = false;

    function updateStatusberita(id, status) {
        $.ajax({
            url: "<?php echo site_url(); ?>informasi/updatestatus_berita",
            type: "POST",
            data: {
                id: id,
                status: status
            },
            success: function(data) {
                var objData = jQuery.parseJSON(data);
                console.log(objData.status);
            }
        });
    }

    function editberita(id) {
        $.ajax({
            url: "<?php echo site_url('informasi/get_berita_by_id') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="editjudul"]').val(data.judul);
                $('[name="edittags"]').val(data.tags);
                $('[name="editisi"]').summernote("code", data.isi);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data Berita');
            }
        });
    }

    $(document).ready(function() {

        var tabelberita = null;
        tabelberita = $('#tabelberita').DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        function reload_table_berita() {
            $('#tabelberita').DataTable().ajax.reload(null, false);

        }

        var unggah_berita = new Dropzone("#tambah_gbrBerita", {
            autoProcessQueue: false,
            url: "<?php echo site_url('informasi/add_berita') ?>",
            maxFilesize: 20,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "thumbnailberita",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        unggah_berita.on("sending", function(a, b, c) {
            a.judul = $("input[name='judul']").val();
            a.tags = $("input[name='tags']").val();
            a.isi = $("textarea[name='isi']").val();
            a.status = 1;
            c.append("judul", a.judul);
            c.append("tags", a.tags);
            c.append("isi", a.isi);
            c.append("status", a.status)
        });

        unggah_berita.on('complete', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Anda berhasil menambah berita',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
                return false;
            })
        });

        $('#formtambahberita').submit(function(e) {
            e.preventDefault();
            unggah_berita.processQueue();
        });

        // Edit Berita

        var edit_berita = new Dropzone("#ubah_gbrBerita", {
            autoProcessQueue: false,
            url: "<?php echo site_url('informasi/update_berita') ?>",
            maxFilesize: 20,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "thumbnailberita",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        edit_berita.on("sending", function(a, b, c) {
            a.judul = $("input[name='editjudul']").val();
            a.tags = $("input[name='edittags']").val();
            a.isi = $("textarea[name='editisi']").val();
            a.idberita = $("input[name='idberita']").val();
            c.append("judul", a.judul);
            c.append("tags", a.tags);
            c.append("isi", a.isi);
            c.append("idberita", a.idberita);
        });

        edit_berita.on('complete', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Anda berhasil mengubah berita',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
                return false;
            })
        });


        $('#formeditberita').submit(function(e) {
            e.preventDefault();
            edit_berita.processQueue();
        });


        $(document).on('click', '.btnEditBerita', function() {
            $('#modalEditBerita').modal('show');
            var idberita = $(this).attr("data-id");
            //set hidden form untuk Id Berita
            $('[name="idberita"]').val(idberita);

            editberita(idberita);
        });


        $(document).on('click', '.btnHapusBerita', function() {
            var id = $(this).data("id");
            Swal.fire({
                text: 'Apakah Anda yakin menghapus berita ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>informasi/delete_berita",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            Swal.fire({
                                text: 'Berhasil menghapus berita.',
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ya'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });

                        }
                    })
                }

            })

        });
    });
</script>