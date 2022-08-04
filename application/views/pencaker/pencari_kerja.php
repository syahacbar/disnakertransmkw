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
                        <table id="dataPencariKerja" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Image</th>
                                    <th>Nama</th>
                                    <th>No. Pendaftaran</th>
                                    <th>NIK</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pencaker as $p) : ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td>Gambar</td>
                                        <td><?php echo $p['namalengkap']; ?> </td>
                                        <td><?php echo $p['nopendaftaran']; ?> </td>
                                        <td><?php echo $p['nik']; ?> </td>
                                        <td>
                                            <label class="toggle"><input class="cbStatusberita" type="checkbox" onchange=""><span class="slider"></span><span class="labels" data-on="On" data-off="Off"></span></label>
                                        </td>
                                        <td>
                                            <a target="_blank" href="" class="btn btn-sm btn-info"><i class="fas fa-print"></i></a>&nbsp;
                                            <a href="javascript:void(0)" data-id="" class="btn btn-sm btn-primary btnEditBerita"><i class="fas fa-edit"></i></a>&nbsp;
                                            <a class="btn btn-sm btn-danger" id="btnHapusBerita" href="javascript:void(0)" data-idberita=""><i class="fas fa-trash"></i></a>
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



<?php include viewPath('includes/footer'); ?>
<script>
    $('#dataPencariKerja').DataTable()
</script>