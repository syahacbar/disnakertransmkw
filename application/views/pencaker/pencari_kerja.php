<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>
<link src="">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/pencarikerja-custom-css.css">

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('pencari_kerja') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('pencari_kerja') ?></li>
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
                        <h3 class="card-title p-3"><?php echo lang('pencari_kerja') ?></h3>
                        <ul class="nav nav-pills ml-auto px-3">
                            <li class="nav-item m-auto px-4">
                                <a href="<?php echo site_url('pencaker/export_pencaker_pdf'); ?>" target="_blank" id="btnExportPDF" type="button" class="btn btn-danger btn-sm"><i class="fa fa-file-pdf"></i> Export PDF</a>
                            </li>
                            <li class="nav-item m-auto">
                                <a href="<?php echo site_url('pencaker/export_pencaker_excel'); ?>" id="btnExportExcel" type="button" class="btn btn-success btn-sm"><i class="fa fa-file-excel"></i> Export Excel</a>
                            </li>
                        </ul>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php //echo form_open('/pencaker/pencari_kerja', ['method' => 'GET']); 
                                ?>
                                <div class="row align-items-center">
                                    <div class="col-sm-2">
                                        <label class="m-0" for="filter_pencaker">Filter Pencaker</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-0">
                                            <select name="user" id="filter_pencaker" onchange="" class="form-control filter_pencaker">
                                                <option value="">-- Pilih Salah Satu --</option>
                                                <option value="Registrasi">Registrasi</option>
                                                <option value="Verifikasi">Verifikasi</option>
                                                <option value="Validasi">Validasi</option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Lapor">Lapor</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-1 text-right">
                                        <a href="<?php echo url('/pencaker/pencari_kerja') ?>" class="btn btn-danger"><?php echo lang('reset') ?></a>
                                    </div>

                                </div>

                                <?php //echo form_close(); 
                                ?>

                            </div>
                        </div>
                        <table id="dataPencariKerja" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Verifikasi/<br>Validasi</th>
                                    <th>Image</th>
                                    <th>Nama</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIK</th>
                                    <th>No.HP</th>
                                    <th>Email</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pencaker as $p) : ?>
                                    <tr>
                                        <td>
                                            <a class="btn btn-sm btn-secondary btnVerifikasi <?php echo ($p->keterangan_status == 'Verifikasi' || $p->keterangan_status == 'Validasi') ? '' : 'disabled'; ?>" title="Verifikasi Pencaker" data-usersid="<?php echo $p->users_id; ?>" data-nopendaftaran="<?php echo $p->nopendaftaran; ?>" data-namapencaker="<?php echo strtoupper($p->namalengkap); ?>">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        </td>

                                        <td>
                                            <img width="40" height="40" alt="" class="img-avtar" src="<?php echo pencakerFoto($p->idpencaker); ?>">
                                        </td>
                                        <td><?php echo strtoupper($p->namalengkap); ?> </td>
                                        <td><?php echo $p->nopendaftaran; ?> </td>
                                        <td><?php echo $p->nik; ?> </td>
                                        <td><?php echo $p->phone; ?> </td>
                                        <td><?php echo $p->email; ?> </td>
                                        <td><?php echo $p->keterangan_status; ?></td>
                                        <td>
                                            <a target="_blank" href="<?php echo site_url('pencaker/review_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-warning" title="Review Data Pencaker"><i class="fas fa-search"></i></a>&nbsp;
                                            <a target="_blank" href="<?php echo site_url('pencaker/kartu_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-info <?php echo ($p->keterangan_status == 'Validasi') ? '' : 'disabled'; ?>" title="Cetak Kartu Pencaker"><i class="fas fa-id-card"></i></a>&nbsp;

                                            <a class="btn btn-sm btn-danger btnHapusPencaker" id="hapusPencariKerja" href="javascript:void(0)" data-id="<?php echo $p->users_id; ?>" title="Hapus Pencaker"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
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

