<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="visimisi" class="about visimisi">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Visi dan Misi</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <h4>Visi</h4>
                    <p class="text-center">"Mempersiapkan Tenaga Kerja Mandiri Dan Membangun Permukiman Layak Huni Menuju Masyarakat Manokwari Sejahtera"
                    </p>

                </div>
                <div class="col-lg-6">
                    <h4>Misi</h4>
                    <p>
                        Misi Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari sebagai berikut:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Meningkatkan Mutu Pelayanan Terhadap Calon Tenaga Kerja Dan Meningkatkan Kualitas Tenaga Kerja.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan perlindungan Tenaga Kerja.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan kualitas Permukiman Transmigrasi.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan Taraf Hidup Transmigran Dan Masyarakat Sekitarnya.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan Kualitas Aparatur, Administrasi Ketenagakerjaan dan Ketransmigrasian.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= About Us Section ======= -->
    <section id="tupoksi" class="about tupoksi mt-4">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-4">
                <h2>Tugas Pokok dan Fungsi</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <h4>Tugas Pokok</h4>
                    <p>
                        Melaksanakan Penyusunan Pelaksanaan Kebijakan Daerah Di Bidang Ketenagakerjaan dan Transmigrasi Serta Tugas-Tugas Lainnya Yang Diberikan Oleh Bupati
                    </p>

                </div>
                <div class="col-lg-6">
                    <h4>Fungsi</h4>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Perumusan kebijakan teknis dibidang Tenaga Kerja dan Transmigrasi;</li>
                        <li><i class="ri-check-double-line"></i> Pelayanan Umum Dinas Tenaga Kerja dan Transmigrasi Kab. Manokwari;</li>
                        <li><i class="ri-check-double-line"></i> Pemberian Perpanjangan Izin Masuk Tenaga Asing (IMTA)/Rekomendasi;</li>
                        <li><i class="ri-check-double-line"></i> Pengkoordinasian dan Pembinaan Teknis Ketenagakerjaan dan Transmigrasi;</li>
                        <li><i class="ri-check-double-line"></i> Pelaksanaan, Perencanaan, Pembangunan dan Pengembangan Kawasan Transmigrasi;</li>
                        <li><i class="ri-check-double-line"></i> Pelaksanaan Pendidikan dan Pelatihan Dibidang Ketenagakerjaan;</li>
                        <li><i class="ri-check-double-line"></i> Pelaksanaan Pengawasan, Perlindungan dan Penegakan Hukum Terhadap Keselamatan dan Kesehatan Kerja;</li>
                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= Contact Section ======= -->
    <section id="struktur" class="contact struktur mt-3">
        <div class="container">

            <div class="section-title mt-4">
                <h2>Struktur Organisasi</h2>
                <a href="#" id="pop">
                    <img data-bs-toggle="modal" data-bs-target="#imagemodal" id="imageresource" class="border border-info rounded" src="<?php echo base_url('uploads/profil/'); ?>STRUKTUR_DISNAKERTRANS.jpg" width="100%">
                </a>
            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->


<!-- Creates the bootstrap modal where the image will appear -->
<!-- <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Image preview</h4>
            </div>
            <div class="modal-body">
                <img src="" id="imagepreview" style="width: 400px; height: 264px;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->

<!-- Modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" aria-labelledby="imagemodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-body">
                <img data-bs-toggle="modal" data-bs-target="#imagemodal" id="imageresource" class="border border-info rounded" src="<?php echo base_url('uploads/profil/'); ?>STRUKTUR_DISNAKERTRANS.jpg" width="100%">
            </div>
        </div>
    </div>
</div>

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
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>

<script>
    $("#pop").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource').attr('src'));
        $('#imagemodal').modal('show');
    });
</script>
</body>

</html>