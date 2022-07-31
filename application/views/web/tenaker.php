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

<main id="main">
    <section id="visimisi" class="about mt-10">
        <div class="container">
            <div class="section-title">
                <h2>Bidang Tenaga Kerja</h2>
                <p>
                    Informasi mengenai dasar hukum, bidang-bidang, seksi-seksi, dan informasi lainnya terkait bidang tenaga kerja.
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

        </div>
    </section>

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills mt-5">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-5 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <!-- <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/skills.png" class="img-fluid" alt=""> -->
                    <img class="img-fluid" src="https://img.freepik.com/premium-vector/law-firm-flat-vector-illustration-banner-template_128772-835.jpg?w=2000" alt="">
                </div>
                <div class="col-lg-7 pt-4 pt-lg-0 content dasarhukum" data-aos="fade-left" data-aos-delay="100">
                    <h3 class="mt-3">Dasar Hukum</h3>
                    <div class="skills-content">

                        <div class="col-lg-12 mb-2 mt-2">
                            <p>
                                Dasar hukum dibentuknya bidang Tenaga Kerja adalah sebagai berikut:
                            </p>
                            <ol type="1">
                                <li>Undang-Undang Cipta Kerja Nomor 11 Tahun 2020.</li>
                                <li>Peraturan Menteri Ketenagakerjaan Nomor 28 Tahun 2014 tentang Pembuatan dan Pengesahan Peraturan Perusahaan, Pembuatan Dan Pendaftaran Perjanjian Kerja Bersama.</li>
                                <li>Peraturan Bupati Manokwari Nomor 73 Tahun 2017 tentang Retribusi Perpanjangan Izin Mempekerjakan Tenaga Kerja Asing.</li>
                                <li>Peraturan Bupati Nomor 13 Tahun 2017</li>
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

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content">
                        <h3 class="mt-3">Bidang Pelatihan dan Penempatan Angkatan Kerja
                        </h3>
                        <p>
                            Bidang Pelatihan dan Penempatan Tenaga Kerja mempunyai tugas:
                        </p>
                    </div>

                    <div class="accordion-list">

                        <ol type="1">
                            <li>Melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi Bidang Pelatihan Kerja dan Penempatan Kerja;
                            </li>
                            <li>Merumuskan sasaran kegiatan di Bidang Pelatihan Kerja dan Penempatan Kerja;
                            </li>
                            <li>Melakukan pembinaan dan pengaturan perluasan lapangan kerja dan kesempatan kerja bagi tenaga kerja mandiri di pedesaan dan perkotaan; dan
                                .</li>
                            <li>Melaksanakan tugas kedinasan lain sesuai perintah atasan.
                            </li>
                        </ol>
                    </div>

                </div>

                <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo base_url(); ?>/assets/frontend/assets/img/pelatihan.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg bpkt">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 align-items-stretch img" style='background-image: url("<?php echo base_url(); ?>/assets/frontend/assets/img/industrial-relations.jpg");' data-aos="zoom-in" data-aos-delay="150">
                </div>

                <div class="col-lg-8 d-flex flex-column justify-content-center align-items-stretch ">

                    <div class="content">
                        <h3 class="mt-3">Bidang Hubungan Industri dan Syarat-Syarat Kerja</h3>
                        <p>
                            Bidang Hubungan Industri dan Syarat-Syarat Kerja mempunyai tugas:
                        </p>
                    </div>

                    <div class="accordion-list">

                        <ol type="1">
                            <li>Melakukan koordinasi perencanaan, pelaksanaan, pengendalian, bimbingan, konsultasi serta monitoring dan evaluasi di Bidang Hubungan Industrial dan Pembinaan Ketenagakerjaan;
                            </li>
                            <li>Merumuskan sasaran kegiatan di Bidang Hubungan Industrial dan Pembinaan Ketenagakerjaan;
                            </li>
                            <li>Melakukan kajian di Bidang Hubungan Industrial dan Pembinaan Ketenaga kerjaan;
                                .</li>
                            <li>Melakukan fasilitasi dan pengembangan hubungan industrial dan pembinaan ketenagakerjaan;
                            <li>Melaksanakan tugas kedinasan lain sesuai perintah atasan.
                            </li>
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
                        <h3 class="mt-3"> Data Pekerja Asing</h3>

                        <p>
                            Pekerja asing tahun 2022 adalah sebagai berikut:
                        </p>
                    </div>

                    <div class="accordion-list">
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

                <div class="col-lg-4 align-items-stretch order-1 order-lg-2 img" style='background-image: url("<?php echo base_url(); ?>/assets/frontend/assets/img/pekerjaasing.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title mt-4">
                <h2>Galeri</h2>
                <p>Berikut ini adalah beberapa galeri kegiatan bidang transmigrasi.</p>
            </div>

            <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Semua</li>
                <li data-filter=".pelatihankerja">Pelatihan Kerja</li>
                <li data-filter=".bantuan">Bantuan</li>
            </ul>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                    <div class="portfolio-img">
                        <a class="lsb-preview" href="#">
                            <img src="<?php echo base_url(); ?>/assets/frontend/assets/img/tenagakerja/Picture1.png" class="img-fluid">
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                    <a class="lsb-preview" href="#">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture2.png" class="img-fluid"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                    <a class="lsb-preview" href="#">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture6.png" class="img-fluid"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                    <a class="lsb-preview" href="#">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture7.png" class="img-fluid"></div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                    <a class="lsb-preview" href="#">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture8.png" class="img-fluid"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item bantuan">
                    <a class="lsb-preview" href="#">
                        <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture3.png" class="img-fluid"></div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item pelatihankerja">
                    <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture1.png" class="img-fluid" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item bantuan">
                    <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture4.png" class="img-fluid" alt=""></div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item bantuan">
                    <div class="portfolio-img"><img src="<?php echo base_url(); ?>assets/frontend/assets/img/tenagakerja/Picture5.png" class="img-fluid" alt=""></div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->