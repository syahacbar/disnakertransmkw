<?php
defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php include viewPath('includes/header'); ?>

<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title></title>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<style>
    .card-body {
        padding: 10px;
        box-shadow: none;
    }

    ::-webkit-scrollbar {
        width: 8px;
    }

    /* Track */

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    /* Handle */

    ::-webkit-scrollbar-thumb {
        background: #888;
    }

    /* Handle on hover */

    ::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    * {
        margin: 0;
        padding: 0;
    }

    html {
        height: 100%;
    }

    /*Background color*/

    /*form styles*/

    #msform {
        text-align: center;
        position: relative;
        margin-top: 20px;
    }

    #msform fieldset .form-card {
        background: transparent;
        border: 0 none;
        border-radius: 0px;
        box-shadow: none;
        padding: 20px 0;
        box-sizing: border-box;
        width: 94%;
        margin: 10px 3%;
        position: relative;
    }

    #msform fieldset {
        background: white;
        border: 0 none;
        border-radius: 0.5rem;
        box-sizing: border-box;
        width: 100%;
        margin: 0;
        padding-bottom: 20px;
        /*stacking fieldsets above each other*/
        position: relative;
    }

    /*Hide all except first fieldset*/

    #msform fieldset:not(:first-of-type) {
        display: none;
    }

    #msform fieldset .form-card {
        text-align: left;
        color: #9E9E9E;
    }

    .form-group label {
        font-weight: normal !important;
        color: #000;
    }

    /* #msform input,
    #msform textarea {
        padding: 0px 8px 4px 8px;
        border: none;
        border-bottom: 1px solid #ccc;
        border-radius: 0px;
        margin-bottom: 25px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 16px;
        letter-spacing: 1px;
    }

    #msform input:focus,
    #msform textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: none;
        font-weight: bold;
        border-bottom: 2px solid skyblue;
        outline-width: 0;
    } */

    /*Blue Buttons*/

    #msform .action-button {
        width: 100px;
        background: skyblue;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button:hover,
    #msform .action-button:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue;
    }

    /*Previous Buttons*/

    #msform .action-button-previous {
        width: 100px;
        background: #616161;
        font-weight: bold;
        color: white;
        border: 0 none;
        border-radius: 0px;
        cursor: pointer;
        padding: 10px 5px;
        margin: 10px 5px;
    }

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
        box-shadow: 0 0 0 2px white, 0 0 0 3px #616161;
    }

    /*Dropdown List Exp Date*/

    select.list-dt {
        border: none;
        outline: 0;
        border-bottom: 1px solid #ccc;
        padding: 2px 5px 3px 5px;
        margin: 2px;
    }

    select.list-dt:focus {
        border-bottom: 2px solid skyblue;
    }

    /*The background card*/

    .card {
        z-index: 0;
        border: none;
        border-radius: 0;
        position: relative;
        box-shadow: none;
    }

    /*FieldSet headings*/

    .fs-title {
        font-size: 25px;
        color: #2C3E50;
        margin-bottom: 10px;
        font-weight: bold;
        text-align: left;
    }

    /*progressbar*/

    #progressbar {
        margin-bottom: 30px;
        overflow: hidden;
        color: lightgrey;
    }

    #progressbar .active {
        color: #000000;
    }

    #progressbar li {
        list-style-type: none;
        font-size: 12px;
        width: 25%;
        float: left;
        position: relative;
    }

    /*Icons in the ProgressBar*/

    #progressbar #identitas:before {
        font-family: FontAwesome;
        content: "\f023";
    }

    #progressbar #pendidikan:before {
        font-family: FontAwesome;
        content: "\f007";
    }

    #progressbar #bahasa:before {
        font-family: FontAwesome;
        content: "\f09d";
    }

    #progressbar #kerja:before {
        font-family: FontAwesome;
        content: "\f00c";
    }

    /*ProgressBar before any progress*/

    #progressbar li:before {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 18px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
    }

    /*ProgressBar connectors*/

    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        z-index: -1;
    }

    /*Color number of the step and the connector before it*/

    #progressbar li.active:before,
    #progressbar li.active:after {
        background: skyblue;
    }

    /*Imaged Radio Buttons*/

    .radio-group {
        position: relative;
        margin-bottom: 25px;
    }

    .radio {
        display: inline-block;
        width: 204;
        height: 104;
        border-radius: 0;
        background: lightblue;
        box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        cursor: pointer;
        margin: 8px 2px;
    }

    .radio:hover {
        box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3);
    }

    .radio.selected {
        box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1);
    }

    /*Fit image in bootstrap div*/

    .fit-image {
        width: 100%;
        object-fit: cover;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?php echo lang('form_pencaker') ?></h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo url('/') ?>"><?php echo lang('home') ?></a></li>
                    <li class="breadcrumb-item active"><?php echo lang('form_pencaker') ?></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                   <!--  <div class="card-header d-flex p-0">
                        <h3 class="card-title p-3"><?php //echo lang('form_pencaker') ?></h3>
                        <div class="ml-auto p-2">
                            <a href="#" class="btn btn-primary btn-sm">Button</a>
                        </div>
                    </div> -->

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="container-fluid" id="grad1">
                            <div class="row justify-content-center mt-0">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center p-0 mt-3 mb-2">
                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                        <h2><strong>Formulir AK/I</strong></h2>
                                        <p>Silakan lengkapi data yang di bawah ini untuk pembuatan Kartu Tanda Pencari Kerja (Kartu Kuning)</p>
                                        <div class="row">
                                            <div class="col-md-12 mx-0">
                                                <form id="msform">
                                                    <!-- progressbar -->
                                                    <ul id="progressbar">
                                                        <li class="active" id="identitas"><strong>Keterangan Umum</strong></li>
                                                        <li id="pendidikan"><strong>Pendidikan Formal</strong></li>
                                                        <li id="bahasa"><strong>Bahasa</strong></li>
                                                        <li id="kerja"><strong>Pengalaman Kerja</strong></li>
                                                    </ul>
                                                    <!-- fieldsets -->
                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Keterangan Umum</h2>
                                                            <div class="alert alert-success" role="alert">
                                                                Lengkapi data diri Anda di bawah ini!
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="namalengkap">Nama Lengkap</label>
                                                                <input type="text" class="form-control" name="namalengkap" id="namalengkap" required placeholder="Nama Sesuai KTP" autofocus />
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                                <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir Sesuai KTP" required placeholder="Nama Sesuai KTP" autofocus />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required placeholder="Tanggal Lahir Sesuai KTP" autofocus />
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                <input type="text" class="form-control" name="jenis_kelamin" id="jenis_kelamin" placeholder="" required placeholder="Pilih Jenis Kelamin" autofocus />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="alamat_tinggal">Alamat Tinggal</label>
                                                                <textarea type="text" class="form-control" name="alamat_tinggal" id="alamat_tinggal" required placeholder="Alamat tinggal sesuai KTP" autofocus> </textarea>
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="kode_pos">Kode Pos</label>
                                                                <input type="text" class="form-control" name="kode_pos" id="kode_pos" placeholder="" required placeholder="Ketik Kode pos di sini" autofocus />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="Status Menikah">Status Menikah</label>
                                                                <input type="text" class="form-control" name="Status Menikah" id="Status Menikah" required placeholder="Pilih" autofocus />
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="tinggi_badan">Tinggi Badan</label>
                                                                <input type="text" class="form-control" name="tinggi_badan" id="tinggi_badan" placeholder="" required placeholder="Satuan cm, misal 160" autofocus />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="berat_badan">Berat Badan</label>
                                                                <input type="text" class="form-control" name="berat_badan" id="berat_badan" placeholder="" required placeholder="Satuan kg, misal 56" autofocus />
                                                            </div>
                                                        </div>
                                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Pendidikan Formal</h2>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 mb-2">
                                                                    <h6>1. Sekolah Dasar</h6>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_sekolah">Nama Sekolah</label>
                                                                        <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="" required placeholder="Nama sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="nilai">NEM/IPK</label>
                                                                        <input type="number" class="form-control" name="nilai" id="nilai" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 mb-2">
                                                                    <h6>2. Sekolah Menengah Tingkat Pertama</h6>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_sekolah">Nama Sekolah</label>
                                                                        <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="" required placeholder="Nama sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="nilai">NEM/IPK</label>
                                                                        <input type="number" class="form-control" name="nilai" id="nilai" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 mb-2">
                                                                    <h6>3. Sekolah Menengah Tingkat Atas</h6>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_sekolah">Nama Sekolah</label>
                                                                        <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="" required placeholder="Nama sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="nilai">NEM/IPK</label>
                                                                        <input type="number" class="form-control" name="nilai" id="nilai" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3 mb-2">
                                                                    <h6>4. Perguruan Tinggi</h6>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_sekolah">Nama Sekolah</label>
                                                                        <input type="text" class="form-control" name="nama_sekolah" id="nama_sekolah" placeholder="" required placeholder="Nama sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="nilai">NEM/IPK</label>
                                                                        <input type="number" class="form-control" name="nilai" id="nilai" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Keterampilan Berbahasa</h2>
                                                            <div class="alert alert-success" role="alert">
                                                                Silakan pilih salah satu atau beberapa bahasa yang Anda kuasai pada pilihan di bawah ini!
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="indonesia">
                                                                        <label class="form-check-label" for="indonesia">
                                                                            Bahasa Indonesia
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="inggris">
                                                                        <label class="form-check-label" for="inggris">
                                                                            Bahasa Inggris
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="jerman">
                                                                        <label class="form-check-label" for="jerman">
                                                                            Bahasa Jerman
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="jepang">
                                                                        <label class="form-check-label" for="jepang">
                                                                            Bahasa Jepang
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="mandarin">
                                                                        <label class="form-check-label" for="mandarin">
                                                                            Bahasa Mandarin
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="belanda">
                                                                        <label class="form-check-label" for="belanda">
                                                                            Bahasa Belanda
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="perancis">
                                                                        <label class="form-check-label" for="perancis">
                                                                            Bahasa Perancis
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 mt-2">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" value="" id="arab">
                                                                        <label class="form-check-label" for="arab">
                                                                            Bahasa Arab
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-3">
                                                                    <div class="form-group">
                                                                        <label for="lainnya">Lainnya</label>
                                                                        <textarea type="text" class="form-control" name="lainnya" id="lainnya" required placeholder="Deskripsikan bahasa yang Anda kuasai di sini" autofocus></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title">Pengalaman Kerja</h2>
                                                            <div class="alert alert-success" role="alert">
                                                                Silakan isi data terkait pengalaman kerja Anda pada bidang-bidang di bawah ini!
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_perusahan">Nama Perusahan/Instansi</label>
                                                                        <input type="text" class="form-control" name="nama_perusahan" id="nama_perusahan" placeholder="" required placeholder="Nama Perusahan/Instansi" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="jabatan">Jabatan</label>
                                                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_perusahan">Nama Perusahan/Instansi</label>
                                                                        <input type="text" class="form-control" name="nama_perusahan" id="nama_perusahan" placeholder="" required placeholder="Nama Perusahan/Instansi" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="jabatan">Jabatan</label>
                                                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="Tahun keluar sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_perusahan">Nama Perusahan/Instansi</label>
                                                                        <input type="text" class="form-control" name="nama_perusahan" id="nama_perusahan" placeholder="" required placeholder="Nama Perusahan/Instansi" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="jabatan">Jabatan</label>
                                                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="Tahun masuk sekolah" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_masuk">Tahun Masuk</label>
                                                                        <input type="number" class="form-control" name="tahun_masuk" id="tahun_masuk" placeholder="" required placeholder="" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="tahun_keluar">Tahun Keluar</label>
                                                                        <input type="number" class="form-control" name="tahun_keluar" id="tahun_keluar" placeholder="" required placeholder="" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-6 ">
                                                                    <div class="form-group">
                                                                        <label for="nama_perusahan">Nama Perusahan/Instansi</label>
                                                                        <input type="text" class="form-control" name="nama_perusahan" id="nama_perusahan" placeholder="" required placeholder="" autofocus />
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 col-sm-12 col-md-3 col-lg-2 ">
                                                                    <div class="form-group">
                                                                        <label for="jabatan">Jabatan</label>
                                                                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="" required placeholder="" autofocus />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                                                        <input type="button" name="next" class="next action-button" value="Next Step" />
                                                    </fieldset>

                                                    <fieldset>
                                                        <div class="form-card">
                                                            <h2 class="fs-title text-center">Success !</h2>
                                                            <br><br>
                                                            <div class="row justify-content-center">
                                                                <div class="col-3">
                                                                    <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image">
                                                                </div>
                                                            </div>
                                                            <br><br>
                                                            <div class="row justify-content-center">
                                                                <div class="col-7 text-center">
                                                                    <h5>You Have Successfully Signed Up</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->

<script type='text/javascript'>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;

        $(".next").click(function() {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $(".previous").click(function() {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({
                opacity: 0
            }, {
                step: function(now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({
                        'opacity': opacity
                    });
                },
                duration: 600
            });
        });

        $('.radio-group .radio').click(function() {
            $(this).parent().find('.radio').removeClass('selected');
            $(this).addClass('selected');
        });

        $(".submit").click(function() {
            return false;
        })

    });
</script>
<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
        e.preventDefault();
    });
</script>

<?php include viewPath('includes/footer'); ?>