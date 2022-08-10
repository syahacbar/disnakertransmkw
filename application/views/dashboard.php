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
            <h3><?php echo $aktif;?></h3>

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
            <h3><?php echo $bekerja;?></h3>

            <p>Sudah Bekerja</p>
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
            <h3><?php echo $lapor;?></h3>

            <p>Wajib Lapor</p>
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
        <div class="small-box bg-secondary">
          <div class="inner">
            <h3><?php echo $verifikasi;?></h3>

            <p>Belum Diverifikasi/Divalidasi</p>
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
              Statistik Pencari Kerja di Kabupaten Manokwari
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pendidikan-chart" data-toggle="tab">Pendidikan Terakhir</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#usia-chart" data-toggle="tab">Rentang Usia</a>
                </li>
              </ul>
            </div>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="pendidikan-chart" style="position: relative; height: 450px;">
              </div>
              <div class="chart tab-pane" id="usia-chart" style="position: relative; height: 450px;">
              </div>
            </div>
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
      </section>
      <section class="col-lg-6">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-bar mr-1"></i>
              Grafik Pengajuan Penerbitan Kartu Pencari Kerja
            </h3>
        <!--     <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#pendidikan-chart" data-toggle="tab">Pendidikan Terakhir</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#umur-chart" data-toggle="tab">Rentang Usia</a>
                </li>
              </ul>
            </div> -->
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content p-0">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="line-chart" style="position: relative; height: 450px;">
                <canvas id="pendidikan-chart-canvas" height="300" style="height: 300px;"></canvas>
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
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>

  //statistik pendidikan terakhir
  Highcharts.chart('pendidikan-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Pencari Kerja di Kab. Manokwari Berdasarkan Jenjang Pendidikan Terakhir'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
        <?php foreach($q_pendidikan_terakhir AS $pdt) : ?>
        {
            name: '<?php echo $pdt->jenjang;?>',
            y: <?php echo $pdt->total;?>
        },
      <?php endforeach;?>
        ]
    }],

    credits:{
      enabled:false
    }
});

  //statistik rentang usia
  <?php
    $u1 = 0;
    $u2 = 0;
    $u3 = 0;
    $u4 = 0;
    $u5 = 0;
    $u6 = 0;
    foreach ($q_umur as $u) :
      if ($u->umur < 15) {
        $u1 += $u->jumlah;
      }
      if ($u->umur >= 15 && $u->umur < 24) {
        $u2 += $u->jumlah;
      }
      if ($u->umur >= 25 && $u->umur < 34) {
        $u3 += $u->jumlah;
      }
      if ($u->umur >= 35 && $u->umur < 44) {
        $u4 += $u->jumlah;
      }
      if ($u->umur >= 45 && $u->umur < 54) {
        $u5 += $u->jumlah;
      }
      if ($u->umur > 54) {
        $u6 += $u->jumlah;
      }
    endforeach;
    ?>
  Highcharts.chart('usia-chart', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Jumlah Pencari Kerja di Kab. Manokwari Berdasarkan Rentang Usia'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
        {
            name: '< 15 tahun',
            y: <?php echo $u1;?>
        }, {
            name: '15 - 24 tahun',
            y: <?php echo $u2;?>
        }, {
            name: '25 - 34 tahun',
            y: <?php echo $u3;?>
        }, {
            name: '35 - 44 tahun',
            y: <?php echo $u4;?>
        }, {
            name: '45 - 54 tahun',
            y: <?php echo $u5;?>
        }, {
            name: '> 54 tahun',
            y: <?php echo $u6;?>
        } 
        ]
    }],

    credits:{
      enabled:false
    }
});

  //grafik line, pengajuan kartu kuning
   Highcharts.addEvent(Highcharts.Point, 'click', function () {
    if (this.series.options.className.indexOf('popup-on-click') !== -1) {
      const chart = this.series.chart;
      const date = Highcharts.dateFormat('%A, %b %e, %Y', this.x);
      const text = `<b>${date}</b><br/>${this.y} ${this.series.name}`;

      const anchorX = this.plotX + this.series.xAxis.pos;
      const anchorY = this.plotY + this.series.yAxis.pos;
      const align = anchorX < chart.chartWidth - 200 ? 'left' : 'right';
      const x = align === 'left' ? anchorX + 10 : anchorX - 10;
      const y = anchorY - 30;
      if (!chart.sticky) {
          chart.sticky = chart.renderer
              .label(text, x, y, 'callout',  anchorX, anchorY)
              .attr({
                  align,
                  fill: 'rgba(0, 0, 0, 0.75)',
                  padding: 10,
                  zIndex: 7 // Above series, below tooltip
              })
              .css({
                  color: 'white'
              })
              .on('click', function () {
                  chart.sticky = chart.sticky.destroy();
              })
              .add();
      } else {
          chart.sticky
              .attr({ align, text })
              .animate({ anchorX, anchorY, x, y }, { duration: 250 });
      }
    }
});


Highcharts.chart('line-chart', {

    chart: {
        type: 'line'
    },
    title: {
        text: 'Jumlah Permintaan Penerbitan Kartu Pencari Kerja'
    },
    // subtitle: {
    //     text: 'Source: WorldClimate.com'
    // },
    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
    },
    yAxis: {
        title: {
            text: 'Jumlah Pencaker (orang)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Laki-laki',
        data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
    }, {
        name: 'Perempuan',
        data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
    }],
    credits:{
      enabled:false
    }
});
  </script>
