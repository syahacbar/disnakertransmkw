<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<title>Snippet - BBBootstrap</title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .news-card {
        border-radius: 8px;
    }

    .news-feed-image {
        border-radius: 8px;
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    .col-lg-12 .news-feed-image {
        border-radius: 8px;
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .date {
        font-size: 12px;
    }

    .username {
        color: blue;
    }

    .share {
        color: blue;
    }

    section#portfolio {
        margin-top: 120px;
    }

    .sidebar h5 {
        background-color: #47b2e4;
        color: #fff;
        padding: 10px;
    }

    .sidebar a {
        text-decoration: none;
    }

    .tag li a {
        background-color: #5a5a5a;
        padding: 5px 15px;
        color: #fff;
        text-decoration: none;
        margin: 10px 0;

    }

    .tag li {
        list-style: none;
    }

    .tag {
        display: flex;
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    .social-list {

        display: flex;
        justify-content: flex-end;
        align-items: center;
    }


    .social-list li {

        list-style: none;
        margin-right: 10px;
    }

    .maincard {
        position: relative;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .thecard {
        position: absolute;
        width: 100%;
        height: 100%;
    }


    .thefront {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: hidden;

        color: #fff;
        border-radius: 10px;
        cursor: pointer;
        border: 1px solid #eee;
        box-shadow: 5px 6px 6px 2px #e9ecef;
        padding: 4px
    }

    .theback {
        position: absolute;
        width: 100%;
        height: 100%;
        cursor: pointer;
        background-color: hidden;

        color: #fff;
        border-radius: 10px;
        border: 1px solid #eee;
        box-shadow: 5px 6px 6px 2px #e9ecef;
        padding: 4px
    }

    .social-text small {

        font-size: 20px;
    }


    @media (max-width:700px) {
        .social-list {

            display: block;
        }
    }

    .facebook {
        background: #3b5998;
    }

    .twitter {
        background: #1c96e8;
    }

    .envelope {
        background: #d54338;
    }

    .whatsapp {

        background: #4dc247;

    }

    .thefront.text-center {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 !important;
    }

    ul.social-list {
        display: flex;
    }

    .isiberita {
        padding: 0 50px !important;
    }
</style>

<main id="main">
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9 isiberita">
                    <div class="d-flex flex-row"></div>
                    <h2 class="text-capitalize">Green plants are going to extinct about 500 times</h2>
                    <p class="text-primary"><?php $date = date_create("2-08-2022");
                                            echo date_format($date, "d/m/Y H:i:s"); ?></p>
                    <div class="row news-card mt-3">
                        <div class="col-sm-12 col-md-12 col-lg-12 mb-4 mt-3">
                            <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://i.imgur.com/ZKbpmaU.jpg"></div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12 mb-3">
                            <div class="news-feed-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-8 mb-5">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="tag">
                                        <p>Tag:</p>
                                        <ul>
                                            <li>
                                                <a href="">Disnaker</a>
                                                <a href="">Papua Barat</a>
                                                <a href="">Kartu Kuning</a>
                                                <a href="">Kerja</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 mt-3">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="mt-2">
                                                <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                                    <div class="d-flex flex-column ml-2">
                                                        <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <ul class="social-list">
                                                <li>
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center facebook">
                                                                <div class="social-icon">
                                                                    <i class="fa fa-facebook"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center py-4 twitter">
                                                                <div class="social-icon">
                                                                    <i class="fa fa-twitter"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center py-4 envelope">
                                                                <div class="social-icon">
                                                                    <i class="fa fa-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>


                                                <li>
                                                    <div class="maincard p-3">
                                                        <div class="thecard">
                                                            <div class="thefront text-center py-4 whatsapp">
                                                                <div class="social-icon">
                                                                    <i class="fa fa-whatsapp"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
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
                                <h5>Kategori</span>
                            </div>
                            <div class="row">
                                <ul>
                                    <a href="">Berita<span> (20)</span></a><br>
                                    <a href="">Pengumuman<span> (10)</span></a><br>
                                    <a href="">Pelatihan<span> (20)</span></a><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row sidebar">
                                <h5>Dinas Terkait</span>
                            </div>
                            <div class="row">
                                <ul>
                                    <a href="">Kemenaker</a><br>
                                    <a href="">Provinsi Papua Barat</a><br>
                                    <a href="">Disnakertrans Papua Barat</a><br>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <div class="row sidebar">
                                <h5>Kategori</span>
                            </div>
                            <div class="row">
                                <ul>
                                    <a href="">Berita</a><br>
                                    <a href="">Pengumuman</a><br>
                                    <a href="">Pelatihan</a><br>
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

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/vendor/php-email-form/validate.js"></script>

<script src="<?php echo base_url(); ?>/assets/frontend/assets/js/main.js"></script>

<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
        e.preventDefault();
    });
</script>