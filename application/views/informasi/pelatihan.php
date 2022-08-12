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
                <h1><?php echo lang('pelatihan') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('pelatihan') ?></li>
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
                        <h3 class="card-title p-3"><?php echo lang('pelatihan') ?></h3>
                        <div class="ml-auto p-2">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambahpelatihan"><span class="pr-1"><i class="fa fa-plus"></i></span>
                                Tambah Pelatihan
                            </button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="tabelpelatihan" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Nama Pelatihan</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pelatihan as $p) :
                                ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $p->judul ?></td>
                                        <td><?php echo $p->tanggal ?></td>
                                        <td>
                                            <label class="toggle"><input class="cbStatusPelatihan" type="checkbox" onchange="updateStatuspelatihan(<?php echo $p->id; ?>,$(this).is(':checked'))" <?php echo ($p->status) ? 'checked' : ''; ?>><span class="slider"></span><span class="labels" data-on="Published" data-off="Draf"></span></label>
                                        </td>
                                        <td>
                                            <a target="_blank" href="<?php echo site_url() . 'pelatihan/' . $p->slug; ?>" title="Detail Pelatihan" class="btn btn-sm btn-info"><i class="fas fa-eye"></i></a>&nbsp;
                                            <a href="javascript:void(0)" data-id="<?php echo $p->id; ?>" title="Ubah pelatihan" class="btn btn-sm btn-primary btnEditPelatihan"><i class="fas fa-edit"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-danger btnHapusPelatihan" href="javascript:void(0)" title="Hapus Pelatihan" data-id="<?php echo $p->id; ?>"><i class="fas fa-trash"></i></a>
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

<!-- Modal Tambah Pelatihan -->
<div class="modal fade" id="modalTambahpelatihan" tabindex="-1" role="dialog" aria-labelledby="modalTambahpelatihanTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Pelatihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formtambahpelatihan">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="judul">Nama Pelatihan</label>
                                <input type="text" class="form-control" name="judul" id="judul" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="judul">Bidang Pelatihan</label>
                                <select class="form-control" name="jenis_pelatihan" id="jenis_pelatihan">
                                    <option>-- Pilih Salah Satu --</option>
                                    <?php foreach ($jenis_pelatihan as $jp) : ?>
                                        <option value="<?php echo $jp->kode; ?>"><?php echo $jp->pelatihan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="isi">Deskripsi Pelatihan</label>
                                <textarea name="isi" id="summernote" cols="20" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="gambar_pelatihan">Gambar</label>
                                <div id="gambar_pelatihan" class="dropzone border-1 dz-clickable">
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


<!-- Modal Edit Pelatihan -->
<div class="modal fade" id="modalEditPelatihan" tabindex="-1" role="dialog" aria-labelledby="modalEditPelatihanTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Pelatihan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formeditpelatihan">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editjudul">Nama Pelatihan</label>
                                <input type="text" class="form-control" name="editjudul" id="editjudul" value="" autofocus />
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editjenis_pelatihan">Bidang Pelatihan</label>
                                <select class="form-control" name="editjenis_pelatihan" id="editjenis_pelatihan">
                                    <option>-- Pilih Salah Satu --</option>
                                    <?php foreach ($jenis_pelatihan as $jp) : ?>
                                        <option value="<?php echo $jp->kode; ?>"><?php echo $jp->pelatihan; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="editisi">Deskripsi Pelatihan</label>
                                <textarea name="editisi" id="editpelatihansummernote" rows="20"></textarea>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label for="edit_gambar">Gambar</label>
                                <div id="edit_gambar" class="dropzone edit_gambar border-1 dz-clickable">
                                    <div class="dz-message">Klik atau drop gambar thumbnail ke sini</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <input type="hidden" name="idpelatihan">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button id="btnSimpan" name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include viewPath('includes/footer'); ?>

<script type="text/javascript">
    Dropzone.autoDiscover = false;

    function updateStatuspelatihan(id, status) {
        //var id = $(this).data("id");
        $.ajax({
            url: "<?php echo site_url(); ?>informasi/updatestatus_pelatihan",
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

    function editpelatihan(id) {
        $.ajax({
            url: "<?php echo site_url('informasi/get_pelatihan_by_id') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="editjudul"]').val(data.judul);
                $('[name="edittag"]').val(data.tag);
                //$('[name="editisi"]').val(data.isi);
                $('[name="editisi"]').summernote("code", data.isi);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error Get Data Pelatihan');
            }
        });
    }

    $(document).ready(function() {

        var tabelpelatihan = null;
        tabelpelatihan = $('#tabelpelatihan').DataTable({
            "responsive": true,
            "autoWidth": false,
        });

        function reload_table_pelatihan() {
            $('#tabelpelatihan').DataTable().ajax.reload(null, false);

        }

        var unggah_pelatihan = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            url: "<?php echo site_url('informasi/add_pelatihan') ?>",
            maxFilesize: 20,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "thumbnailpelatihan",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        unggah_pelatihan.on("sending", function(a, b, c) {
            a.judul = $("input[name='judul']").val();
            a.jenis_pelatihan = $("select[name='jenis_pelatihan']").val();
            a.isi = $("textarea[name='isi']").val();
            a.status = 1;
            c.append("judul", a.judul);
            c.append("jenis_pelatihan", a.jenis_pelatihan);
            c.append("isi", a.isi);
            c.append("status", a.status)

        });

        unggah_pelatihan.on('complete', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Anda berhasil menambah pelatihan',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
                return false;
            })
        });

        $('#formtambahpelatihan').submit(function(e) {
            e.preventDefault();
            unggah_pelatihan.processQueue();
            //location.reload();
        });

        // Edit Pelatihan

        edit_pelatihan = new Dropzone(".edit_gambar", {
            autoProcessQueue: false,
            url: "<?php echo site_url('informasi/update_pelatihan') ?>",
            maxFilesize: 20,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "editthumbnailpelatihan",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        edit_pelatihan.on("sending", function(a, b, c) {
            a.judul = $("input[name='editjudul']").val();
            a.editjenis_pelatihan = $("select[name='editjenis_pelatihan']").val();
            a.isi = $("textarea[name='editisi']").val();
            a.idpelatihan = $("input[name='idpelatihan']").val();
            a.status = 1;
            c.append("judul", a.judul);
            c.append("editjenis_pelatihan", a.editjenis_pelatihan);
            c.append("isi", a.isi);
            c.append("status", a.status);
            c.append("idpelatihan", a.idpelatihan);
        });

        edit_pelatihan.on('complete', function() {
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: 'Anda berhasil mengubah pelatihan',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload();
                }
                return false;
            })
        });

        $('#formeditpelatihan').submit(function(e) {
            e.preventDefault();
            edit_pelatihan.processQueue();
            //location.reload();
        });

        $(document).on('click', '.btnEditPelatihan', function() {
            $('#modalEditPelatihan').modal('show');
            var idpelatihan = $(this).attr("data-id");
            $('[name="idpelatihan"]').val(idpelatihan);
            editpelatihan(idpelatihan);
        });



        $(document).on('click', '.btnHapusPelatihan', function() {
            var id = $(this).data("id");
            Swal.fire({
                text: 'Apakah Anda yakin menghapus pelatihan ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>informasi/delete_pelatihan",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function(data) {
                            Swal.fire({
                                text: 'Berhasil menghapus pelatihan.',
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