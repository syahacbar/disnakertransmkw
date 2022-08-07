<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Review Data dan Dokumen Pencari Kerja</title>
    <style>
        /* .formulirak1 {
            border: 2px solid #000;
        } */
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row formulirak1"> 
            <div class="col-2">
                <img class="w-50" src="https://sippn.menpan.go.id/images/article/large/logo-manokwari.jpg">
            </div>  
            <div class="col-10 d-flex justify-content-center align-items-center mt-3 mb-2">
                <h3 class="text-center">PEMERINTAH KABUPATEN MANOKWARI<br>DINAS TENAGA KERJA DAN TRANSMIGRASI</h3>
            </div>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <div class="row">
                    <div class="col-4">
                        <p>PEMERINTAH KABUPATEN MANOKWARI<br>DINAS TENAGA KERJA DAN TRANSMIGRASI __________</p>
                    </div>
                    <div class="col-4">
                        <p>Kode Wilayah Provinsi 92</p>
                    </div>
                    <div class="col-4">
                        <p>Kode Wilayah 02</p>
                    </div>

                </div>
            </div>
            <p>Catatan: Disi oleh Petugas</p>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <div class="row">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td width="20%">NOMOR PENDAFTARAN</td>
                            <td width="2%">:</td>
                            <td width="78%"><?php echo $pencaker->nopendaftaran; ?></td>
                        </tr>
                        <tr>
                            <td width="20%">TANGGAL PENDAFTARAN</td>
                            <td width="2%">:</td>
                            <td width="78%"><?php echo date_indo(substr($pencaker->created_at,0,10)); ?></td>
                        </tr>
                        <tr>
                            <td width="20%">NOMOR INDUK KEPENDUDUKAN</td>
                            <td width="2%">:</td>
                            <td width="78%"><?php echo $pencaker->nik; ?></td>
                        </tr>
                    </tbody>
                </table>

                </div>
            </div>

            <p>Catatan: Disi oleh Petugas</p>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <h4>KETERANGAN UMUM</h4>
                <div class="row">

                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td width="20%">Nama Lengkap</td>
                            <td width="2%">:</td>
                            <td width="78%"><?php echo $pencaker->namalengkap; ?></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $pencaker->tempatlahir.", ".date_indo($pencaker->tgllahir); ?></td>
                        </tr>
                        <tr>
                            <td>Tinggi Badan</td>
                            <td>:</td>
                            <td><?php echo $pencaker->tinggibadan." cm"; ?></td>
                        </tr>
                        <tr>
                            <td>Berat Badan</td>
                            <td>:</td>
                            <td><?php echo $pencaker->beratbadan." kg"; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>____________</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>____________</td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td>____________</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>____________</td>
                        </tr>
                        <tr>
                            <td>Kode Pos</td>
                            <td>:</td>
                            <td>____________</td>
                        </tr>
                        <tr>
                            <td>Status Pernikahan</td>
                            <td>:</td>
                            <td>____________</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $pencaker->email; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <h4>PENDIDIKAN FORMAL</h4>
                <div class="row">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th>Tahun Masuk</th>
                            <th>Tahun Lulus</th>
                            <th>Jenjang</th>
                            <th>Nama Satuan Pendidikan</th>
                            <th>NEM/NUN/IPK</th>
                            <th>Keterampilan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no=1;
                        foreach($pendidikan_pencaker AS $pd) : 
                    ?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $pd->tahunmasuk;?></td>
                        <td><?php echo $pd->tahunlulus;?></td>
                        <td><?php echo $pd->jenjang;?></td>
                        <td><?php echo $pd->nama_sekolah;?></td>
                        <td><?php echo $pd->ipk;?></td>
                        <td><?php echo $pd->keterampilan;?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
                </div>
            </div>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <h4>BAHASA YANG DIKUASAI</h4>
                <div class="row">
                    <ol>
                <?php 
                    if($pencaker->keterampilan_bahasa != NULL)
                    {
                        $ket_bahasa = explode(',',$pencaker->keterampilan_bahasa);
                    }
                    if($pencaker->bahasa_lainnya != NULL)
                    {
                        $bahasa_lainnya = explode(',',$pencaker->bahasa_lainnya);
                    }

                    foreach($ket_bahasa AS $kb) :
                        echo "<li>".$kb."</li>";
                    endforeach;
                    foreach($bahasa_lainnya AS $bl) :
                        echo "<li>".$bl."</li>";
                    endforeach;

                ?>            
                    </ol>
                </div>
            </div>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <h4>PENGALAMAN KERJA</h4>
                <div class="row">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="10px">No</th>
                                <th>Tahun Masuk</th>
                                <th>Tahun Keluar</th>
                                <th>Nama Perusahan/Instansi</th>
                                <th>Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1;
                                foreach($pekerjaan_pencaker AS $pk) : 
                            ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $pk->tahunmasuk;?></td>
                                <td><?php echo $pk->tahunkeluar;?></td>
                                <td><?php echo $pk->instansi;?></td>
                                <td><?php echo $pk->jabatan;?></td>
                            </tr>
                            <?php endforeach;?>


                        </tbody>
                    </table>
                </div>
            </div>
            <hr>

            <div class="col-12 mt-3 mb-2">
                <h4>JABATAN YANG DIINGINKAN</h4>
                <div class="row">
                     <ol>
                        <?php foreach($minat_jabatan AS $mj) : ?>
                            <li><?php echo $mj->nama_jabatan;?></li>
                        <?php endforeach;?>
                     </ol>
                    </table>
                </div>
            </div>
            <hr>
            
            <div class="col-12 mt-3 mb-2">
                <h4>PERUSAHAN YANG DITUJU</h4>
                <div class="row">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="20%">Jabatan yang diinginkan</td>
                                <td width="2%">:</td>
                                <td width="78%">______________________</td>
                            </tr>
                            <tr>
                                <td width="20%">Perusahan yang dituju</td>
                                <td width="2%">:</td>
                                <td width="78%">______________________</td>
                            </tr>
                            <tr>
                                <td width="20%">Catatan Pengantar Kerja</td>
                                <td width="2%">:</td>
                                <td width="78%">______________________</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            
            

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
