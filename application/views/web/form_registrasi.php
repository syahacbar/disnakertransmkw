<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<style>
    .row.border.p-4.rounded.py-5 {
        box-shadow: 0px 3px 4px 0px #dbdbdc;
    }

    span.errormsg {
        font-style: italic;
        color: red;
        font-size: 11px;
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
                    <form action="#" id="formRegistrasi">
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="namalengkap" class="form-label">Nama Lengkap </label>
                                <input type="text" class="form-control" id="namalengkap" name="namalengkap">
                                <span id="error-namalengkap" class="errormsg"></span>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="number" class="form-control" id="nik" name="nik">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="nohp" class="form-label">Nomor HP (WhatsApp)</label>
                                <input type="number" class="form-control" id="nohp" name="nohp">
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3 col-md-12">
                                <label for="password_confirm" class="form-label">Konfirmasi Kata Sandi </label>
                                <input type="password" class="form-control" id="password_confirm" name="password_confirm">
                                <span id="error-password_confirm" class="errormsg"></span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <button type="button" id="btnRegistrasiPencaker" class="btn btn-primary text-center w-50">Daftar</button>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> -->

<script type="text/javascript">
    $(document).ready(function() {
        $('#btnRegistrasiPencaker').click(function() {
            var namalengkap = $('#namalengkap').val();
            var nik = $('#nik').val();
            var email = $('#email').val();
            var nohp = $('#nohp').val();
            var password = $('#password').val();
            var password_confirm = $('#password_confirm').val();

            if(namalengkap=='' || namalengkap==null)
            {
                $('#error-namalengkap').html("Nama Lengkap Wajib Diisi");
            }

            if(nik=='' || nik==null)
            {
                $('#error-nik').html("NIK Wajib Diisi");
            }
            //dan seterusnya smpai di password konfirm
            if(password=='' || password==null)
            {
                $('#error-password').html("Kata Sandi Wajib Diisi");
            } 
            else {
                if(password!=password_confirm)
                {
                    $('#error-password_confirm').html("Konfirmasi kata sandi tidak sama. Periksa kembali!");
                }
                    
            }


            // $.ajax({
            //     url: "<?php //echo site_url('web/registration_account') ?>",
            //     type: "POST",
            //     data: $('#formRegistrasi').serialize(),
            //     dataType: "JSON",
            //     success: function(data) {
            //         if (data.status) //if success close modal and reload ajax table
            //         {
            //             Swal.fire({
            //                 icon: 'success',
            //                 title: 'Berhasil',
            //                 text: 'Anda berhasil melakukan registrasi akun Pencaker',
            //                 confirmButtonColor: '#3085d6',
            //                 confirmButtonText: 'OK'
            //             }).then((result) => {
            //                 if (result.isConfirmed) {
            //                     window.location.href = "<?php echo site_url('login');?>";
            //                 }
            //                 return false;
            //             })
            //         }

            //     },
            //     error: function(jqXHR, textStatus, errorThrown) {
            //         alert('Error save data');
            //     }
            // });
        });
    });
</script>