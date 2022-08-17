<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo $url->assets ?>plugins/fontawesome-free/css/all.min.css">
<style>
    .row.border.p-4.rounded.py-5 {
        box-shadow: 0px 3px 4px 0px #dbdbdc;
    }

    #formRegistrasi .error {
        font-size: 15px;
    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Formulir Pembuatan Akun</h2>
                <p>Untuk pengajuan pembuatan Kartu Pencari Kerja Form AK-1 (Kartu Kuning), silakan terlebih dahulu mendaftarkan akun menggunakan NIK, Email, dan Nomor Whatsapp yang aktif.</p>
            </div>

            <div class="row border p-4 rounded py-5">

                <div class="col-md-6 px-3 d-flex justify-content-center align-items-center ">
                    <img class="w-100" src="https://i.imgur.com/uNGdWHi.png" alt="">
                </div>

                <div class="col-md-6 px-4">
                    <?php echo $this->session->flashdata('alert'); ?>
                    <form action="#" method="POST" id="formRegistrasi">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="namalengkap" class="form-label">Nama Lengkap </label>
                                <input type="text" class="form-control w-100" id="namalengkap" required name="namalengkap">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" class="form-control w-100" id="nik" required name="nik">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control w-100" id="email" required name="email">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nohp" class="form-label">Nomor HP (WhatsApp)</label>
                                <input type="number" class="form-control w-100" id="nohp" required name="nohp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group" id="katasandi">
                                    <input class="form-control w-100" id="password" type="password" required name="password">
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="password_confirm" class="form-label">Konfirmasi Kata Sandi </label>
                                <div class="input-group" id="katasandi_konfir">
                                    <input type="password" class="form-control w-100" id="password_confirm" required name="password_confirm">

                                </div>
                                <span id="error-password_confirm" class="errormsg"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button type="submit" id="btnRegistrasiPencaker" class="btn btn-primary text-center w-50">Daftar</button>
                        </div>
                    </form>

                </div>


            </div>

        </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->
<!-- jQuery -->
<script src="<?php echo $url->assets ?>plugins/jquery/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/frontend/assets/js/form-registrasi-custom-js.js"></script>

<script type="text/javascript">
    var baseURL = "<?php echo site_url() ?>";
</script>