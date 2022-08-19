<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/frontend/assets/css/detailberita-custom-css.css">

<main id="main">
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9 isiberita">
                    <div class="d-flex flex-row"></div>
                    <h2 class="text-capitalize"><?php echo $detailberita->judul; ?></h2>
                    <p class="text-primary">
                        <i class="bx bxl-calendar text-secondary"></i> <?php echo longdate_indo(substr($detailberita->tgl_publikasi, 0, 10)); ?>
                    </p>
                    <div class="row news-card mt-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-3">
                            <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="<?php echo base_url('uploads/informasi/berita/' . $detailberita->gambar); ?>"></div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                            <div class="news-feed-text">
                                <?php echo $detailberita->isi; ?>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 m-0">
                                    <div class="tag">
                                        <p>Tag:</p>
                                        <ul>
                                            <li>
                                                <?php
                                                $tags = $detailberita->tags;
                                                $tagsarray = explode(",", $tags);
                                                foreach ($tagsarray as $tag) :
                                                ?>
                                                    <a href="<?php echo site_url('tag/') . trim($tag); ?>"><?php echo trim($tag); ?></a>
                                                <?php endforeach; ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 m-0">
                                    <div class="row">
                                        <ul class="social-list">
                                            <li>
                                                <a href="#">
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center facebook">
                                                                <div class="social-icon">
                                                                    <i class="bx bxl-facebook"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="#">
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center py-4 twitter">
                                                                <div class="social-icon">
                                                                    <i class="bx bxl-twitter"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center py-4 envelope">
                                                                <div class="social-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>


                                            <li>
                                                <a href="#">
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center py-4 whatsapp">
                                                                <div class="social-icon">
                                                                    <i class="bx bxl-whatsapp"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3 sidebar">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <div class="row sidebar">
                                <h5>Kategori Informasi</h5>
                            </div>
                            <div class="row">
                                <ul>
                                    <a href="<?php echo site_url('berita'); ?>">Berita<span> (<?php echo $count_berita; ?>)</span></a><br>
                                    <a href="<?php echo site_url('pengumuman'); ?>">Pengumuman<span> (<?php echo $count_pengumuman; ?>)</span></a><br>
                                    <a href="<?php echo site_url('pelatihan'); ?>">Pelatihan<span> (<?php echo $count_pelatihan; ?>)</span></a><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row sidebar">
                                <h5>Tags</h5>
                            </div>
                            <div class="row tagsidebar">
                                <ul>
                                    <?php foreach ($tags_sidebar as $x) : ?>
                                        <li><a href="<?php echo site_url('tag/') . $x; ?>"><?php echo $x; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php include viewPath('web/template/footer'); ?>