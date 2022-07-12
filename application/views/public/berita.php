<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('public/template/header'); ?>

<style>
    section#portfolio {
        margin-top: 120px;
        padding-top: 60px !important;
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    body {
        background: #eee;
    }

    .snip1527 {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
        color: #ffffff;
        float: left;
        font-family: 'Lato', Arial, sans-serif;
        font-size: 16px;
        margin: 10px 1%;
        overflow: hidden;
        position: relative;
        text-align: left;
        width: 100%;
    }

    .snip1527 * {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .snip1527 img {
        width: 100%;
        vertical-align: top;
        position: relative;
        object-fit: cover;
        height: 400px;
    }

    .snip1527 figcaption {
        padding: 25px 20px 25px;
        position: absolute;
        bottom: 0;
        z-index: 1;
    }

    .snip1527 figcaption:before {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #700877;
        content: '';
        background: -moz-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
        background: -webkit-linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
        background: linear-gradient(90deg, #700877 0%, #ff2759 100%, #ff2759 100%);
        opacity: 0.8;
        z-index: -1;
    }

    .snip1527 .date {
        background-color: #fff;
        border-radius: 50%;
        color: #700877;
        font-size: 18px;
        font-weight: 700;
        min-height: 48px;
        min-width: 48px;
        padding: 10px 0;
        position: absolute;
        right: 15px;
        text-align: center;
        text-transform: uppercase;
        top: -25px;
    }

    .snip1527 .date span {
        display: block;
        line-height: 14px;
    }

    .snip1527 .date .month {
        font-size: 11px;
    }

    .snip1527 h3,
    .snip1527 p {
        margin: 0;
        padding: 0;
    }

    .snip1527 h3 {
        display: inline-block;
        font-weight: 700;
        letter-spacing: -0.4px;
        margin-bottom: 5px;
    }

    .snip1527 p {
        font-size: 0.8em;
        line-height: 1.6em;
        margin-bottom: 0px;
    }

    .snip1527 a {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        position: absolute;
        z-index: 1;
    }

    .snip1527:hover img,
    .snip1527.hover img {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }

    img {
        border-radius: 5px;
    }

    img {
        border-radius: 5px;
    }

    section#portfolio .row {
        justify-content: center;
    }
</style>
<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Berita</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527">
                        <div class="image"><img src="https://i.imgur.com/sSuJsu8.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <div class="date"><span class="day">28</span><span class="month">Nov</span></div>
                            <h3>
                                Acer Aspire 7 Gaming Laptop</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527">
                        <div class="image"><img src="https://i.imgur.com/qNV4rMU.jpg" alt="pr-sample25" /></div>
                        <figcaption>
                            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
                            <h3>Google May Face Antitrust Case</h3>
                            <p>

                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527 hover">
                        <div class="image"><img src="https://i.imgur.com/E0e8fLV.jpg" alt="pr-sample24" /></div>
                        <figcaption>
                            <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
                            <h3>
                                RedmiBook, Mi Laptops Launch</h3>
                            <p>

                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527">
                        <div class="image"><img src="https://i.imgur.com/sSuJsu8.jpg" alt="pr-sample23" /></div>
                        <figcaption>
                            <div class="date"><span class="day">28</span><span class="month">Nov</span></div>
                            <h3>
                                Acer Aspire 7 Gaming Laptop</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527">
                        <div class="image"><img src="https://i.imgur.com/qNV4rMU.jpg" alt="pr-sample25" /></div>
                        <figcaption>
                            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
                            <h3>Google May Face Antitrust Case</h3>
                            <p>

                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527 hover">
                        <div class="image"><img src="https://i.imgur.com/E0e8fLV.jpg" alt="pr-sample24" /></div>
                        <figcaption>
                            <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
                            <h3>
                                RedmiBook, Mi Laptops Launch</h3>
                            <p>

                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527">
                        <div class="image"><img src="https://i.imgur.com/qNV4rMU.jpg" alt="pr-sample25" /></div>
                        <figcaption>
                            <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
                            <h3>Google May Face Antitrust Case</h3>
                            <p>

                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <figure class="snip1527 hover">
                        <div class="image"><img src="https://i.imgur.com/E0e8fLV.jpg" alt="pr-sample24" /></div>
                        <figcaption>
                            <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
                            <h3>
                                RedmiBook, Mi Laptops Launch</h3>
                            <p>

                                laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>

            </div>
        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('public/template/footer'); ?>
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

</body>

</html>