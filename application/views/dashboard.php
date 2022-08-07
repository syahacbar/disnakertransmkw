<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

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
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>150</h3>

            <p>Pencaker Aktif</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="#" class="small-box-footer"><?php echo lang('dashboard_more_info'); ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>53<sup style="font-size: 20px">%</sup></h3>

            <p>Sudah Mendapat Pekerjaan</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="#" class="small-box-footer"><?php echo lang('dashboard_more_info'); ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>

            <p>Belum Bekerja</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="#" class="small-box-footer"><?php echo lang('dashboard_more_info'); ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>44</h3>

            <p>Belum Melapor > 6 Bulan</p>
          </div>
          <div class="icon">
            <i class="fa fa-users"></i>
          </div>
          <a href="#" class="small-box-footer"><?php echo lang('dashboard_more_info'); ?><i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-6">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>
              Grafik
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pendidikan-chart" data-toggle="tab">Pendidikan Terakhir</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#umur-chart" data-toggle="tab">Rentang Usia</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="pendidikan-chart" style="position: relative; height: 300px;">
                <canvas id="pendidikan-chart-canvas" height="300" style="height: 300px;"></canvas>
              </div>
              <div class="chart tab-pane" id="umur-chart" style="position: relative; height: 300px;">
                <canvas id="umur-chart-canvas" height="300" style="height: 300px;"></canvas>
              </div>
            </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->



<?php include viewPath('includes/footer'); ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $url->assets ?>js/pages/dashboard.js"></script>
