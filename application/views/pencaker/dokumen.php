<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Dropzone CSS -->
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
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

                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tabeldokumenpencaker" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Dokumen</th>
                                    <th>Nama Dokumen</th>
                                    <th>Tanggal Unggah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pencaker_dokumen as $doc) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td <?php echo ($doc->id == '1' || $doc->id == '2' || $doc->id == '3') ? 'class="text-bold"' : '';?>>
                                            <?php 
                                                echo $doc->jenis_dokumen; 
                                                echo ($doc->id == '1' || $doc->id == '2' || $doc->id == '3') ? ' <sup><span style="font-style:italic; color:red">(*)</span></sup>' : '';
                                            ?>
                                        </td>
                                        <td><?php echo $doc->namadokumen; ?></td>
                                        <td><?php echo $doc->tgl_upload; ?></td>
                                        <td>
                                            <?php if ($doc->pencakerdokumen_id != NULL) { ?>

                                                <a target="_blank" class="btn btn-sm btn-info btnViewDokumen" href="<?php echo base_url('uploads/pencaker/').$doc->nopendaftaran.'/'.$doc->namadokumen; ?>" data-id="<?php ?>" data-placement="left" title="Hapus Dokumen"><i class="fas fa-eye"></i></a>&nbsp;

                                                <a href="javascript:void(0)" data-iddokumen="<?php echo $doc->id; ?>" data-idpencakerdokumen="<?php echo $doc->pencakerdokumen_id; ?>" data-jenisdokumen="<?php echo $doc->jenis_dokumen; ?>" class="btn btn-sm btn-primary btnEditDokumen" data-toggle="tooltip" data-placement="bottom" title="Perbarui Dokumen"><i class="fas fa-edit"></i></a>

                                            <?php } else { ?>

                                                <a href="javascript:void(0)" data-iddokumen="<?php echo $doc->id; ?>" data-jenisdokumen="<?php echo $doc->jenis_dokumen; ?>" class="btn btn-sm btn-success btnAddDokumen" data-placement="bottom" title="Unggah Dokumen"><i class="fas fa-upload"></i></a>

                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <span style="font-style:italic; color:red">(*) Wajib diunggah.</span>
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
                <?php echo form_open_multipart('', array('id' => 'formunggahdokumen')); ?>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                    <label for="jenisdokumen">Jenis Dokumen</label>
                    <input type="text" class="form-control" name="jenisdokumen" id="jenisdokumen" readonly>
                    <input type="hidden" class="form-control" name="iddokumen" id="iddokumen">
                    <input type="hidden" class="form-control" name="idpencakerdokumen" id="idpencakerdokumen">
                    <input type="hidden" class="form-control" name="mode" id="mode">
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-warning" role="alert">
                        Dokumen yang diunggah berekstensi .pdf, .jpg, .png, atau .jpeg.
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                    <label for="pasfoto">Dokumen</label>
                    <div class="dropzone pasfoto" id="pasfoto">
                        <div class="dz-message">
                            <h6>Klik atau seret file/dokumen ke sini</h6>
                        </div>
                    </div>
                </div>
                <button id="btnSubmit" name="submit" type="submit" class="btn btn-primary btn-block mb-4">Kirim File</button>
                <?php echo form_close(); ?>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div> -->
        </div>
    </div>
</div>

<?php include viewPath('includes/footer'); ?>
<!-- Dropzone JS -->
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<!-- <script src="https://cdn.datatables.net/plug-ins/1.12.1/api/fnReloadAjax.js"></script> -->
<script>
    var tabeldokumenpencaker = null;
    Dropzone.autoDiscover = false;
    $(document).ready(function() {
        tabeldokumenpencaker = $("#tabeldokumenpencaker").DataTable({
            "responsive": true,
            "autoWidth": false,
        });


        var unggah_dokumen = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            url: "<?php echo site_url('pencaker/upload_dokumen') ?>",
            maxFilesize: 50,
            maxFiles: 1,
            method: "post",
            acceptedFiles: "image/*,application/pdf",
            paramName: "dokumenpencaker",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        unggah_dokumen.on("sending", function(a, b, c) {
            a.token = Math.random();
            a.iddokumen = $("input[name='iddokumen']").val();
            a.mode = $("input[name='mode']").val();
            a.idpencakerdokumen = $("input[name='idpencakerdokumen']").val();
            c.append("token", a.token);
            c.append("iddokumen", a.iddokumen);
            c.append("mode", a.mode);
            c.append("idpencakerdokumen", a.idpencakerdokumen);

        });

        unggah_dokumen.on('complete', function() {
            $('#unggahDokumen').modal('hide')
            location.reload();
        });

        $('#formunggahdokumen').submit(function(e) {
            e.preventDefault();
            unggah_dokumen.processQueue();
            //location.reload();
        });

        $('.btnAddDokumen').click(function() {
            var jenisdokumen = $(this).attr("data-jenisdokumen");
            var iddokumen = $(this).attr("data-iddokumen");
            $('#unggahDokumen').modal('show')
            $('[name="mode"]').val("add");
            $('[name="jenisdokumen"]').val(jenisdokumen);
            $('[name="iddokumen"]').val(iddokumen);
        });

        $('.btnEditDokumen').click(function() {
            var idpencakerdokumen = $(this).attr("data-idpencakerdokumen");
            var jenisdokumen = $(this).attr("data-jenisdokumen");
            var iddokumen = $(this).attr("data-iddokumen");
            $('#unggahDokumen').modal('show')
            $('[name="mode"]').val("edit");
            $('[name="jenisdokumen"]').val(jenisdokumen);
            $('[name="idpencakerdokumen"]').val(idpencakerdokumen);
            $('[name="iddokumen"]').val(iddokumen);
        });
    });
</script>