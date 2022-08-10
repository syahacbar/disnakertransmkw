<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Review Data dan Dokumen Pencaker</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 }</style>
  <style type="text/css">
    * {
        font-size: 12px;
    }
        td, tr, th {
            padding: 0 !important;
            margin: 0 !important;
        }

        h4 {
            padding: 0 !important;
            font-size: 16px;
            margin: 0 !important;
            font-weight: bold;
        }

        .div1 {
          width: 100%;
          height: 60px;
          border: 1px solid gray;
        }

       

        ul.bahasa {

        }

        ul.bahasa li {
            display: inline;
            padding-right: 20px
        }


  </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">

    <div class="row">
        <div class="col-2 border-bottom">
            <img width="70" height="70" src="<?php echo base_url('assets/img/')?>logo-manokwari.jpg">
        </div>
        <div class="col-10 border-bottom">
            <h2 class="text-medium">PEMERINTAH KABUPATEN MANOKWARI<br>DINAS TENAGA KERJA DAN TRANSMIGRASI</h2>
            <p class="text-small">Jalan Percetakan Negara No. 7 Manokwari Papua Barat</p>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td width="30%">NOMOR PENDAFTARAN</td>
                            <td width="2%">:</td>
                            <td class="fw-bold" width="78%"><?php echo $pencaker->nopendaftaran; ?></td>
                        </tr>
                        <tr>
                            <td width="30%">TANGGAL PENDAFTARAN</td>
                            <td width="2%">:</td>
                            <td class="fw-bold" width="78%"><?php echo strtoupper(date_indo(substr($pencaker->created_at, 0, 10))); ?></td>
                        </tr>
                        <tr>
                            <td width="30%">NOMOR INDUK KEPENDUDUKAN</td>
                            <td width="2%">:</td>
                            <td class="fw-bold" width="78%"><?php echo $pencaker->nik; ?></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <div class="col-8">
                    <h4>KETERANGAN UMUM</h4>
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td width="30%">Nama Lengkap</td>
                                <td width="2%">:</td>
                                <td width="78%" class="fw-bold"><?php echo strtoupper($pencaker->namalengkap); ?></td>
                            </tr>
                            <tr>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo strtoupper($pencaker->tempatlahir) . ", " . date_indo($pencaker->tgllahir); ?></td>
                            </tr>
                            <tr>
                                <td>Tinggi Badan</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo $pencaker->tinggibadan . " CM"; ?></td>
                            </tr>
                            <tr>
                                <td>Berat Badan</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo $pencaker->beratbadan . " KG"; ?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td class="fw-bold">
                                    <?php
                                    if ($pencaker->jenkel == 'L') {
                                        echo "LAKI-LAKI";
                                    } else if ($pencaker->jenkel == 'P') {
                                        echo "PEREMPUAN";
                                    } else {
                                        echo "-";
                                    }
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo strtoupper($pencaker->alamat); ?></td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo $pencaker->phone; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo strtoupper($pencaker->email); ?></td>
                            </tr>
                            <tr>
                                <td>Kode Pos</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo $pencaker->kodepos; ?></td>
                            </tr>
                            <tr>
                                <td>Status Pernikahan</td>
                                <td>:</td>
                                <td class="fw-bold"><?php echo strtoupper($pencaker->statusnikah); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-2" style="margin-left: auto; margin-right: 0;">
                    <?php
                        foreach($dokumen_pencaker AS $dp) : 
                            if($dp->jenis_dokumen == 'PAS FOTO') {
                                echo '<img align="right" src="'.base_url('uploads/pencaker/').$dp->nopendaftaran.'/'.$dp->namadokumen.'" height="130px" width="100px">';
                            }
                        endforeach;
                    ?>                    
                </div>
            </div>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <h4>PENDIDIKAN FORMAL</h4>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th width="10px"  style="padding: 3px !important;">No</th>
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
                        $no = 1;
                        foreach ($pendidikan_pencaker as $pd) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $pd->tahunmasuk; ?></td>
                                <td><?php echo $pd->tahunlulus; ?></td>
                                <td><?php echo $pd->jenjang; ?></td>
                                <td><?php echo $pd->nama_sekolah; ?></td>
                                <td><?php echo $pd->ipk; ?></td>
                                <td><?php echo $pd->keterampilan; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row bahasa">
                <h4>BAHASA YANG DIKUASAI</h4>
                <div class="col-12">

                    <ul class="bahasa">
                        <?php
                        $ket_bahasa = array();
                        if ($pencaker->keterampilan_bahasa != NULL) {
                            $ket_bahasa = explode(',', $pencaker->keterampilan_bahasa);
                        }
                        $bahasa_lainnya = array();
                        if ($pencaker->bahasa_lainnya != NULL) {
                            $bahasa_lainnya = explode(',', $pencaker->bahasa_lainnya);
                        }
                        $urut = 1;
                        if($ket_bahasa != null) {
                            foreach ($ket_bahasa as $kb) :
                                echo '<li>'.$urut++.'. ' . strtoupper($kb) . '</li>';
                            endforeach;
                        }
                        if($bahasa_lainnya != null) {
                            foreach ($bahasa_lainnya as $bl) :
                                echo '<li>'.$urut++.'. ' . strtoupper($bl) . '</li>';
                            endforeach;
                        }

                        ?>
                    </ul>
                </div>

            </div>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <h4>PENGALAMAN KERJA</h4>
                <table class="table table-striped table-bordered">
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
                        $no = 1;
                        foreach ($pekerjaan_pencaker as $pk) :
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $pk->tahunmasuk; ?></td>
                                <td><?php echo $pk->tahunkeluar; ?></td>
                                <td><?php echo strtoupper($pk->instansi); ?></td>
                                <td><?php echo strtoupper($pk->jabatan); ?></td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>
                </table>
            </div>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <h4>JABATAN YANG DIMINATI</h4>
                <div class="col-12">
                    <ul class="bahasa">
                        <?php 
                            $no = 1;
                            foreach ($minat_jabatan as $mj) : 
                        ?>
                            <li><?php echo $no++.'. '.strtoupper($mj->nama_jabatan); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <h4>PERUSAHAN YANG DITUJU</h4>
                <table class="table table-borderless">
                    <tbody>
                        <tr>
                            <td>Nama Perusahan: <span class="fw-bold"><?php echo strtoupper($pencaker->tujuan_perusahaan); ?></span></td>
                        </tr>
                        <tr>
                            <td class="fst-italic">Catatan pengantar kerja yang berkaitan dengan faktor-faktor yang mempengaruhi pekerjaan :</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">
                                <div class="div1">
                                    <?php echo strtoupper($pencaker->catatan_pengantar); ?>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
  </section>

<?php 

    foreach($dokumen_pencaker AS $dp) : 
        if($dp->namadokumen != null && $dp->jenis_dokumen != 'PAS FOTO') {
?>
  <section class="sheet padding-10mm">
     <!-- <embed src="<?php //echo base_url('uploads/pencaker/').$dp->nopendaftaran.'/'.$dp->namadokumen ?>" width="100%" height="100%"> -->
        
    <?php    
        $url = base_url('uploads/pencaker/').$dp->nopendaftaran.'/'.$dp->namadokumen;
        $url = parse_url($url);
        $ext  = pathinfo($url['path'], PATHINFO_EXTENSION);
        if($ext == 'pdf') {
    ?>
    <iframe src="<?php echo base_url('uploads/pencaker/').$dp->nopendaftaran.'/'.$dp->namadokumen ?>" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px" height="100%" width="100%"></iframe>

    <?php } else { ?> 

    <center><img src="<?php echo base_url('uploads/pencaker/').$dp->nopendaftaran.'/'.$dp->namadokumen ?>" width="80%"></center>
    <?php } ?>
  </section>
<?php 
        }  
    endforeach; 

?>

</body>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>