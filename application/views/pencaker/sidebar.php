<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<style>
    ul a i {
        margin-right: 10px;
    }
</style>
<!-- Default card -->
<div class="card">

    <div class="card-header with-border">
        <h3 class="card-title"><?php echo lang('profil_pencaker') ?></h3>
    </div>
    <ul class="list-group">
        <a id="tujuanpencaker" class="list-group-item list-group-item-action active">
            <i class="fas fa-question-circle nav-icon"></i>
            <?php echo lang('tujuan_pencaker') ?>
        </a>

        <a id="identitaspencaker" class="list-group-item list-group-item-action><?php echo ($page->submenu == 'identitas_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-id-card nav-icon "></i><?php echo lang('identitas_pencaker') ?></a>

        <a id="pendidikanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'pendidikan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-graduation-cap nav-icon "></i><?php echo lang('pendidikan_pencaker') ?></a>

        <a id="pekerjaanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'pekerjaan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-briefcase nav-icon "></i><?php echo lang('pekerjaan_pencaker') ?></a>

        <a id="perusahaanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'perusahaan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-building nav-icon "></i><?php echo lang('perusahaan_pencaker') ?></a>

        <a id="datatambahanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'datatambahan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-plus nav-icon "></i><?php echo lang('datatambahan_pencaker') ?></a>

    </ul>

</div>