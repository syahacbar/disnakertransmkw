<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('web/template/header'); ?>


<main id="main">
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Validasi Kartu Pencari Kerja</h2>
                <h3><?php echo $v_msg->valid;?></h3>
                <h3><?php echo "Atas Nama : ".$v_msg->pencaker->namalengkap;?></h3>
            </div>
        </div>
    </section>
</main>

<!-- ======= Footer ======= -->
<?php include viewPath('web/template/footer'); ?>
<!-- End Footer -->
