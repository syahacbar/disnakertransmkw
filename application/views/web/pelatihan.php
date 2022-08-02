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
            </div>
            <ul id="portfolio-flters" class="d-flex justify-content-center">
                <li data-filter="*" class="filter-active">Semua Kejuruan</li>
                <li data-filter=".tkj">Teknologi Informasi dan Komunikasi</li>
                <li data-filter=".bismen">Bisnis dan Manajemen</li>
                <li data-filter=".filter-web">Tata Kecantikan</li>
                <li data-filter=".filter-web">Pariwisata</li>
            </ul>

            <div class="row portfolio-container">
                <?php foreach ($listpelatihan as $pelatihan) : ?>
                    <div class="col-sm-12 col-md-4 col-lg-3 portfolio-item tkj">
                        <div class="card">
                            <img src="<?php echo base_url('uploads/informasi/pelatihan/') . $pelatihan->gambar; ?>" class="card-img-top">
                            <div class="card-body">
                                <?php $slug = url_title($pelatihan->judul, 'dash', true); ?>
                                <a href="<?php echo site_url('pelatihan/') . $slug; ?>">
                                    <h5 class="card-title"><?php echo $pelatihan->judul; ?></h5>
                                </a>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Teknik Komputer</small>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section><!-- End Cta Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->