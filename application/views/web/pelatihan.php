<!-- ======= Header ======= -->
<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<!-- End Header -->
<style>
    li.py-1::marker {
        color: #47b2e4;
    }

    .card-img,
    .card-img-bottom,
    .card-img-top {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }
</style>
<main id="main" class="mt-3 py-3">
    <!-- ======= Cta Section ======= -->
    <section id="portfolio" class="portfolio mt-5">
        <div class="container mt-5">
            <div class="section-title">
                <h2>Pelatihan</h2>
                <p>Silakan pilih pelatihan yang ingin Anda ikuti dan dapatkan sertifikat keahliannya. Layanan ini diharapkan dapat memberikan bekal keterampilan profesional bagi angkatan kerja sehingga dapat membuka peluang kerja sendiri dan berwirausaha secara mandiri.</p>
            </div>
            <ul id="portfolio-flters" class="d-flex justify-content-center">
                <li data-filter="*" class="filter-active">Semua Kejuruan</li>
                <li data-filter=".tkj">Teknologi Informasi dan Komunikasi</li>
                <li data-filter=".bismen">Bisnis dan Manajemen</li>
                <li data-filter=".filter-web">Tata Kecantikan</li>
                <li data-filter=".filter-web">Pariwisata</li>
            </ul>

            <div class="row portfolio-container">
                <div class="col-sm-12 col-md-4 col-lg-3 portfolio-item tkj">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/pelatihan/jarkom.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Dasar-Dasar Jaringan Komputer</h5>
                            <!-- <p class="card-text">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.</p> -->
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Teknik Komputer</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 portfolio-item tkj">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/pelatihan/jarkom.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Dasar-Dasar Jaringan Komputer</h5>
                            <!-- <p class="card-text">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.</p> -->
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Teknik Komputer</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 portfolio-item bismen">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/pelatihan/bismen.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Apa itu Bisnis dan Manajemen?</h5>
                            <!-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> -->
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Bisnis dan Manajemen</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3 portfolio-item bismen">
                    <div class="card">
                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/pelatihan/bismen.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Apa itu Bisnis dan Manajemen?</h5>
                            <!-- <p class="card-text">Lorem ipsum, atau ringkasnya lipsum, adalah teks standar yang ditempatkan untuk mendemostrasikan elemen grafis atau presentasi visual seperti font, tipografi, dan tata letak.</p> -->
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Bisnis dan Manajemen</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Cta Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->