<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<style>
    header#header {
        background: #283a5a !important;
    }

    section#pricing,
    section#contact {
        margin-top: 120px;
    }

    section#pricing .col-lg-12 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    section#pricing .col-lg-12 .box {
        -webkit-box-shadow: 0px 3px 6px 0px rgb(0 0 0 / 10%), 0px 1px 3px 0px rgb(0 0 0 / 8%);
        box-shadow: 0px 3px 6px 0px rgb(0 0 0 / 10%), 0px 1px 3px 0px rgb(0 0 0 / 8%);
    }

    .contact .php-email-form {
        width: 100%;
        border-top: 0;
        border-bottom: 0;
        padding: 30px 0 0 0;
        background: #fff;
        box-shadow: none;
    }

    .why-us .accordion-list li {
        padding: 0;
        background: transparent;
        border-radius: 4px;
    }

    #skills .skills-content li {
        padding: 5px 1px !important;
        line-height: 1.8 !important;
    }

    section#visimisi {
        padding: 0;
        margin-top: 120px;
        padding-top: 60px;
    }

    section#why-us li {
        padding: 5px 0;
        line-height: 1.8;
        margin-top: 0;
    }

    .why-us .content p {
        color: #444444;
        font-size: 16px;
    }

    section {
        padding: 0;
        overflow: hidden;
    }

    .why-us .content {
        padding: 20px 10px 0 100px;
    }

    .why-us .accordion-list {
        padding: 0 100px 19px 100px;
    }

    .bpkt,
    .pkt {
        background-color: #fff;
    }

    ol li::marker {
        color: #47b2e4;
        font-weight: bold;
    }

    .skills .content h3 {
        font-weight: 400;
        font-size: 34px;
        color: #37517e;
    }

    .content h3 {
        font-weight: 400;
        font-size: 34px;
        color: #fff !important;
        background-color: #37517e;
        padding: 10px 20px;
        -webkit-clip-path: polygon(0% 0%, 95% 0, 100% 50%, 100% 100%, 0% 100%);
        clip-path: polygon(0% 0%, 95% 0, 100% 50%, 100% 100%, 0% 100%);
    }
</style>
</head>

