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
    left: 67px;
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
    left: 60px;
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
    margin-left: 90px;
    font-size: .8rem;
  }

  .vertical-timeline-element-content .timeline-title {
    font-size: .8rem;
    text-transform: uppercase;
    margin: 0 0 .5rem;
    padding: 2px 0 0;
    font-weight: bold;
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
        <?php if($keterangan_status == 'Aktif') { ?>
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
      <?php if($keterangan_status == 'Pekerja') { ?>
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
      <?php if($keterangan_status == 'Lapor') { ?>
        <div>
          <!-- small box -->
          <div class="small-box bg-danger">
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
        <!-- ./col -->
      <?php if($keterangan_status == 'Verifikasi') { ?>
        <div>
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>Verifikasi</h3>

              <p>Silahkan tekan tombol berikut ini jika pengisian data formulir AK-1 dan dokumen telah lengkap untuk mengajukan verifikasi data guna penerbitan Kartu Pencari Kerja (Kartu Kuning)</p>
            </div>
            <div class="icon">
              <i class="fa fa-list"></i>
            </div>
            <a href="#" class="small-box-footer">Verifikasi Data<i class="fas fa-arrow-circle-right"></i></a>
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
                <?php foreach($timeline AS $tl) : ?>
                
                <div class="vertical-timeline-item vertical-timeline-element">
                  <div>
                    <span class="vertical-timeline-element-icon bounce-in">
                      <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                    </span>
                    <div class="vertical-timeline-element-content bounce-in">
                      <h4 class="timeline-title"><?php echo $tl->subject;?></h4>
                      <p><?php echo $tl->description;?></p>
                      <span class="vertical-timeline-element-date text-left"><?php echo $tl->tglwaktu;?></span>
                    </div>
                  </div>
                </div>
                <?php endforeach;?>
              </div>
            </div>
          </div>
        </section>
        <section class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="ion-ios-calendar-outline mr-1"></i>
              <?php echo "Linimasa" ?>
            </h3>
          </div>

          <div class="card-body">
            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
              
              <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                  <span class="vertical-timeline-element-icon bounce-in">
                    <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                  </span>
                  <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title">MENGISI FORMULIR PENCAKER</h4>
                    <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                    <p>Yet another one, at <span class="text-success">5:00 PM</span></p>
                    <span class="vertical-timeline-element-date text-left">4 <br>Agustus</span>
                  </div>
                </div>
              </div>
              <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                  <span class="vertical-timeline-element-icon bounce-in">
                    <i class="badge badge-dot badge-dot-xl badge-warning"> </i>
                  </span>
                  <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title">MENGISI FORMULIR PENCAKER</h4>
                    <p>Another meeting with UK client today, at <b class="text-danger">3:00 PM</b></p>
                    <p>Yet another one, at <span class="text-success">5:00 PM</span></p>
                    <span class="vertical-timeline-element-date text-left">4 <br>Agustus</span>
                  </div>
                </div>
              </div>
              <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                  <span class="vertical-timeline-element-icon bounce-in">
                    <i class="badge badge-dot badge-dot-xl badge-danger"> </i>
                  </span>
                  <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title">MELENGKAPI BERKAS/DOKUMEN PENCAKER</h4>
                    <p>meeting with team mates about the launch of new product. and tell them about new features</p>
                    <span class="vertical-timeline-element-date text-left">6 <br>Agustus</span>
                  </div>
                </div>
              </div>
              <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                  <span class="vertical-timeline-element-icon bounce-in">
                    <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                  </span>
                  <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title text-success">PROSES VERIFIKASI DATA</h4>
                    <p>Discussion with marketing team about the popularity of last product</p>
                    <span class="vertical-timeline-element-date text-left">10 <br>Agustus</span>
                  </div>
                </div>
              </div>
              <div class="vertical-timeline-item vertical-timeline-element">
                <div>
                  <span class="vertical-timeline-element-icon bounce-in">
                    <i class="badge badge-dot badge-dot-xl badge-primary"> </i>
                  </span>
                  <div class="vertical-timeline-element-content bounce-in">
                    <h4 class="timeline-title text-success">DOKUMEN DINYATAKAN LENGKAP</h4>
                    <p>Discussion with marketing team about the popularity of last product</p>
                    <span class="vertical-timeline-element-date text-left">13 <br>Agustus</span>
                  </div>
                </div>
              </div>
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