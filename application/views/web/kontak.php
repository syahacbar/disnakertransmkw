<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Kontak</h2>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Alamat:</h4>
                            <p>Jl. Percetakan Negara, Manokwari - Papua Barat</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@disnakertransmkw.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Telp:</h4>
                            <p>0986-211934, 0986-211738</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.365973316296!2d134.0611203153388!3d-0.8627819355555999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d540a8f6fc1391d%3A0xca53166126f4e07f!2sDisnakertrans%20Kabupaten%20Manokwari!5e0!3m2!1sid!2sid!4v1658212862305!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="info">
                        <?php echo $this->session->flashdata('msg'); ?>
                        <?php $attributes = array("id" => "contactform");
                        echo form_open("web/kirim_email", $attributes); ?>
                        <div class="col-12">
                            <h4 class="m-0 px-0">Kirim Pesan</h4>
                            <p class="px-0 py-2 text-secondary">Punya pertanyaan lebih lanjut? Hubungi kami melalui kontak yang tercantum di halaman ini, atau klik di sini untuk akses ke halaman pusat bantuan.</p>
                        </div>
                        <div class="form-group mt-4">
                            <div class="col-md-12 mt-2 mb-1">
                                <label for="name" class="control-label">Nama Lengkap</label>
                            </div>
                            <div class="col-md-12 mt-2 mb-1">
                                <input class="form-control" name="name" placeholder="Ketik nama lengkap Anda di sini" type="text" value="<?php echo set_value('name'); ?>" />
                                <span class="text-danger"><?php echo form_error('name'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 mt-2 mb-1">
                                <label for="email" class="control-label">Email</label>
                            </div>
                            <div class="col-md-12 mt-2 mb-1">
                                <input class="form-control" name="email" placeholder="Contoh: emailsaya@email.com" type="text" value="<?php echo set_value('email'); ?>" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 mt-2 mb-1">
                                <label for="subject" class="control-label">Judul Pesan</label>
                            </div>
                            <div class="col-md-12 mt-2 mb-1">
                                <input class="form-control" name="subject" placeholder="Ketik judul pesan Anda di sini" type="text" value="<?php echo set_value('subject'); ?>" />
                                <span class="text-danger"><?php echo form_error('subject'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 mt-2 mb-1">
                                <label for="message" class="control-label">Isi Pesan</label>
                            </div>
                            <div class="col-md-12 mt-2 mb-1">
                                <textarea class="form-control" name="message" rows="4" placeholder="Ketik isi pesan Anda di sini"><?php echo set_value('message'); ?></textarea>
                                <span class="text-danger"><?php echo form_error('message'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 mt-2 mb-1">
                                <input name="submit" type="submit" class="btn btn-primary w-25" value="Send" />
                            </div>
                        </div>
                        <input type="hidden" value="kontak" name="page">
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->