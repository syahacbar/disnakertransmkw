<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Default card -->  
<div class="card">

    <div class="card-header with-border">
        <h3 class="card-title"><?php echo lang('profil_pencaker') ?></h3>
    </div>
    <ul class="list-group">
        <a id="tujuanpencaker" class="list-group-item list-group-item-action active"><?php echo lang('tujuan_pencaker') ?></a>

        <a id="identitaspencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'identitas_pencaker') ? 'active' : '' ?>"><?php echo lang('identitas_pencaker') ?></a>

        <a id="pendidikanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'pendidikan_pencaker') ? 'active' : '' ?>"><?php echo lang('pendidikan_pencaker') ?></a>

        <a id="pekerjaanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'pekerjaan_pencaker') ? 'active' : '' ?>"><?php echo lang('pekerjaan_pencaker') ?></a>

        <a id="perusahaanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'perusahaan_pencaker') ? 'active' : '' ?>"><?php echo lang('perusahaan_pencaker') ?></a>

        <a id="datatambahanpencaker" class="list-group-item list-group-item-action <?php echo ($page->submenu == 'datatambahan_pencaker') ? 'active' : '' ?>"><?php echo lang('datatambahan_pencaker') ?></a>

    </ul>

</div>