<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<style>
    .services .icon-box .icon i {
        color: #47b2e4;
        font-size: 70px !important;
        transition: 0.3s;
    }
</style>
<main id="main">
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta services">
        <div class="container" data-aos="zoom-in">

            <div class="row mb-5">
                <div class="section-title">
                    <h3>3 Langkah mudah membuat Kartu Pencari Kerja (Kartu Kuning)</h3>
                    <p>Yuk, hanya dengan 3 langkah berikut ini Anda dapat dengan mudah membuat Kartu Pencari Kerja (Kartu Kuning).</p>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-user-plus bx-lg"></i></div>
                        <h4>Registrasi Akun</h4>
                        <p class="text-dark">Buat akun baru dengan mengisi nama lengkap, NIK (Nomor Induk Kependudukan), email, dan nomor HP.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-dock-left bx-lg"></i></div>
                        <h4>Isi Aplikasi</h4>
                        <p class="text-dark">Lengkapi form AK-1 dan unggah dokumen kelengkapan sebagai pencari kerja, diantaranya: pas foto, KTP, ijazah terakhir, transkrip nilai, riwayat hidup, SKCK, dan suket sehat.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-4 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxs-check-square bx-lg"></i></div>
                        <h4>Validasi</h4>
                        <p class="text-dark">Mendatangi kantor Disnakertrans Kab. Manokwari dengan membawa dokumen asli untuk proses validasi sehingga Anda dapat memperoleh Kartu Pencari Kerja (Kartu Kuning) dan tercatat aktif sebagai pencari kerja di Disnakertrans Kab. Manokwari.</p>
                    </div>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-xl-12 col-md-12 d-flex align-items-center justify-content-center">
                    <a class="cta-btn align-middle" href="<?php echo site_url('web/registrasi'); ?>">Buat Akun Sekarang</a>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->