<!-- Modal Verifikasi -->
<div class="modal fade" id="modalVerifikasi" tabindex="-1" aria-labelledby="modalVerifikasiLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalVerifikasiLabel">Verifikasi/Validasi Pencaker</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nopendaftaran">Nomor Pendaftaran</label>
                        <input class="form-control" name="nopendaftaran" type="text" readonly>
                    </div>
                    <div class="form-group">
                        <label for="namalengkap">Nama Pencaker</label>
                        <input class="form-control" name="namapencaker" type="text" readonly>
                    </div>

                    <label class="col-form-label" for="statusverifikasi">Keterangan</label>
                    <select class="form-control" name="statusverifikasi" id="statusverifikasi">
                        <option value="">-- Pilih Salah Satu --</option>
                        <option value="ver_tidaklengkap">Tidak Lengkap</option>
                        <option value="ver_lengkap">Telah Diverifikasi</option>
                        <option value="ver_valid">Aktif</option>
                    </select>

                    <div id="pesanVerifikasi" class="form-group mt-3 hide">
                        <label class="col-form-label" for="pesan">Catatan</label>
                        <textarea type="text" class="form-control form-control-sm" name="pesan" id="pesan"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="usersid">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="button" id="saveVerifikasi" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include viewPath('includes/footer'); ?>

<script type="text/javascript">
    $('#pesan').summernote({
        placeholder: 'Tulis isi berita di sini',
        height: 200
    });

    $(document).ready(function() {
        $('#dataPencariKerja').DataTable();

        function filterData() {
            $('#dataPencariKerja').DataTable().search(
                $('.filter_pencaker').val()
            ).draw();
        }
        $('.filter_pencaker').on('change', function() {
            filterData();
        });

        $(document).on('click', '.btnHapusPencaker', function() {
            var usersid = $(this).data("id");
            Swal.fire({
                text: 'Apakah Anda yakin menghapus Pencaker ini?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: "<?php echo site_url(); ?>pencaker/hapus_pencari_kerja/",
                        type: "POST",
                        data: {
                            usersid: usersid
                        },
                        success: function(data) {
                            Swal.fire({
                                text: 'Berhasil menghapus Pencaker.',
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

        $('select[name="statusverifikasi"]').on('change', function(e) {
            var optionSelected = $("option:selected", this);
            var valueSelected = this.value;
            if (valueSelected != '') {
                if (valueSelected == 'ver_tidaklengkap') {
                    $('#pesanVerifikasi').removeClass('hide');
                } else {
                    $('#pesanVerifikasi').addClass('hide');
                }
            } else {
                $('#pesanVerifikasi').addClass('hide');
            }
        });

        $(document).on('click', '.btnVerifikasi', function() {
            var usersid = $(this).data("usersid");
            var nopendaftaran = $(this).data("nopendaftaran");
            var namapencaker = $(this).data("namapencaker");
            $('#modalVerifikasi').modal('show');
            $('input[name="usersid"]').val(usersid);
            $('input[name="nopendaftaran"]').val(nopendaftaran);
            $('input[name="namapencaker"]').val(namapencaker);
        });

        $(document).on('click', '#saveVerifikasi', function() {
            var usersid = $("input[name='usersid']").val();
            var statusverifikasi = $("select[name='statusverifikasi']").val();
            var pesan = $("textarea[name='pesan']").val();
            if (statusverifikasi == 'ver_lengkap') {
                var aksi = 1;
            } else if (statusverifikasi == 'ver_tidaklengkap') {
                var aksi = 2;
            } else if (statusverifikasi == 'ver_valid') {
                var aksi = 3;
            }

            $.ajax({
                url: "<?php echo site_url(); ?>pencaker/add_verifikasi_data/" + aksi,
                method: "POST",
                data: {
                    usersid: usersid,
                    pesan: pesan,
                },
                success: function(data) {
                    Swal.fire({
                        title: 'Verifikasi Berhasil',
                        icon: 'success',
                        showCancelButton: false,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya',
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $('#modalVerifikasi').modal('hide');
                            location.reload();
                        }
                    });

                }
            })


        });
    });

    //$('#dataPencariKerja').DataTable();
</script>