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

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
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
                             <?php if (setting('google_recaptcha_enabled') == '1') : ?>

                                <script src="https://www.google.com/recaptcha/api.js" async defer></script>

                                <div class="form-group">
                                  <div class="g-recaptcha" data-sitekey="<?php echo setting('google_recaptcha_sitekey') ?>"></div>
                                  <?php echo form_error('g-recaptcha-response', '<span style="display:block" class="error invalid-feedback">', '</span>'); ?>
                                </div>

                              <?php endif ?>
                        </div>
                        <div class="d-flex mt-4">
                            <button type="submit" id="btnRegistrasiPencaker" class="btn btn-primary w-50">Daftar</button>
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

<script type="text/javascript">
    $(document).ready(function() {
        $("#formRegistrasi").validate({
            rules: {
                namalengkap: {
                    required: true
                },
                nik: {
                    required: true,
                    minlength: 16,
                    maxlength: 16
                },
                email: {
                    required: true,
                    email: true
                },
                nohp: {
                    required: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                password_confirm: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },

            },

            messages: {
                namalengkap: {
                    required: "<span class='text-danger'><small><em>Nama Lengkap Wajib Diisi</em></samll></span>"
                },
                nik: {
                    required: "<span class='text-danger'><small><em>NIK Wajib Diisi</em></samll></span>",
                    minlength: "<span class='text-danger'><small><em>NIK Minimal 16 Karakter</em></samll></span>",
                    maxlength: "<span class='text-danger'><small><em>NIK Maksimal 16 Karakter</em></samll></span>"
                },
                email: {
                    required: "<span class='text-danger'><small><em>Email Wajib Diisi</em></samll></span>",
                    email: "<span class='text-danger'><small><em>Format Email Salah. Harus mengandung @ dan . Contoh: emailsaya@gmail.com",
                },
                nohp: {
                    required: "<span class='text-danger'><small><em>Nomor HP Wajib Diisi</em></samll></span>"
                },
                password: {
                    required: "<span class='text-danger'><small><em>Kata Sandi Wajib Diisi</em></samll></span>",
                    minlength: "<span class='text-danger'><small><em>Kata sandi minimal 6 karakter</em></samll></span>"
                },
                password_confirm: {
                    required: "<span class='text-danger'><small><em>Konfirmasi kata sandi tidak sama. Periksa kembali!</em></samll></span>",
                    minlength: "<span class='text-danger'><small><em>Kata sandi minimal 6 karakter</em></samll></span>",
                    equalTo: "<span class='text-danger'><small><em>Konfirmasi kata sandi tidak sama. Periksa kembali!</em></samll></span>"
                }
            },

            submitHandler: function(form) {
                if (grecaptcha.getResponse() == ""){
                    Swal.fire({
                        icon: 'warning',
                        text: 'Anda wajib mencentang Captcha',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'OK'
                    })
                } else {
                    $.ajax({
                        url: "<?php echo site_url('web/account_registration') ?>",
                        type: "POST",
                        data: $('#formRegistrasi').serialize(),
                        dataType: "JSON",
                        success: function(data) {
                            if (data.status) //if success close modal and reload ajax table
                            {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Anda berhasil melakukan registrasi akun Pencaker',
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "<?php echo site_url('login'); ?>";
                                    }
                                    return false;
                                })
                            } else {
                                Swal.fire({
                                    icon: 'warning',
                                    html: data.msg,
                                    confirmButtonColor: '#3085d6',
                                    confirmButtonText: 'OK'
                                })
                            }

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert('Error registration account');
                        }
                    });
                }
            }

        });
    });
</script>