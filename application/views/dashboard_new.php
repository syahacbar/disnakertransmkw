<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/frontend/assets/css/dashboard-new-custom-css.css">

<?php include viewPath('includes/header'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark"> <?php echo lang('dashboard'); ?>
        </h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#"><?php echo lang('home'); ?></a></li>
          <li class="breadcrumb-item active"><?php echo lang('dashboard'); ?></li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <?php if ($keterangan_status == 'Aktif') { ?>
          <div>
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>AKTIF</h3>

                <p>Status Anda Saat Ini Aktif Sebagai Pencari Kerja</p>
              </div>
              <div class="icon">
                <i class="fa fa-checked"></i>
              </div>

            </div>
          </div>
        <?php } ?>
        <!-- ./col -->
        <?php if ($keterangan_status == 'Pekerja') { ?>
          <div>
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>PEKERJA</h3>

                <p>Status Anda Saat Ini Sudah Mendapatkan Pekerjaan</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>

            </div>
          </div>
        <?php } ?>
        <!-- ./col -->
        <?php if ($keterangan_status == 'Lapor') { ?>
          <div>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>LAPOR</h3>

                <p>Anda terdaftar di sistem sudah lebih dari 6 bulan, wajib melaporkan apabila belum mendapatkan pekerjaan</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>

            </div>
          </div>
        <?php } ?>
        <?php if ($keterangan_status == 'Registrasi') { ?>
          <div>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="row">
                <div class="col-10 py-4 px-4">
                  <div class="inner">
                    <h3>Registrasi</h3>
                    <p>Silahkan lengkapi formulir AK-1 pada menu <strong>Profil Pencaker</strong> dan mengunggah dokumen pada menu <strong>Dokumen Pencaker</strong>. Jika sudah lengkap, klik tombol minta Verifikasi berikut ini</p>
                  </div>
                </div>
                <div class="col-2">
                  <div class="icon">
                    <i class="fa fa-user"></i>
                  </div>
                </div>
              </div>
              <a href="#" onclick="modalVerifikasi('Verifikasi')" id="#modalVerifikasi" class="small-box-footer">Minta Verifikasi Data <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <?php } ?>
        <!-- ./col -->
        <?php if ($keterangan_status == 'Verifikasi') { ?>
          <div>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="row">
                <div class="col-10 py-4 px-4">
                  <div class="inner">
                    <h3>Verifikasi</h3>
                    <p>Silahkan menunggu maksimal 3x24 jam untuk proses verifikasi dan terus memantau linimasa untuk mendapatkan informasi terkait proses verifikasi bilamana didapati ada berkas/dokumen yang kurang lengkap. <br>Setelah dinyatakan lulus verifikasi, status ini akan berubah menjadi <strong>Validasi</strong></p>
                  </div>
                </div>
                <div class="col-2">
                  <div class="icon">
                    <i class="fa fa-check"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
        <?php if ($keterangan_status == 'Validasi') { ?>
          <div>
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Validasi</h3>

                <p>Silahkan ke Kantor Disnakertrans Kab. Manokwari dengan membawa berkas/dokumen asli untuk divalidasi. Bila dinyatakan berkas/dokumen anda valid, anda akan mendapatkan Kartu Pencari Kerja</p>
              </div>
              <div class="icon">
                <i class="fa fa-list"></i>
              </div>
            </div>
          </div>
        <?php } ?>

        <!-- TO DO List -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="ion ion-clipboard mr-1"></i>
              <?php echo "Kelengkapan Berkas/Dokumen Pencari Kerja" ?>
            </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <ul class="todo-list" data-widget="todo-list">
              <?php
              $now = time();
              foreach ($dokumen as $dok) :
                if ($dok->tgl_upload != NULL) {
                  $uploaded = strtotime($dok->tgl_upload);
                  $datediff = round(($now - $uploaded) / (60 * 60 * 24));
                } else {
                  $datediff = '0';
                }
              ?>
                <li>
                  <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo2" id="todoCheck2" <?php echo ($dok->pencakerdokumen_id != NULL) ? 'checked' : ''; ?> disabled>
                    <label for="todoCheck2"></label>
                  </div>
                  <span class="text"><?php echo $dok->jenis_dokumen; ?></span>
                  <small class="badge badge-info"><i class="far fa-clock"></i> <?php echo $datediff . " days"; ?></small>

                </li>
              <?php endforeach; ?>
            </ul>
          </div>



          <!-- /.card-body -->
          <div class="card-footer clearfix">
          </div>
        </div>
        <!-- /.card -->
      </div>
      <div class="col">
        <section>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="ion-ios-calendar-outline mr-1"></i>
                <?php echo "Linimasa" ?>
              </h3>
            </div>

            <div class="card-body">
              <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                <?php foreach ($timeline as $tl) : ?>

                  <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                      <span class="vertical-timeline-element-icon bounce-in">
                        <i class="badge badge-dot badge-dot-xl badge-<?php echo ($tl->description != null) ? 'info' : 'secondary'; ?>"> </i>
                      </span>
                      <div class="vertical-timeline-element-content bounce-in">
                        <h4 class="timeline-title <?php echo ($tl->description != null) ? 'text-info' : ''; ?>"><?php echo $tl->subject; ?></h4>
                        <p <?php echo ($tl->description != null) ? 'class="text-info"' : ''; ?>><?php echo $tl->description; ?></p>
                        <?php
                        if ($tl->subject == 'PROSES VERIFIKASI DATA') {
                          if (!empty($verifikasi)) {
                        ?>
                            <p class="text-danger">Catatan:</p>
                            <div id="pesan" style="border: 1px solid red;" class="text-danger py-1 px-1">
                              <?php foreach ($verifikasi as $v) :
                                echo $v->pesan;
                              endforeach; ?>
                            </div>
                        <?php }
                        } ?>
                        <div class="tanggal">
                          <span class="vertical-timeline-element-date text-left">
                            <?php
                            if (!empty($tl->tglwaktu)) {
                              echo date_indo(substr($tl->tglwaktu, 0, 10));
                            }
                            ?>
                          </span><br>
                          <span class="vertical-timeline-element-time text-left text-info">
                            <?php echo substr($tl->tglwaktu, 11, 5); ?>
                          </span>
                        </div>

                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<?php include viewPath('includes/footer'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $url->assets ?>js/pages/dashboard.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/js/dashboard-new-custom-js.js"></script>
<script type="text/javascript">
  var baseURL = "<?php echo site_url() ?>";
</script>