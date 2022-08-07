<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Form</title>
    <!--load bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
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
            <div class="col-md-7 col-md-offset-3 well">
                <?php $attributes = array("id" => "contactform");
                echo form_open("contactform", $attributes); ?>
                <fieldset>
                    <h4>Hubungi Kami</h4>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="name" class="control-label">Nama Lengkap</label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" name="name" placeholder="Ketik nama lengkap Anda" type="text" value="<?php echo set_value('name'); ?>" />
                            <span class="text-danger"><?php echo form_error('name'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="email" class="control-label">Email</label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" name="email" placeholder="Email Anda" type="text" value="<?php echo set_value('email'); ?>" />
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="subject" class="control-label">Judul Pesan</label>
                        </div>
                        <div class="col-md-12">
                            <input class="form-control" name="subject" placeholder="Ketik judul pesan Anda" type="text" value="<?php echo set_value('subject'); ?>" />
                            <span class="text-danger"><?php echo form_error('subject'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="message" class="control-label">Isi Pesan</label>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="4" placeholder="Ketik isi pesan Anda"><?php echo set_value('message'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('message'); ?></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                        </div>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>
                <?php echo $this->session->flashdata('msg'); ?>
            </div>
        </div>
    </div>