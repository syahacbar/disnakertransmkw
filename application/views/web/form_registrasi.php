<?php include viewPath('web/template/header'); ?>


<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Formulir Pembuatan Akun</h2>
                <p>Untuk pengajuan pembuatan Kartu Pencari Kerja Form AK-1 (Kartu Kuning), silakan terlebih dahulu mendaftarkan akun menggunakan NIK, Email, dan Nomor Whatsapp yang aktif.</p>
            </div>

            <!-- <div class="row">
                <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="<?php // echo site_url('web/account_registration'); 
                                    ?>" method="post" role="form" class="">
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="namalengkap" class="form-control" id="namalengkap" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="namalengkap">NIK</label>
                                <input type="text" name="nik" class="form-control" id="nik" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="nohp">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                            <div class="mb-3 col-lg-6">
                                <label for="nohp">Nomor HP (WhatsApp)</label>
                                <input type="number" class="form-control" name="nohp" id="nohp" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-lg-6">
                                <label for="name">Kata Sandi</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="password_confirm">Kata Sandi</label>
                                <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">Daftar</button></div>
                    </form>
                </div>

            </div> -->

            <div class="row">
                <form action="<?php echo site_url('web/account_registration'); ?>" method="post" role="form" class="">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="namalengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="namalengkap" name="namalengkap" autofocus>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" name="nik">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="nohp" class="form-label">Nomor HP (WhatsApp)</label>
                            <input type="text" class="form-control" id="nohp" name="nohp">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="password_confirm" class="form-label">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-center w-25">Daftar</button>
                </form>
            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
<!-- <script src="<?php // echo base_url(); 
                    ?>/assets/frontend/assets/vendor/php-email-form/validate.js"></script> -->

<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>

</body>

</html>