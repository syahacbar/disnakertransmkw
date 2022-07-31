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
                <h1><?php echo lang('pengumuman') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('pengumuman') ?></li>
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
                        <h3 class="card-title p-3"><?php echo lang('pengumuman') ?></h3>
                        <div class="ml-auto p-2">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalaAddPengumuman"><span class="pr-1"><i class="fa fa-plus"></i></span>
                                Tambah Pengumuman
                            </button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="tabelPengumuman" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($informasi as $info) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $info->judul; ?></td>
                                        <td><?php echo $info->tgl_publikasi; ?></td>
                                        <td>
                                            <label class="toggle"><input class="cbStatusberita" type="checkbox" onchange="updateStatusberita(<?php echo $info->id; ?>,$(this).is(':checked'))" <?php echo ($info->status) ? 'checked' : ''; ?>><span class="slider"></span><span class="labels" data-on="Published" data-off="Draf"></span></label>
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?php echo site_url() . 'pengumuman/' . $info->slug; ?>" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>&nbsp;
                                            <a href="javascript:void(0)" data-id="<?php echo $info->id; ?>" class="btn btn-sm btn-primary ubahPengumuman"><i class="fas fa-edit"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-danger hapusPengumuman" href="javascript:void(0)" data-id="<?php echo $info->id; ?>"><i class="fas fa-trash"></i></a>
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

<!-- Modal Tambah Pengumuman -->
<div class="modal fade" id="modalaAddPengumuman" tabindex="-1" role="dialog" aria-labelledby="modalaAddPengumumanTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pengumuman Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formAddPengumuman">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="judul">Judul Pengumuman</label>
                                <input type="text" class="form-control" name="judul" id="judul" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="isi">Isi Pengumuman</label>
                                <textarea name="isi" id="summernote" cols="20" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="tag">Tag</label>
                                <input type="text" class="form-control" name="tag" id="tag" required autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="gambarPengumuman">Gambar</label>
                                <div id="gambarPengumuman" class="dropzone gambarPengumuman border-1 dz-clickable">
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


<!-- Modal Edit Pengumuman -->
<div class="modal fade" id="modalEditPengumuman" tabindex="-1" role="dialog" aria-labelledby="modalEditPengumumanTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Pengumuman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formUbahPengumuman">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editjudul">Judul Pengumuman</label>
                                <input type="text" class="form-control" name="editjudul" id="editjudul" value="" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editisi">Isi Pengumuman</label>
                                <textarea name="editisi" id="editberitasummernote" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="edittag">Tag</label>
                                <input type="text" class="form-control" name="edittag" id="edittag" value="" />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="edit_gambar">Gambar</label>
                                <div id="edit_gambar" class="dropzone edit_gambarPengumuman  border-1 dz-clickable">
                                    <div class="dz-message">Klik atau drop gambar thumbnail ke sini</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idpengumuman">
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

    function updateStatuspengumuman(id, status) {
        $.ajax({
            url: "<?php echo site_url(); ?>informasi/updatestatus_pengumuman",
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

    function editpengumuman(id) {
        $.ajax({
            url: "<?php echo site_url('informasi/get_pengumuman_by_id') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="editjudul"]').val(data.judul);
                $('[name="edittag"]').val(data.tags);
                $('[name="editisi"]').summernote("code", data.isi);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data Pengumuman');
            }
        });
    }

    $(document).ready(function() {

        var tabelPengumuman = null;
        tabelPengumuman = $('#tabelPengumuman').DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        function reload_table_pengumuman() {
            $('#tabelPengumuman').DataTable().ajax.reload(null, false);

        }

        var upload_pengumuman = new Dropzone(".gambarPengumuman", {
            autoProcessQueue: false,
            url: "<?php echo site_url('informasi/add_pengumuman') ?>",
            maxFilesize: 20,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "thumbnailpengumuman",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        var ubah_pengumuman = new Dropzone(".edit_gambarPengumuman", {
            autoProcessQueue: false,
            url: "<?php echo site_url('informasi/update_pengumuman') ?>",
            maxFilesize: 20,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "thumbnailpengumuman",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        upload_pengumuman.on("sending", function(a, b, c) {
            a.judul = $("input[name='judul']").val();
            a.tag = $("input[name='tag']").val();
            a.isi = $("textarea[name='isi']").val();
            a.status = 1;
            c.append("judul", a.judul);
            c.append("tag", a.tag);
            c.append("isi", a.isi);
            c.append("status", a.status)

        });

        ubah_pengumuman.on("sending", function(a, b, c) {
            a.judul = $("input[name='judul']").val();
            a.tag = $("input[name='tag']").val();
            a.isi = $("textarea[name='isi']").val();
            a.status = 1;
            c.append("judul", a.judul);
            c.append("tag", a.tag);
            c.append("isi", a.isi);
            c.append("status", a.status)

        });

        upload_pengumuman.on('complete', function() {
            location.reload();
        });

        ubah_pengumuman.on('complete', function() {
            location.reload();
        });

        $('#formAddPengumuman').submit(function(e) {
            e.preventDefault();
            upload_pengumuman.processQueue();
            //location.reload();
        });



        $(document).on('click', '.ubahPengumuman', function() {
            $('#modalEditPengumuman').modal('show');
            var idpengumuman = $(this).attr("data-id");
            $('[name="idpengumuman"]').val(idpengumuman);

            editpengumuman(idpengumuman);
        });


        $(document).on('click', '.hapusPengumuman', function() {
            var id = $(this).data("id");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "<?php echo site_url(); ?>informasi/deletepengumuman",
                    type: "POST",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        var objData = jQuery.parseJSON(data);
                        // console.log(objData.status);
                        // console.log(objData.info);
                        location.reload();
                    }
                });
            } else {
                return false;
            }
        });
    });
</script>