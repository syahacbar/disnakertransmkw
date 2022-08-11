<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

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

    #modalEditPencariKerja .modal-body * {
        font-size: 14px;
        font-weight: normal;
    }
</style>
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
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php //echo form_open('/pencaker/pencari_kerja', ['method' => 'GET']); ?>
                                <div class="row align-items-center">
                                    <div class="col-sm-2">
                                        <label class="m-0" for="filter_pencaker">Filter Pencaker</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-0">
                                            <select name="user" id="filter_pencaker" onchange="" class="form-control filter_pencaker">
                                                <option value="">Pilih</option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Verifikasi">Verifikasi</option>
                                                <option value="Validasi">Validasi</option>
                                                <option value="Lapor">Lapor</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-sm-1 text-right">
                                        <a href="<?php echo url('/pencaker/pencari_kerja') ?>" class="btn btn-danger"><?php echo lang('reset') ?></a>
                                    </div>

                                </div>

                                <?php //echo form_close(); ?>

                            </div>
                        </div>
                        <table id="dataPencariKerja" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
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
                                        <td><?php echo $no++; ?></td>
                                        <td>
                                            <img width="40" height="40" alt="" class="img-avtar" src="<?php echo pencakerFoto($p->id); ?>">
                                        </td>
                                        <td><?php echo strtoupper($p->namalengkap); ?> </td>
                                        <td><?php echo $p->nopendaftaran; ?> </td>
                                        <td><?php echo $p->nik; ?> </td>
                                        <td><?php echo $p->phone; ?> </td>
                                        <td><?php echo $p->email; ?> </td>
                                        <td><?php echo $p->keterangan_status; ?></td>
                                        <td>
                                            <a target="_blank" href="<?php echo site_url('pencaker/review_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-warning" title="Review Data Pencaker"><i class="fas fa-search"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-secondary" title="Verifikasi Pencaker" data-toggle="modal" data-target="#modalVerifikasi"><i class="fas fa-check"></i></a>&nbsp;
                                            <a target="_blank" href="<?php echo site_url('pencaker/kartu_pencaker/') . $p->users_id; ?>" class="btn btn-sm btn-info" title="Cetak Kartu Pencaker"><i class="fas fa-id-card"></i></a>&nbsp;
                                            
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
                <h5 class="modal-title" id="modalVerifikasiLabel">Verifikasi Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <label class="col-form-label" for="datalengkap">Status Data</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="datalengkap" id="datalengkap1" value="option1" checked>
                        <label class="form-check-label" for="datalengkap1">
                            Lengkap
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="datalengkap" id="datalengkap2" value="option2">
                        <label class="form-check-label" for="datalengkap2">
                            Tidak Lengkap
                        </label>
                    </div>

                    <div class="form-group mt-3">
                        <label class="col-form-label" for="pesan">Catatan</label>
                        <textarea type="email" class="form-control form-control-sm" id="pesan" aria-describedby="emailHelp"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include viewPath('includes/footer'); ?>

<script type="text/javascript">
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
    });

    //$('#dataPencariKerja').DataTable();
</script>