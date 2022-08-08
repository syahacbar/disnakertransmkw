<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulir AK-1</title>
    <style type="text/css" media="print">
        p, h5, h4, h6, th, td, strong {
            font-size: 10px !important;
            line-height: 1;
            padding: 0;
            margin: 0;
        }

        @page {
        size: landscape;
        margin: 0;
        font-size: 10px;
        }

        .pasfoto img {
            height: 155px !important;
            width: 100% !important;
        }

        .table-sm>:not(caption)>*>* {
            padding: 0,2px;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-6">
                <div class="row">
                    <div class="col-12 m-0">
                        <strong>PENDIDIKAN FORMAL</strong>
                        <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Tingkat pendidikan</th>
                            <th class="text-center" scope="col">Jurusan</th>
                            <th class="text-center" scope="col">Tahun Lulus</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $no=1;
                            foreach($pendidikan_pencaker AS $pd) : 
                        ?>
                            <tr>
                                <td class="text-center" width="2%"><?php echo $no++;?></td>
                                <td><?php echo $pd->jenjang;?></td>
                                <td><?php echo $pd->keterampilan;?></td>
                                <td class="text-center"><?php echo $pd->tahunlulus;?></td>
                            </tr>
                        <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 m-0">
                        <strong>KETERAMPILAN/PENGALAMAN KERJA</strong>
                        <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                            <th scope="col">No.</th>
                            <th class="text-center" scope="col">Jabatan/Instansi</th>
                            <th class="text-center" scope="col">Tahun</th>
                            </tr>
                        </thead>

                        <tbody>
                        <?php
                            $no=1; 
                            foreach($pekerjaan_pencaker AS $pk) : 
                        ?>
                            <tr>
                                <td class="text-center" width="2%"><?php echo $no++;?></td>
                                <td><?php echo $pk->jabatan." (".$pk->instansi.")";?></td>
                                <td class="text-center"><?php echo $pk->tahunmasuk;?></td>
                            </tr>
                        <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>

                    <div class="col-12 mt-0">
                        <div class="text-center">
                            <strong>Pengantar Kerja/Petugas Antarkerja</strong>
                            <br><br><br><br>
                            <p><strong><u>Ema Alberthina M. Rumsayor, S.STP</u></strong><br>NIP. 19830225 200312 2 001</p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div> 

             <!-- Kolom sebelah kanan  -->
             <div class="col-6">
                <!-- Header -->
                <div class="row">
                    <!-- Logo Kiri -->
                    <div class="col-2">
                        <img class="w-50" src="https://sippn.menpan.go.id/images/article/large/logo-manokwari.jpg">

                    </div>

                    <!-- Dinas kop -->
                    <div class="col-8">
                        <h5 class="text-center">PEMERINTAH KABUPATEN MANOKWARI<br>DINAS TENAGA KERJA DAN TRANSMIGRASI<br>KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA</h5>
                    </div>

                    <!-- Logo kanan -->
                    <div class="col-2">
                        <strong>Form AK-1</strong>
                    </div>

                </div>
                <hr>

                <!-- Body -->
                <div class="row">
                    <!-- Pas foto -->
                    <div class="col-3 pasfoto">
                        <img class="w-100" src="https://faopharmacy.unc.edu/wp-content/uploads/sites/200/2022/04/noimage.png">
                    </div>

                    <!-- Data-data -->
                    <div class="col-9">
                        <table class="table table-borderless table-sm">
                            <tbody>
                                <tr>
                                    <td width="30%">No. Pendaf. Pencari Kerja</td> 
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->nopendaftaran;?></td>
                                </tr>
                                <tr>
                                    <td>NIK</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->nik;?></td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->namalengkap;?></td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->tempatlahir.", ".date_indo($pencaker->tgllahir);?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo ($pencaker->jenkel=="L") ? "Laki-laki" : "Perempuan";?></td>
                                </tr>
                                <tr>
                                    <td>Status Perkawinan</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->statusnikah;?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->agama;?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td class="border-bottom"><?php echo $pencaker->alamat;?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Bagian kanan -->
                    <div class="col-2">

                    </div>
                </div>



             </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
