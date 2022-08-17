<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/frontend/assets/css/tags-custom-css.css">

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Tag: "<?php echo $tag; ?>"</h2>
            </div>

            <div class="row">
                <?php
                foreach ($listinformasi as $info) :
                    if ($info->kategori == 'Berita') { ?>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                            <figure class="barto">
                                <div class="image">
                                    <img src="<?php echo base_url('uploads/informasi/berita/') . $info->gambar; ?>" alt="pr-sample23" />
                                </div>
                                <figcaption>
                                    <div class="date">
                                        <span class="day">
                                            <?php echo substr(mediumdate_indo(substr($info->tgl_publikasi, 0, 10)), 0, 2); ?>
                                        </span>
                                        <span class="month">
                                            <?php echo substr(mediumdate_indo(substr($info->tgl_publikasi, 0, 10)), 3, 3); ?>
                                        </span>
                                    </div>
                                    <h3><?php echo $info->judul; ?></h3>
                                    <p><?php echo word_limiter(filter_var($info->isi, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH), 15); ?>
                                    </p>
                                </figcaption>
                                <?php $slug = url_title($info->judul, 'dash', true); ?>
                                <a href="<?php echo site_url('berita/') . $slug; ?>"></a>
                            </figure>
                        </div>
                    <?php } elseif ($info->kategori == 'Pengumuman') { ?>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                            <figure class="barto">
                                <div class="image">
                                    <img src="<?php echo base_url('uploads/informasi/pengumuman/') . $info->gambar; ?>" alt="pr-sample23" />
                                </div>
                                <figcaption>
                                    <div class="date">
                                        <span class="day">
                                            <?php echo substr(mediumdate_indo(substr($info->tgl_publikasi, 0, 10)), 0, 2); ?>
                                        </span>
                                        <span class="month">
                                            <?php echo substr(mediumdate_indo(substr($info->tgl_publikasi, 0, 10)), 3, 3); ?>
                                        </span>
                                    </div>
                                    <h3><?php echo $info->judul; ?></h3>
                                    <p><?php echo word_limiter(filter_var($info->isi, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH), 15); ?>
                                    </p>
                                </figcaption>
                                <?php $slug = url_title($info->judul, 'dash', true); ?>
                                <a href="<?php echo site_url('pengumuman/') . $slug; ?>"></a>
                            </figure>
                        </div>
                    <?php } ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->