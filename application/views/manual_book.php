<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>


<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Buku Panduan</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
          <li class="breadcrumb-item active">Buku Panduan</li>
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
            <h3 class="card-title p-3">Buku Panduan Penggunaan dan Pengoperasian Website www.disnakertransmkw.com</h3>
            <div class="ml-auto p-2">
              <a href="<?php echo base_url('assets/') . 'manual_book_disnakertransmkw.pdf'; ?>" class="btn btn-primary btn-sm">Download</a>
            </div>
          </div>

          <!-- /.card-header -->
          <div class="card-body" style="height: 100vh; ">
            <iframe id="iframe" src="<?php echo base_url('assets/') . 'manual_book_disnakertransmkw.pdf'; ?>" frameborder="0" style="overflow:hidden;height:100%;width:100%" min-height="100%" width="100%"></iframe>
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
  function changeHeight() {
    var x = document.getElementById('iframe');
    x.style.height = "100%";
  }
</script>