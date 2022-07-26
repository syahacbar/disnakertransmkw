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
                        <div class="ml-auto p-2">
                            <button data-toggle="modal" data-target="#unggahDokumen" class="btn btn-primary btn-sm"><span class="pr-1"><i class="fa fa-plus"></i></span> <?php echo lang('upload') ?></button>
                        </div>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="tabeldokumenpencaker" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Jenis Dokumen</th>
                                    <th>Nama Dokumen</th>
                                    <th>Status</th>
                                    <th>Tanggal Upload</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
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
                <?php echo form_open_multipart('',array('id'=>'formunggahdokumen')); ?>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-3">
                        <label for="namadokumen">Nama Dokumen</label>
                        <input type="text" class="form-control" name="namadokumen" id="namadokumen">
                    </div>

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="alert alert-warning" role="alert">
                        Dokumen yang diunggah berektensi .jpg, .png, atau .jpeg dengan ukuran maksimal 2 MB.
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

                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mb-5">
                        <label for="labeljenisdokumen">Jenis Dokumen</label>
                        <select name="jenisdokumen" id="jenisdokumen" class="w-100">
                            <option value="">-- Pilih Salah Satu --</option>
                            <?php foreach($dokumen AS $dok) : ?>
                                <option value="<?php echo $dok->id;?>"><?php echo $dok->jenis_dokumen; ?></option>
                            <?php endforeach;?>
                        </select>
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

<!-- Dropzone JS -->
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

<script>
    var tabeldokumenpencaker = null;
    Dropzone.autoDiscover = false;
    $(document).ready(function() {

    tabeldokumenpencaker = $('#tabeldokumenpencaker').DataTable({
        "processing": true,
        "serverSide": true,
        "ordering": true, 
        "order": [[ 0, 'asc' ]], 
        "ajax":
        {
            "url": "<?php echo site_url('pencaker/get_dokumen');?>", 
            "type": "POST"
        },
        "deferRender": true,
        "stateSave": true,
        "bDestroy": true,

        "columns": [
            {"data": "idpencakerdokumen","sortable": false, 
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }  
            }, 
            {"data": "jenis_dokumen"},
            {"data": "namadokumen"},
            {"data": "token"},
            {"data": "tgl_upload"},
            {"data": "idpencakerdokumen",
                "render": 
                function( data, type, row, meta ) {
                    if(data != null)
                    {
                        return '<a href="javascript:void(0)" data-id="'+data+'" class="btn btn-sm btn-primary btnEditDokumen"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusDokumen" href="javascript:void(0)" data-id="'+data+'"><i class="fas fa-trash"></i></a>';
                    } else {
                        return '<a href="javascript:void(0)" data-id="'+data+'" class="btn btn-sm btn-success btnSaveDokumen"><i class="fas fa-upload"></i> Unggah</a>';
                    }
                }
            },
        ],
    });

        var unggah_dokumen = new Dropzone(".dropzone", {
            autoProcessQueue: false,
            url: "<?php echo site_url('pencaker/upload_dokumen') ?>",
            maxFilesize: 50,
            maxFiles: 1,
            method: "post",
            acceptedFiles: "image/*",
            paramName: "dokumenpencaker",
            dictInvalidFileType: "Type file ini tidak dizinkan",
            addRemoveLinks: true,
        });

        unggah_dokumen.on("sending", function(a, b, c) {
            a.token = Math.random();
            a.inputnamadokumen = $("input[name='namadokumen']").val();
            a.pilihjenisdokumen = $("select[name='jenisdokumen']").val();
            c.append("token_pasfoto", a.token);
            c.append("doc_name",a.inputnamadokumen);
            c.append("doc_category",a.pilihjenisdokumen);

        });

        unggah_dokumen.on('complete', function () {
            location.reload();
        });

        $('#formunggahdokumen').submit(function(e) {
            e.preventDefault();
            unggah_dokumen.processQueue();
            //location.reload();
        });
    });

</script>

<?php include viewPath('includes/footer'); ?>