<main id="main">
    <section id="visimisi" class="about mt-10">
        <div class="container">
            <div class="section-title">
                <h2>Bidang Transmigrasi</h2>
                <p>
                    Informasi mengenai dasar hukum, bidang-bidang, seksi-seksi, dan informasi lainnya terkait bidang transmigrasi.
                </p>
            </div>
        </div>
    </section>

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills mt-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <img class="img-fluid" src="<?php echo base_url(); ?>/assets/frontend/assets/img/low.png">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0 content dasarhukum" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="mt-3">Dasar Hukum</h3>
                    <div class="skills-content">

                        <div class="col-lg-12 mb-2 mt-2">
                            <p>
                                Dasar hukum dibentuknya bidang Transmigrasi adalah sebagai berikut:
                            </p>
                            <ol>
                                <li>Surat Keputusan Kemendes, PDT, dan Transmigrasi RI Nomor 132 Tahun 2016.</li>
                                <li>Permendagri Nomor 90 Tahun 2019.</li>
                                <li>Perbup Nomor 13 Tahun 2017 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi serta Tata Kerja Dinas Kabupaten Manokwari.</li>
                                <li>Surat Keputusan Bupati Nomor 410/412 Tahun 2021.</li>
                            </ol>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg bp2kt">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3 class="mt-3">Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi</h3>
                        <p>
                            Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi mempunyai tugas:
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ol type="1">
                            <li>
                                Melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi serta monitoring dan evaluasi di Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi; </li>
                            <li>
                                Merumuskan sasaran kegiatan di Bidang Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi;
                            </li>
                            <li>Melaksanakan penyuluhan kepada masyarakat untuk bertransmigrasi dan penduduk asli kawasan transmigrasi; </li>
                            <li>Melakukan pemantauan hasil seleksi calon transmigran; dan </li>
                            <li>Melaksanakan tugas kedinasan lain sesuai perintah atasan </li>

                        </ol>
                    </div>

                </div>

                <div class="col-lg-4 d-flex align-items-center">
                    <img class="w-100" src="<?php echo base_url(); ?>/assets/frontend/assets/img/develpment-planning.png">
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg bpkt">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 align-items-stretch img" style="background-image: url(<?php echo base_url(); ?>/assets/frontend/assets/img/develop.png);" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch ">

                    <div class="content">
                        <h3 class="mt-3">Bidang Pengembangan Kawasan Transmigrasi</h3>
                        <p>
                            Bidang Pengembangan Kawasan Transmigrasi mempunyai tugas:
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ol type="1">
                            <li>Melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi serta monitoring dan evaluasi di Bidang Pengembangan Kawasan Transmigrasi;</li>
                            <li>Merumuskan sasaran kegiatan di Bidang Pengembangan Kawasan Transmigrasi; </li>
                            <li>Melakukan perencanaan teknis tata ruang satuan pemukiman transmigrasi; </li>
                            <li>Melakukan pembebasan lahan transmigrasi yang meliputi status tanah, sertifikasi lahan, pengukuran dan pembagian lahan transmigrasi;</li>
                            <li>Melakukan koordinasi dan fasilitasipelaksanaan pekerjaan pembukaan lahan; dan </li>
                            <li>Melaksanakan tugas kedinasan lain sesuai perintah atasan. </li>

                        </ol>
                    </div>

                </div>


            </div>

        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3 class="mt-3">Seksi Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi</h3>

                        <p>
                            Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi (P2KT), terdiri atas 3 seksi, yakni ;
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse mt-3" data-bs-target="#p2kt-1"><span>01</span>Seksi Perencanaan dan Pencadangan Tanah Transmigrasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="p2kt-1" class="collapse show" data-bs-parent=".accordion-list">
                                    <div id="p2kt" class="carousel carousel-dark slide mt-3" data-bs-ride="carousel">
                                        <div class="carousel-indicators">
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="5" aria-label="Slide 6"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="7" aria-label="Slide 8"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="8" aria-label="Slide 9"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="9" aria-label="Slide 10"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="10" aria-label="Slide 11"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="11" aria-label="Slide 12"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="12" aria-label="Slide 13"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="13" aria-label="Slide 14"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="14" aria-label="Slide 15"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="15" aria-label="Slide 16"></button>
                                            <button type="button" data-bs-target="#p2kt" data-bs-slide-to="16" aria-label="Slide 17"></button>
                                        </div>
                                        <div class="carousel-inner">
                                            <div class="carousel-item active" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide1.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide2.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide3.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide4.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide5.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide6.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide7.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide8.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide9.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide10.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide11.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide12.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide13.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide14.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide15.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide16.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                            <div class="carousel-item" data-bs-interval="2000">
                                                <a class="lsb-preview" href="#">
                                                    <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/p2kt/Slide17.PNG" class="d-block w-100">
                                                </a>
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#p2kt" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#p2kt" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#p2kt-2" class="collapsed mt-3"><span>02</span>Seksi Pembangunan Transmigrasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="p2kt-2" class="collapse" data-bs-parent=".accordion-list">
                                    <p>Kepala Seksi Pembangunan Permukiman Transmigrasi mempunyai tugas membantu Kepala Bidang dalam merencanakan, melaksanakan dan melaporkan kegiatan Seksi Pembangunan Permukiman Transmigrasi. Dalam menjalankan tugas, Kepala Seksi Pembangunan Permukiman Transmigrasi menyelenggarakan fungsi:
                                    <ol type="a">
                                        <li>Menyusun rencana kerja seksi;</li>
                                        <li>Menyiapkan bahan perumusan kebijakan;</li>
                                        <li>Menyiapkan pelaksanaan kebijakan, standarisasi;</li>
                                        <li>Merencanakan bimbingan teknis dan supervisi;</li>
                                        <li>Merencanakan pelaksanaan monitoring dan evaluasi bidang.</li>
                                    </ol>

                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#p2kt-3" class="collapsed mt-3"><span>03</span>Seksi Persebaran Penduduk<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="p2kt-3" class="collapse" data-bs-parent=".accordion-list">
                                    <p>
                                        Kepala Seksi Penataan Persebaran Penduduk mempunyai tugas membantu Kepala Bidang dalam merencanakan, melaksanakan dan melaporkan kegiatan Seksi Penataan Persebaran Penduduk. Dalam menjalankan tugas, Kepala Seksi Penataan Persebaran Penduduk menyelenggarakan fungsi:
                                    <ol>
                                        <li>Menyusun rencana kerja seksi;</li>
                                        <li>Menyiapkan bahan perumusan kebijakan;</li>
                                        <li>Menyiapkan pelaksanaan kebijakan dan standarisasi;</li>
                                        <li>Merencanakan bimbingan teknis dan supervisi;</li>
                                        <li>Merencanakan pelaksanaan monitoring dan evaluasi di bidang pelayanan perpindahan;</li>
                                        <li>Menyiapkan calon transmigran dari penduduk setempat;</li>
                                        <li>Menyiapkan pelaksanaan penempatan, pemetaan, adaptasi dan administrasi Barang Milik Negara (BMN).</li>
                                    </ol>

                                    </p>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>

                <div class="col-lg-4 align-items-stretch order-1 order-lg-2 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-delay="150">
                    <img class="img w-100" src="<?php echo base_url(); ?>/assets/frontend/assets/img/planning.png">
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg pkt">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-center justify-content-center">
                    <img class="w-100" src="<?php echo base_url(); ?>/assets/frontend/assets/img/kawasan.gif" );>
                </div>

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch">

                    <div class="content">
                        <h3 class="mt-3">Seksi Bidang Pengembangan Kawasan Transmigrasi (PKT)</h3>

                        <p>
                            Bidang Pengembangan Kawasan Transmigrasi (PKT) terdiri atas 3 seksi, yakni ;
                        </p>
                    </div>

                    <div class="accordion-list">
                        <ul>
                            <li>
                                <a data-bs-toggle="collapse" class="collapse mt-3" data-bs-target="#pkt1"><span>01</span>Seksi Pendaftaran dan Seleksi Transmigrasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="pkt1" class="collapse show" data-bs-parent=".accordion-list">
                                    <p>
                                        Seksi Pendaftaran Seleksi dan Penempatan Transmigrasi mempunyai tugas pokok melaksanakan pendaftaran seleksi dan penempatan transmigrasi dengan beberapa fungsi, diantaranya:
                                    <ol type="a">
                                        <li>penyusunan rencana kerja pendaftaran, seleksi dan penempatan transmigran;</li>
                                        <li>pernyiapan aparatur, peralatan dan perlengkapan serta pendanaan untuk pelaksanaan tugas dan kegiatan seksi pendaftaran, seleksi dan penempatan transmigrasi;</li>
                                        <li>pemutahiran data calon transmigran lokal dan transmigrasi umum;</li>
                                        <li>sosialisasi dan penyuluhan transmigrasi;</li>
                                    </ol>
                                    </p>
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#pkt2" class="collapsed mt-3"><span>02</span>Seksi Pengembangan Kawasan Transmigrasi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="pkt2" class="collapse" data-bs-parent=".accordion-list">
                                </div>
                            </li>

                            <li>
                                <a data-bs-toggle="collapse" data-bs-target="#pkt3" class="collapsed mt-3"><span>03</span>Seksi Pembinaan Penduduk<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                <div id="pkt3" class="collapse" data-bs-parent=".accordion-list">
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg mt-5 mb-5">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-4">
                <h2>Kawasan Transmigrasi</h2>
                <p>Kawasan transmigrasi lokal yang telah dikembangkan oleh Pemerintah Kabupaten Manokwari terdiri atas 4 satuan kawasan pemukiman. Dua diantaranya telah ada dan dua lainnya sedang dikembangkan.</p>
            </div>

            <div class="row mb-4">
                <div class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">Satuan Pemukiman yang Telah Ada</a></h4>
                        <p>Dua Satuan pemukiman yang telah ada yakni Prafi dan Masni.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">Satuan pemukiman yang Dikembangkan</a></h4>
                        <p>Dua satuan pemukiman yang dikembangkan adalah Sidey dan Pantura.</p>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">Unit Pemukiman Transmigrasi (UPT)</a></h4>
                        <p>Dua unit pemukiman transmigrasi, yakni Meyes (54 KK) dan Aurmios (75 KK).</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Galeri</h2>
                <p>Berikut ini adalah beberapa galeri kegiatan bidang transmigrasi.</p>
            </div>

            <?php
            // $tenaker = directory_map('./assets/frontend/assets/img/tenagakerja', 1);
            $teknis = directory_map('./assets/frontend/assets/img/transmigrasi/rapatteknis', 1);
            $koordinasi = directory_map('./assets/frontend/assets/img/transmigrasi/rapatkoordinasi', 1);
            $penyuluhan = directory_map('./assets/frontend/assets/img/transmigrasi/penyuluhan', 1);
            ?>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".rapatteknis">Rapat Teknis</li>
                <li data-filter=".rapatkoordinasi">Rapat Koordinasi</li>
                <li data-filter=".penyuluhan">Kegiatan Penyuluhan</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <?php foreach ($teknis as $tek) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item rapatteknis">
                        <div class="portfolio-img"><img src="<?php echo base_url('assets/frontend/assets/img/transmigrasi/rapatteknis/') . $tek; ?>" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <a href="<?php echo base_url('assets/frontend/assets/img/transmigrasi/rapatteknis/') . $tek; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($koordinasi as $kor) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item rapatkoordinasi">
                        <div class="portfolio-img"><img src="<?php echo base_url('assets/frontend/assets/img/transmigrasi/rapatkoordinasi/') . $kor; ?>" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <a href="<?php echo base_url('assets/frontend/assets/img/transmigrasi/rapatkoordinasi/') . $kor; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link">
                                <i class="bi bi-zoom-in"></i>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                <?php foreach ($penyuluhan as $suluh) : ?>
                    <div class="col-lg-4 col-md-6 portfolio-item penyuluhan">
                        <div class="portfolio-img"><img src="<?php echo base_url('assets/frontend/assets/img/transmigrasi/penyuluhan/') . $suluh; ?>" class="img-fluid" alt=""></div>
                        <div class="portfolio-info">
                            <a href="<?php echo base_url('assets/frontend/assets/img/transmigrasi/penyuluhan/') . $suluh; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->