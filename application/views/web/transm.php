<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo $page->title ?> | <?php echo $page->site_title ?> </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>/assets/frontend/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/frontend/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/frontend/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url(); ?>/assets/frontend/favicon/site.webmanifest">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>/assets/frontend/assets/css/style.css" rel="stylesheet">

    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <!-- Lightbox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/lightbox-previewer/src/index.css" />
    <script src="<?php echo base_url(); ?>/assets/plugins/lightbox-previewer/dist/img-previewer.min.js"></script>

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

        /* .dasarhukum {
            box-shadow: 0px 0 25px 0 rgb(0 0 0 / 10%);
            padding: 50px 30px;
            transition: all ease-in-out 0.4s;
            background: #fff;
        } */

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

<body>
 
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="<?php echo site_url(); ?>">Disnakertrans Manokwari</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="<?php echo base_url(); ?>/assets/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto <?php echo ($page->menu == 'beranda') ? 'active' : '' ?>" href="<?php echo site_url(); ?>">Beranda</a></li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'profil') ? 'active' : '' ?>" href="<?php echo site_url(); ?>web/profil"><span>Profil</span></a></li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'bidang') ? 'active' : '' ?>" href="#"><span>Bidang-Bidang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>web/transmigrasi">Bidang Transmigrasi</a></li>
                            <li><a href="<?php echo site_url(); ?>web/tenagakerja">Bidang Tenaga Kerja</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'informasi') ? 'active' : '' ?>" href="#"><span>Informasi</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>web/berita">Berita</a></li>
                            <li><a href="<?php echo site_url(); ?>web/pengumuman">Pengumuman</a></li>
                            <li><a href="<?php echo site_url(); ?>web/pelatihan">Pelatihan</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="<?php echo ($page->menu == 'layanan') ? 'active' : '' ?>" href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="<?php echo site_url(); ?>web/registrasi">Kartu Pencari Kerja (Kartu Kuning)</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto <?php echo ($page->menu == 'kontak') ? 'active' : '' ?>" href="#">Kontak</a></li>
                    <li><a target="_blank" class="getstarted scrollto" href="<?php echo site_url('dashboard'); ?>">Masuk</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

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
                        <!-- <img src="<?php // echo base_url(); 
                                        ?>/assets/frontend/assets/img/skills.png" class="img-fluid" alt=""> -->
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
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide1.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide2.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide3.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide4.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide5.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide6.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide7.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide8.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide9.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide10.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide11.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide12.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide13.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide14.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide15.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide16.png" class="d-block w-100">
                                                    </a>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="2000">
                                                    <a class="lsb-preview" href="#">
                                                        <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/p2kt/Slide17.png" class="d-block w-100">
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
                        <img class="w-100 align-items-stretch" src="https://cdn.dribbble.com/users/3683190/screenshots/6613666/skycap_maps_for_simulation.gif">
                    </div>

                    <!-- <div class="col-lg-4 align-items-stretch img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div> -->
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
                                            Seksi Pendaftaran Seleksi dan Penempatan Transmigrasi mempunyai tugas pokok melaksanakan pendaftaran seleksi dan penempatan transmigrasi. Dalam melaksanakan tugas Seksi Pendaftaran Seleksi dan Penempatan Transmigrasi menyelenggarakan fungsi:
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
                                        <!-- <p>Kepala Seksi Pembangunan Permukiman Transmigrasi mempunyai tugas membantu Kepala Bidang dalam merencanakan, melaksanakan dan melaporkan kegiatan Seksi Pembangunan Permukiman Transmigrasi. Dalam menjalankan tugas, Kepala Seksi Pembangunan Permukiman Transmigrasi menyelenggarakan fungsi:
                                        <ol type="a">
                                            <li>Menyusun rencana kerja seksi;</li>
                                            <li>Menyiapkan bahan perumusan kebijakan;</li>
                                            <li>Menyiapkan pelaksanaan kebijakan, standarisasi;</li>
                                            <li>Merencanakan bimbingan teknis dan supervisi;</li>
                                            <li>Merencanakan pelaksanaan monitoring dan evaluasi bidang.</li>
                                        </ol>

                                        </p> -->
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#pkt3" class="collapsed mt-3"><span>03</span>Seksi Pembinaan Penduduk<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="pkt3" class="collapse" data-bs-parent=".accordion-list">
                                        <!-- <p>
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

                                        </p> -->
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

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">Semua</li>
                    <li data-filter=".rapatteknis">Rapat Teknis</li>
                    <li data-filter=".rapatkoordinasi">Rapat Koordinasi</li>
                    <li data-filter=".penyuluhan">Kegiatan Penyuluhan</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item rapatteknis">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture1.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item penyuluhan">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture5.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item rapatteknis">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture1.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item rapatkoordinasi">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture4.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item penyuluhan">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture6.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item rapatteknis">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture1.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item rapatkoordinasi">
                        <div class="portfolio-img">
                            <a class="lsb-preview" href="#">
                                <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture2.png" class="img-fluid w-100">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item rapatkoordinasi">
                    <div class="portfolio-img">
                        <a class="lsb-preview" href="#">
                            <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture3.png" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item penyuluhan">
                    <div class="portfolio-img">
                        <a class="lsb-preview" href="#">
                            <img src="<?php echo base_url(); ?>assets/frontend/assets/img/transmigrasi/Picture7.png" class="img-fluid w-100">
                        </a>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Disnakertrans Manokwari</h3>
                        <p>
                            Jl. Percetakan Negara<br>
                            Kel. Sanggeng, Kec. Manokwari Barat<br>
                            Kab. Manokwari, Prov. Papua Barat <br><br>
                            <strong>Telp:</strong> 0986-211934, 0986-211738<br>
                            <strong>Email:</strong> info@disnakertransmkw.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Informasi</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Berita</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pengumuman</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Pelatihan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Link Terkait</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://kemnaker.go.id/">Kemenaker</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://papuabaratprov.go.id/">Provinsi Papua Barat</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://disnakertrans.papuabaratprov.go.id/">Disnakertrans Papua Barat</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.manokwarikab.go.id">Pemkab. Manokwari</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Lebih Dekat Dengan Kami</h4>
                        <p>Tetap dekat dan mendapat informasi-informasi terbaru dari kami melalui media sosial kami</p>
                        <div class="social-links mt-3">
                            <a target="_blank" href="https://facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a target="_blank" href="https://twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a target="_blank" href="https://youtube.com" class="youtube"><i class="bx bxl-youtube"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                Copyright &copy; 2022 <strong><span>Disnakertrans Manokwari</span></strong>
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://manokwariweb.com/">ManokwariWeb</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Dropzone JS -->
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>


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
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $('.collapse').collapse()
    </script>

    <script type="text/javascript">
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener("click", function(e) {
            e.preventDefault();
        });
    </script>

    <script>
        const myViewer = new ImgPreviewer('.lsb-preview');
    </script>
</body>

</html>