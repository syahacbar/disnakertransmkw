<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kartu Pencaker</title>

  <!-- Normalize or reset CSS with your favorite library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 landscape}</style>
  <style>
    * {
        font-size: 12px;
    }
    table.t1, table.t2 {
      width:95%;
      border-style: solid;
      border-width: 1px;
    }
    table.t1 th, table.t1 td {
      padding: 15px !important;
    }

    table.t2 th, table.t2 td {
      padding: 2px !important;
    }

    table.t3 td {
      padding: 5px !important;
    }
  </style>
  </style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4 landscape">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <section class="sheet padding-10mm">
    <div class="row">
      <div class="col-6">
        <div class="row" style="margin-top:1px !important"> 
          <strong>PENDIDIKAN FORMAL</strong>
          <table style="width:95%;" class="table table-striped table-bordered t2">
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
          <strong>KETERAMPILAN/PENGALAMAN KERJA</strong>
          <table style="width:95%;" class="table table-striped table-bordered t2">
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
        <div class="row">
          <div class="col-6">
            <?php if(!empty($pencaker->qr_code) OR $pencaker->qr_code != null) { ?>
            <img width="75" height="75" src="<?php echo base_url('uploads/pencaker/qrcode/').$pencaker->qr_code;?>">
          <?php } ?>
          </div>
          <div class="col-6 text-center">
            Pengantar Kerja/Petugas Antar Kerja<br><br><br><br>
            <strong><u>Ema Alberthina M. Rumsayor, S.STP</u></strong><br>
            NIP. 19830225 200312 2 001
          </div>
        </div>
      </div>
      <div class="col-6">      
        <div class="row" style="margin-top:1px !important">  
          <table width="100%">
            <tr>
              <td align="left">
                <img width="55" height="55" src="<?php echo base_url('assets/img/')?>logo-manokwari.jpg">
              </td>
              <td class="text-center">
                PEMERINTAH KABUPATEN MANOKWARI <br>
                DINAS TENAGA KERJA DAN TRANSMIGRASI<br>
                KARTU TANDA BUKTI PENDAFTARAN PENCARI KERJA
              </td>
              <td style="text-align: right; vertical-align: top;"><strong>KARTU AK-1</strong></td>
            </tr>
          </table>
        </div>  
        <div class="row" style="margin-top:20px !important"> 
          <div class="col-3">
          <img align="left" style="width:28mm;height: 38mm;border-style:solid; border-width: 1px;" src="<?php echo pencakerFoto($pencaker->idpencaker); ?>">

          </div>  
          <div class="col-9">
            <table class="t3">
              <tbody>
                <tr>
                    <td width="35%">No. Pencari Kerja</td> 
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
        </div>

      </div>
    </div>
    <hr style="border-bottom: 1px dashed black;">
    <div class="row">
      <div class="col-6">
        <table align="left" class="table table-striped table-bordered t1">
          <thead>
              <tr>
                <th scope="col">Laporan</th>
                <th scope="col">Tanggal - Bulan - Tahun</th>
                <th scope="col">Tanda Tangan Petugas Pendaftar</th>
              </tr>
          </thead>

          <tbody>
              <tr>
                  <td>Pertama</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Kedua</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <td>Ketiga</td>
                  <td></td>
                  <td></td>
              </tr>
              
              </tbody>
          </table>
          <br><br>
          <table class="t1" style="border-width: 0px; border-style:none">
            <tbody>
                <tr>
                    <td width="30%">Diterima Kerja</td>
                    <td width="1%">:</td>
                    <td class="border-bottom"></td>
                </tr>
                <tr>
                    <td>Terhitung Tgl.</td>
                    <td>:</td>
                    <td class="border-bottom"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="col-6" style="border-style: solid;border-width: 1px; line-height: 25px;">
          <strong>Ketentuan:</strong>
          <ol>
            <li>Berlaku untuk Kabupaten Manokwari.</li>
            <li>Bila ada perubahan data/keterangan lainnya atau telah mendapat pekerjaan, harap segera melapor.</li>
            <li>Apabila pencari kerja yang bersangkutan telah diterima bekerja, maka instansi/perusahan yang menerima agar mengembalikan AK-1 ini kepada Dinas Tenaga Kerja dan Transmigrasi Kabupaten Manokwari.</li>
            <li>Kartu ini berlaku selama 2 tahun dengan keharusan melapor setiap 6 bulan sekali bagi pencari kerja yang belum mendapatkan pekerjaan.</li>
          </ol>
        </div>
    </div>
  </section>

</body>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>