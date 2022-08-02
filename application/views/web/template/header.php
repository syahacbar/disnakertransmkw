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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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

        section#visimisi {
            padding: 0;
            margin-top: 120px;
            padding-top: 60px;
        }

        .portfolio .portfolio-item .portfolio-info {
            position: absolute;
            right: 0;
            font-size: 42px;
            top: 0;
            color: #fff;
            transition: 0.3s;
            display: flex;
            left: 0;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }

        .portfolio .portfolio-item .portfolio-info i {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .portfolio .portfolio-item .portfolio-info .preview-link,
        .portfolio .portfolio-item .portfolio-info .details-link {
            position: absolute;
            right: 0;
            font-size: 40px;
            top: 0;
            color: #fff;
            transition: 0.3s;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="<?php echo site_url(); ?>">Disnakertrans Manokwari</a></h1>
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