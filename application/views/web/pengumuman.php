<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/frontend/assets/css/pengumuman-custom-css.css">

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Pengumuman</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($listpengumuman as $pengumuman) : ?>
                    <div class="col">
                        <a href="<?php echo site_url('pengumuman/') . $pengumuman->slug; ?>">
                            <div class="card">


                                <img src="<?php echo base_url('uploads/informasi/pengumuman/') . $pengumuman->gambar; ?>">

                                <div class="card-footer">
                                    <span class="day">
                                        <?php echo longdate_indo(substr($pengumuman->tgl_publikasi, 0, 10)); ?>
                                    </span>
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title"><?php echo $pengumuman->judul; ?></h3>

                                </div>
                                <?php $slug = url_title($pengumuman->judul, 'dash', true); ?>

                            </div>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->