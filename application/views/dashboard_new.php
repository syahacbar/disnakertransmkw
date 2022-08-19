<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>
  ::-webkit-scrollbar {
    width: 8px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }

  body {
    background-color: #eee;
  }

  .mt-70 {
    margin-top: 70px;
  }

  .mb-70 {
    margin-bottom: 70px;
  }

  .card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-width: 0;
    transition: all .2s;
  }

  .card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(26, 54, 126, 0.125);
    border-radius: .25rem;
  }

  .card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
  }

  .vertical-timeline {
    width: 100%;
    position: relative;
    padding: 1.5rem 0 1rem;
  }

  .vertical-timeline::before {
    content: '';
    position: absolute;
    top: 0;
    left: 110px;
    height: 100%;
    width: 4px;
    background: #e9ecef;
    border-radius: .25rem;
  }

  .vertical-timeline-element {
    position: relative;
    margin: 0 0 1rem;
  }

  .vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
    visibility: visible;
    animation: cd-bounce-1 .8s;
  }

  .vertical-timeline-element-icon {
    position: absolute;
    top: 0;
    left: 103px;
  }

  .vertical-timeline-element-icon .badge-dot-xl {
    box-shadow: 0 0 0 5px #fff;
  }

  .badge-dot-xl {
    width: 18px;
    height: 18px;
    position: relative;
  }

  .badge:empty {
    display: none;
  }


  .badge-dot-xl::before {
    content: '';
    width: 10px;
    height: 10px;
    border-radius: .25rem;
    position: absolute;
    left: 50%;
    top: 50%;
    margin: -5px 0 0 -5px;
    background: #fff;
  }

  .vertical-timeline-element-content {
    position: relative;
    margin-left: 85px;
    font-size: .8rem;
  }

  .vertical-timeline-element-content p,
  #pesan {
    margin-left: 55px;
  }

  .vertical-timeline-element-content .timeline-title {
    font-size: .8rem;
    text-transform: uppercase;
    margin: 0 0 .5rem;
    padding: 2px 0 0;
    font-weight: bold;
    margin-left: 55px;
  }

  .vertical-timeline-element-content .vertical-timeline-element-date {
    display: block;
    position: absolute;
    left: -90px;
    top: 0;
    padding-right: 10px;
    text-align: right;
    color: #adb5bd;
    font-size: .7619rem;
    white-space: nowrap;
  }

  .vertical-timeline-element-content:after {
    content: "";
    display: table;
    clear: both;
  }

  span.vertical-timeline-element-time.text-left {
    display: block;
    position: absolute;
    left: -90px;
    top: 27px;
    padding-right: 10px;
    text-align: right;
    color: #adb5bd;
    font-size: .7619rem;
    white-space: nowrap;
  }
</style>
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

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="ion ion-stats-bars mr-1"></i>
              <?php echo "Laporan Per 6 Bulan" ?>
            </h3>
          </div>
          <div class="card-body">
            <div class="row mt-3">
              <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <label for="">Apakah Anda sudah memperoleh pekerjaan?</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="laporan" id="laporan1" value="laporan1">
                  <label class="form-check-label" for="laporan1">
                    Ya, saya sudah bekerja
                  </label>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-2">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="laporan" id="laporan2" value="laporan2">
                  <label class="form-check-label" for="laporan2">
                    Belum bekerja
                  </label>
                </div>
              </div>
            </div>

            <div class="card-footer">
              <button type="button" id="simpanLaporan" value="button" class="btn btn-primary btn-sm" style="display:none">Simpan</button>
            </div>
          </div>
        </div>

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

<!-- Modal -->
<div class="modal fade" id="modalLaporan" tabindex="-1" role="dialog" aria-labelledby="modalLaporanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLaporanLabel">Data Perusahaan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-12">
          <div class="form-group">
            <label for="nama_perusahaan">Nama Perusahaan/Instansi/Badan Hukum</label>
            <input type="text" class="form-control" name="nama_perusahaan" id="nama_perusahaan" />
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <label for="bidang_pekerjaan">Bidang Pekerjaan</label>
            <input type="text" class="form-control" name="bidang_pekerjaan" id="bidang_pekerjaan" />
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="alamat_perusahaan">Alamat</label>
            <textarea type="text" class="form-control" name="alamat_perusahaan" id="alamat_perusahaan"></textarea>
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="notlp_perusahaan">Nomor Telepon</label>
            <input type="text" class="form-control" name="notlp_perusahaan" id="notlp_perusahaan" />
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="jabatan">Jabatan Anda</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>
<?php include viewPath('includes/footer'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $url->assets ?>js/pages/dashboard.js"></script>

<script>
  $(document).ready(function() {

    function modalVerifikasi(ket_status) {
      Swal.fire({
        title: 'Konfirmasi!',
        text: "Apakah Anda yakin telah melengkapi data profil dan mengunggah semua dokumen yang diperlukan dengan benar?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Ya, Saya Yakin!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
            url: "<?php echo site_url('pencaker/update_keterangan_status') ?>",
            type: "POST",
            data: {
              keterangan_status: ket_status
            },
            success: function(data) {
              var objData = jQuery.parseJSON(data);
              if (objData.status) {
                Swal.fire({
                  title: 'Selamat!',
                  text: 'Data Anda telah berhasil dikirim untuk selanjutnya diverifikasi. Silakan menunggu informasi selanjutnya!',
                  icon: 'success',
                  confirmButtonColor: '#3085d6',
                  confirmButtonText: 'Ya'
                }).then((result) => {
                  if (result.isConfirmed) {
                    location.reload();
                  }
                });
              }
            }
          });


        }
      })
    }

    $('input[name="laporan"]').change(function() {
      if ($(this).is(':checked') && $(this).val() == 'laporan1') {
        $('#modalLaporan').modal('show');
      }

      if ($(this).attr("value") == "laporan1") {
        $("#simpanLaporan").hide();
      }

      if ($(this).attr("value") == "laporan2") {
        $("#simpanLaporan").show();

      }
    });
  });
</script>