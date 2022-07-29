<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
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
        background-color: #f9f9fa;
    }

    .flex {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
    }

    @media (max-width: 991.98px) {
        .padding {
            padding: 1.5rem;
        }
    }

    @media (max-width: 767.98px) {
        .padding {
            padding: 1rem;
        }
    }

    .padding {
        padding: 5rem;
    }

    .card {
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
    }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid #d2d2dc;
        border-radius: 0;
    }

    .card .card-title {
        color: #000000;
        margin-bottom: 0.625rem;
        text-transform: capitalize;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .card .card-description {
        margin-bottom: 0.875rem;
        font-weight: 400;
        color: #76838f;
    }

    .accordion .card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .accordion .card {
        margin-bottom: 0.75rem;
        box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
        border-radius: 0.25rem;
        border: none;
    }

    .accordion .card .card-header {
        background-color: transparent;
        border: none;
        padding: 10px 0;
    }

    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }

    .accordion .card .card-header * {
        font-weight: 400;
        font-size: 1rem;
    }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important;
    }

    .accordion .card .card-header a {
        display: block;
        color: inherit;
        text-decoration: none;
        font-size: 20px;
        position: relative;
        -webkit-transition: color 0.5s ease;
        -moz-transition: color 0.5s ease;
        -ms-transition: color 0.5s ease;
        -o-transition: color 0.5s ease;
        transition: color 0.5s ease;
        padding-right: 1.5rem;
        font-weight: bold;
    }

    .accordion .card .card-header * {
        font-weight: 400;
        font-size: 1rem;
    }

    .accordion .card .card-header a[aria-expanded="false"]:before {
        content: "\f067";
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    .accordion .card .card-header a[aria-expanded="true"]:before {
        content: "\f068";
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
    }

    .accordion .card .card-header a:before {
        position: absolute;
        right: 7px;
        top: 0;
        font-size: 18px;
        display: block;
        font-family: FontAwesome;

        display: inline-block;
        padding-right: 3px;
        font-size: 0.756em;
        color: #405189;
    }

    .carousel-caption.d-none.d-md-block {
        width: 100%;
        margin: 0;
        padding: 5px 20px;
        left: 0;
        background-color: rgb(0 0 0 / 46%);
        bottom: 0;
    }

    .carousel-item img {
        width: 100%;
    }

    .collapse li {
        list-style: none;
    }

    .collapse ul {
        padding: 0 10px;
    }

    i.ri-check-double-line {
        color: #007bff;
    }
</style>
</head>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="visimisi" class="about visimisi">
        <div class="container">
            <div class="section-title">
                <h2>Bidang Transmigrasi</h2>
                <p>
                    Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari telah merumuskan tujuan dan sasaran strategis yang merupakan bagian integral dalam proses Rencana Strategis Dinas Tenaga Kerja Dan Transmigrasi Kabupaten Manokwari Tahun 2021 – 2025 untuk mencapai visi.
                </p>
            </div>

            <div class="col-lg-12 mt-4 mb-4">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Perhatian!</h4>
                    <p>Perbup Restribusi Imta telah berganti nama menjadi TPTKA sesuai Peraturan Pemerintah Nomor 34 Tahun 2021 dan Peraturan Daerah masih dibahas oleh Balegda Tingkat Provinsi Papua Barat.</p>
                    <hr>
                    <!-- <p class="mb-0">.</p> -->
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-4">
                                <div class="accordion" id="accordion" role="tablist">
                                    <!-- Dasar Hukum -->
                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-1">
                                            <h6 class="mb-0">
                                                <a data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1" data-abc="true" class="collapsed">
                                                    Dasar Hukum
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-1" class="collapse" role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion">
                                            <div class="row">
                                                <div class="col-lg-12 mb-2 mt-2">
                                                    <p>
                                                        Dasar hukum dibentuknya bidang Tenaga Kerja adalah sebagai berikut:
                                                    </p>
                                                    <ul>
                                                        <li><i class="ri-check-double-line"></i> Undang-Undang Cipta Kerja Nomor 11 Tahun 2020.</li>
                                                        <li><i class="ri-check-double-line"></i> Peraturan Menteri Ketenagakerjaan Nomor 28 Tahun 2014 tentang Pembuatan dan Pengesahan Peraturan Perusahaan, Pembuatan Dan Pendaftaran Perjanjian Kerja Bersama.</li>
                                                        <li><i class="ri-check-double-line"></i> Peraturan Bupati Manokwari Nomor 73 Tahun 2017 tentang Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing.</li>
                                                        <li><i class="ri-check-double-line"></i> Peraturan Bupati Nomor 13 Tahun 2017</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-2">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2" data-abc="true">
                                                    Bidang Pelatihan dan Penempatan Tenaga Kerja
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>
                                                        Bidang Pelatihan dan Penempatan Tenaga Kerja mempunyai tugas:
                                                    </p>
                                                    <ul>
                                                        <li><i class="ri-check-double-line"></i> melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi Bidang Pelatihan Kerja dan Penempatan Kerja;
                                                        </li>
                                                        <li><i class="ri-check-double-line"></i> merumuskan sasaran kegiatan di Bidang Pelatihan Kerja dan Penempatan Kerja;
                                                        </li>
                                                        <li><i class="ri-check-double-line"></i> melakukan pembinaan dan pengaturan perluasan lapangan kerja dan kesempatan kerja bagi tenaga kerja mandiri di pedesaan dan perkotaan; dan
                                                            .</li>
                                                        <li><i class="ri-check-double-line"></i> melaksanakan tugas kedinasan lain sesuai perintah atasan.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mt-3">
                                                    <h5>Seksi Bidang Perencanaan dan Pembangunan Kawasan Transmigrasi</h5>
                                                    <div class="row">
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Perencanaan dan Pencadangan Tanah Transmigrasi</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pembangunan Transmigrasi</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Persebaran Penduduk</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-3">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3" data-abc="true">
                                                    Bidang Hubungan Industri dan Syarat Syarat Kerja
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-3" class="collapse" role="tabpanel" aria-labelledby="heading-3" data-parent="#accordion">
                                            <div class="row">
                                                <div class="col-lg-12 mb-2 mt-2">
                                                    <p>
                                                        Bidang Hubungan Industri dan Syarat Syarat Kerja mempunyai tugas:
                                                    </p>
                                                    <ul>
                                                        <li><i class="ri-check-double-line"></i> melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi serta monitoring dan evaluasi di Bidang Hubungan Industrial dan Pembinaan Ketenagakerjaan;
                                                        </li>
                                                        <li><i class="ri-check-double-line"></i> merumuskan sasaran kegiatan di Bidang Hubungan Industrial dan Pembinaan Ketenagakerjaan;
                                                        </li>
                                                        <li><i class="ri-check-double-line"></i> melakukan kajian di Bidang Hubungan Industrial dan Pembinaan Ketenaga kerjaan;
                                                            .</li>
                                                        <li><i class="ri-check-double-line"></i> melakukan fasilitasi dan pengembangan hubungan industrial dan pembinaan ketenagakerjaan;
                                                        <li><i class="ri-check-double-line"></i> melaksanakan tugas kedinasan lain sesuai perintah atasan.
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mt-3">
                                                    <h5>Seksi Bidang Pengembangan Kawasan Transmigrasi</h5>
                                                    <div class="row">
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pendaftaran dan Seleksi Transmigrasi</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pengembangan Kawasan Transmigrasi</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pembinaan Penduduk</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-5">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5" data-abc="true">
                                                    Data Pekerja Asing
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion">
                                            <div class="row">
                                                <p>Pekerja asing tahun 2022 adalah sebagai berikut:</p>
                                                <div class="col-lg-12 mb-2 mt-2">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">No.</th>
                                                                <th scope="col">Jumlah</th>
                                                                <th scope="col">Status</th>
                                                                <th scope="col">Perusahan</th>
                                                                <th scope="col">Keerangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>65 orang</td>
                                                                <td>Engineer</td>
                                                                <td>PT. SDIC PAPUA CEMENT INDONESIA</td>
                                                                <td>PERIODE JUNI 2022</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>22 Orang</td>
                                                                <td>Penyuluh Rohani</td>
                                                                <td>MAJELIS UMUM/SINODE GPKAI</td>
                                                                <td>PERIODE JUNI 2022</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-4">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" data-abc="true">
                                                    Galeri Bidang Tenaga Kerja
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion">
                                            <div class="row">
                                                <div id="transmigrasi" class="carousel slide" data-ride="carousel">
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#transmigrasi" data-slide-to="0" class="active"></li>
                                                        <li data-target="#transmigrasi" data-slide-to="1"></li>
                                                        <li data-target="#transmigrasi" data-slide-to="2"></li>
                                                        <li data-target="#transmigrasi" data-slide-to="2"></li>
                                                        <li data-target="#transmigrasi" data-slide-to="2"></li>
                                                        <li data-target="#transmigrasi" data-slide-to="2"></li>
                                                        <li data-target="#transmigrasi" data-slide-to="2"></li>
                                                    </ol>
                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture1.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>RAPAT SURVEY AWAL RENCANA SATUAN KAWASAN PEMUKIMAN TEKNISD DIDISTRIK MANOKWARI UTARA TAHUN 2021
                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture2.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>RAPAT KORDINASI TEKNIS BIDANG KETRANSMIGRASIAN TAHUN 2020
                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture3.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>RAPAT KORDINASI TEKNIS BIDANG KETRANSMIGRASIAN TAHUN 2020
                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture4.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>RAPAT KORDINASI TEKNIS BIDANG KETRANSMIGRASIAN TAHUN 2020
                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture5.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>KEGIATAN PENYULUHAN PERTANIAN DAN BANTUAN PERALATAN DI SP AURMIOS TAHUN 2021

                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture6.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>KEGIATAN PENYULUHAN PERTANIAN DAN BANTUAN PERALATAN DI SP AURMIOS TAHUN 2021

                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                        <div class="carousel-item">
                                                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/transmigrasi/Picture7.png">
                                                            <div class="carousel-caption d-none d-md-block">
                                                                <h5>KEGIATAN PENYULUHAN PERTANIAN DAN BANTUAN PERALATAN DI SP AURMIOS TAHUN 2021

                                                                </h5>
                                                                <p>...</p>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <a class="carousel-control-prev" href="#transmigrasi" role="button" data-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#transmigrasi" role="button" data-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header" role="tab" id="heading-5">
                                            <h6 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5" data-abc="true">
                                                    Arsip File
                                                </a>
                                            </h6>
                                        </div>
                                        <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion">
                                            <div class="row">
                                                <div class="col-lg-12 mb-2 mt-2">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">No.</th>
                                                                <th scope="col">Nama File</th>
                                                                <th scope="col">Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>File Powerpoint Bidang Tenaga Kerja - Bagian 1</td>
                                                                <td>
                                                                    <a href="<?php echo base_url('uploads/bidang-bidang/tenagakerja/'); ?>Paparan.pptx" target="_blank" class="btn btn-info btn-icon-split ">Unduh File</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>File Powerpoint Bidang Tenaga Kerja - Bagian 2</td>
                                                                <td>
                                                                    <a href="<?php echo base_url('uploads/bidang-bidang/tenagakerja/'); ?>Paparan1.pptx" target="_blank" class="btn btn-info btn-icon-split ">Unduh File</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12 mt-3">
                                                    <h5>Seksi Bidang Pengembangan Kawasan Transmigrasi</h5>
                                                    <div class="row">
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pendaftaran dan Seleksi Transmigrasi</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pengembangan Kawasan Transmigrasi</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 ">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <h6 class="">Seksi Pembinaan Penduduk</h6>
                                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>




<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
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
</body>

</html>