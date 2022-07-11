<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('public/template/header'); ?>


    <main id="main">
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Kartu Kuning</h2>
                    <p>Kartu Kuning adalah kartu tanda pencari kerja yang sering disebut pula dengan AK1. Kartu ini dikeluarkan oleh lembaga pemerintah, Dinas Ketenagakerjaan atau Disnaker, yang dibuat dengan tujuan untuk pendataan para pencari kerja.</p>
                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="box">
                            <h3>Apply Kartu Kuning</h3>
                            <h4><span>Berikut ini adalah syarat untuk membuat kartu AK1 (Kartu Kuning).</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Fotokopi ijazah terakhir yang terlegalisasi</li>
                                <li><i class="bx bx-check"></i> Fotokopi KTP</li>
                                <li><i class="bx bx-check"></i> Fotokopi Kartu Keluarga (KK)</li>
                                <li><i class="bx bx-check"></i> Satu lembar pas photo berwarna ukuran 3x4</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <button href="" class="buy-btn" data-bs-toggle="modal" data-bs-target="#modalRegistrasi">Apply Sekarang</button>
                        </div>
                    </div>

                    <!-- <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box featured">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>29<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <div class="box">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>49<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                                <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                                <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                                <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                                <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                            </ul>
                            <a href="#" class="buy-btn">Get Started</a>
                        </div>
                    </div> -->

                </div>

            </div>
        </section><!-- End Pricing Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include viewPath('public/template/footer'); ?>
    <!-- End Footer -->

<?php include viewPath('includes/footer'); ?>
    <!-- Modal -->

    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="modalRegistrasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalRegistrasiLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalRegistrasiLabel">Formulir Pembuatan Akun</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- ======= Contact Section ======= -->
                    <section id="contact" class="contact">
                        <div class="container">

                            <!-- <div class="section-title"> -->
                            <!-- <h2>Formulir Pembuatan Akun</h2> -->
                            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
                            <!-- </div> -->

                            <div class="row">
                                <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
                                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="namalengkap">Nama Lengkap</label>
                                                <input type="text" name="namalengkap" class="form-control" id="namalengkap" required>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="nohp">Nomor HP</label>
                                            <input type="number" class="form-control" name="nohp" id="nohp" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="name">Kata Sandi</label>
                                            <input type="password" class="form-control" name="password" id="password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="password_confirm">Kata Sandi</label>
                                            <input type="password" class="form-control" name="password_confirm" id="password_confirm">
                                        </div>
                                        <div class="my-3">
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message">Your message has been sent. Thank you!</div>
                                        </div>
                                        <!-- <div class="text-center"><button type="submit">Daftar</button></div> -->
                                    </form>
                                </div>

                            </div>

                        </div>
                    </section><!-- End Contact Section -->
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button> -->
                    <button type="submit" class="btn btn-primary">Daftar</button>

                </div>
            </div>
        </div>
    </div>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>

</body>

</html>