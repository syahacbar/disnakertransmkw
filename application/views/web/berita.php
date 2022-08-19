<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/frontend/assets/css/berita-custom-css.css">

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Berita</h2>
            </div>

            <div class="row">
                <?php foreach ($listberita as $berita) : ?>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                        <figure class="barto">
                            <div class="image">
                                <img src="<?php echo base_url('uploads/informasi/berita/') . $berita->gambar; ?>" alt="pr-sample23" />
                            </div>
                            <figcaption>
                                <div class="date">
                                    <span class="day">
                                        <?php echo substr(mediumdate_indo(substr($berita->tgl_publikasi, 0, 10)), 0, 2); ?>
                                    </span>
                                    <span class="month">
                                        <?php echo substr(mediumdate_indo(substr($berita->tgl_publikasi, 0, 10)), 3, 3); ?>
                                    </span>
                                </div>
                                <h3><?php echo $berita->judul; ?></h3>
                                <p><?php echo word_limiter(filter_var($berita->isi, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH), 15); ?>
                                </p>
                            </figcaption>
                            <a href="<?php echo site_url('berita/') . $berita->slug; ?>"></a>
                        </figure>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->