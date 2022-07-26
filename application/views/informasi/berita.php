<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>


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
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Tanggal</th>
                                    <th>Isi Berita</th>
                                    <th>Status</th>
                                    <th width="100px">Aksi</th>
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
<div class="modal fade" id="modalTambahberita" tabindex="-1" role="dialog" aria-labelledby="modalTambahberitaTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formtambahberita">
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label for="judul">Judul Artikel</label>
                            <input type="text" class="form-control" name="judul" id="judul" required autofocus />
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button id="btnSaveBerita" type="button" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include viewPath('includes/footer'); ?>

<script type="text/javascript">
    
    $(document).ready(function() {

        var tabelberita = null;
        tabelberita = $('#tabelberita').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, 
            "order": [[ 0, 'asc' ]], 
            "ajax":
            {
                "url": "<?php echo site_url('informasi/get_berita');?>", 
                "type": "POST"
            },
            "deferRender": true,
            "stateSave": true,
            "bDestroy": true,

            "columns": [
                {"data": "id","sortable": false, 
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }  
                }, 
                {"data": "judul"},
                {"data": "tgl_publikasi"},
                {"data": "isi"},
                {"data": "status"},
                {"data": "id",
                    "render": 
                    function( data, type, row, meta ) {
                        return '<a href="javascript:void(0)" data-id="'+data+'" class="btn btn-sm btn-primary btnEditBerita"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusBerita" href="javascript:void(0)" data-id="'+data+'"><i class="fas fa-trash"></i></a>';
                    }
                },
            ],
        });

        function reload_table_berita()
        {
            $('#tabelberita').DataTable().ajax.reload(null, false);

        }

        $('#btnSaveBerita').click(function() {
            $.ajax({
                url: "<?php echo site_url('informasi/add_berita') ?>",
                type: "POST",
                data: $('#formtambahberita').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        $('#modalTambahberita').modal('hide');
                        reload_table_berita();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });
    });
</script>
