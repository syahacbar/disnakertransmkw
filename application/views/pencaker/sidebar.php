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
            Tujuan
        </a>

        <a id="identitaspencaker" class="list-group-item list-group-item-action><?php echo ($page->submenu == 'identitas_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-id-card nav-icon "></i>Keterangan Umum</a>

        <a id="pendidikanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'pendidikan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-graduation-cap nav-icon "></i>Pendidikan Formal </a>

        <a id="bahasapencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'bahasa_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-language nav-icon "></i>Keterampilan Bahasa</a>

        <a id="pekerjaanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'pekerjaan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-briefcase nav-icon "></i>Pengalaman Kerja</a>   
        
        <a id="jabatanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'jabatan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-user nav-icon "></i>Jabatan Yang Diminati</a>   
        
        <a id="perusahaanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'perusahaan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-building nav-icon "></i>Perusahaan Yang Dituju</a>

        <a id="datatambahanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'datatambahan_pencaker') ? 'active' : '' ?>">
            <i class="fas fa-plus nav-icon "></i>Keterangan Tambahan</a>

    </ul>

</div>