<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<style>
    div#image-preview-container button#prev,
    div#image-preview-container button#next {
        display: none;
    }
</style>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="visimisi" class="about visimisi">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Visi dan Misi</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6 mb-4">
                    <h4 class="text-center">Visi</h4>
                    <i class="fa fa-quote-left"></i>
                    <p class="text-center blockquote text-right mt-4"><strong><em>"Mempersiapkan Tenaga Kerja Mandiri dan Membangun Permukiman Layak Huni Menuju Masyarakat Manokwari Sejahtera"</em></strong>
                    </p>

                </div>
                <div class="col-lg-6">
                    <h4>Misi</h4>
                    <p>
                        Misi Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari sebagai berikut:
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Meningkatkan Mutu Pelayanan Terhadap Calon Tenaga Kerja dan Meningkatkan Kualitas Tenaga Kerja.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan perlindungan Tenaga Kerja.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan kualitas Permukiman Transmigrasi.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan Taraf Hidup Transmigran dan Masyarakat Sekitarnya.</li>
                        <li><i class="ri-check-double-line"></i> Meningkatkan Kualitas Aparatur, Administrasi Ketenagakerjaan dan Ketransmigrasian.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->


    <!-- ======= About Us Section ======= -->
    <section id="tupoksi" class="about section-bg tupoksi mt-3">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-3">
                <h2>Tugas Pokok dan Fungsi</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <h4>Tugas Pokok</h4>
                    <p>
                        Melaksanakan Penyusunan Pelaksanaan Kebijakan Daerah di Bidang Ketenagakerjaan dan Transmigrasi Serta Tugas-Tugas Lainnya yang Diberikan Oleh Bupati.
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

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-2">
                <h2>Struktur Organisasi</h2>
            </div>


            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 col-md-12 portfolio-item all">
                    <div class="portfolio-img"><img src="<?php echo base_url('uploads/profil/'); ?>STRUKTUR_DISNAKERTRANS.jpg" class="img-fluid border" alt=""></div>
                    <div class="portfolio-info">
                        <a href="<?php echo base_url('uploads/profil/'); ?>STRUKTUR_DISNAKERTRANS.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->