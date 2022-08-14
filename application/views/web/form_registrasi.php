<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<style>
    .row.border.p-4.rounded.py-5 {
        box-shadow: 0px 3px 4px 0px #dbdbdc;
    }
</style>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Formulir Pembuatan Akun</h2>
                <p>Untuk pengajuan pembuatan Kartu Pencari Kerja Form AK-1 (Kartu Kuning), silakan terlebih dahulu mendaftarkan akun menggunakan NIK, Email, dan Nomor Whatsapp yang aktif.</p>
            </div>

            <div class="row border p-4 rounded py-5">

                <div class="col-md-6 px-3 d-flex justify-content-center align-items-center ">
                    <img class="w-100" src="https://i.imgur.com/uNGdWHi.png" alt="">
                </div>

                <div class="col-md-6 px-4">
                    <?php echo $this->session->flashdata('alert'); ?>
                    <form action="<?php echo site_url('web/account_registration'); ?>" method="post" role="form" class="">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap" autofocus required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nohp" class="form-label">Nomor HP (WhatsApp)</label>
                                <input type="text" class="form-control" id="nohp" name="nohp" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="password_confirm" class="form-label">Konfirmasi Kata Sandi</label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button type="submit" id="btnRegistrasiPencaker" class="btn btn-primary text-center w-50">Daftar</button>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->