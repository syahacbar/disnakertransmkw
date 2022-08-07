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
        *,
        h5 {
            font-size: 12px;
            padding: 0 5px !important;
            margin: 0;
        }

        h3.text-center {
            font-size: 16px;
            font-weight: bold;
        }

        h4 {
            padding: 0 !important;
            font-size: 12px;
            margin: 0 !important;
        }

        td,
        tr,
        th {
            padding: 0 !important;
            margin: 0 !important;
        }

        .row.bahasa ol,
        .minatjabatan ol {
            margin-left: 12px;
        }

        @page {
            size: F4 portrait;
            margin: 20px 10px !important;
            padding: 0 !important;
        }

        @media print {

            body {
                width: 210mm;
                height: 297mm;
                margin: 0 !important;
            }
        }

        .col-10.border-bottom {
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            justify-content: center;
        }

        /* @media print {
            .pagebreak {
                page-break-before: always;
            }
        } */

        @media print {
            .pagebreak {
                clear: both;
                page-break-after: always;
                margin: auto;
            }
        }
    </style>
</head>

<body>
    <!-- <div class="container"> -->
    <div class="row formulirak1 border">
        <div class="col-2 border-bottom">
            <img class="w-50 px-2 py-2 m-auto d-flex" src="https://sippn.menpan.go.id/images/article/large/logo-manokwari.jpg">
        </div>
        <div class="col-10 border-bottom">
            <h3 class="text-medium">PEMERINTAH KABUPATEN MANOKWARI<br>DINAS TENAGA KERJA DAN TRANSMIGRASI</h3>
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
        </div>
        <hr>

        <div class="col-12 border-bottom">
            <div class="row">
                <h4>PENDIDIKAN FORMAL</h4>
                <table class="table table-striped table-bordered">
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

                    <ol class="d-flex justify-content-between align-items-center">
                        <?php
                        if ($pencaker->keterampilan_bahasa != NULL) {
                            $ket_bahasa = explode(',', $pencaker->keterampilan_bahasa);
                        }
                        if ($pencaker->bahasa_lainnya != NULL) {
                            $bahasa_lainnya = explode(',', $pencaker->bahasa_lainnya);
                        }

                        foreach ($ket_bahasa as $kb) :
                            echo "<li>" . strtoupper($kb) . "</li>";
                        endforeach;
                        foreach ($bahasa_lainnya as $bl) :
                            echo "<li>" . strtoupper($bl) . "</li>";
                        endforeach;

                        ?>
                    </ol>
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
            <div class="row minatjabatan">
                <h4>JABATAN YANG DIMINATI</h4>
                <div class="col-12">
                    <ol>
                        <?php foreach ($minat_jabatan as $mj) : ?>
                            <li><?php echo strtoupper($mj->nama_jabatan); ?></li>
                        <?php endforeach; ?>
                    </ol>
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
                            <td class="fw-bold"><?php echo strtoupper($pencaker->catatan_pengantar); ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>




    </div>

    <div class="pagebreak"> </div>

    <div class="row">
        <div class="col-12 mt-2 mb-2">
            <img class="w-100" src="<?php echo base_url('uploads/pencaker/') . $p_dok; ?>">
        </div>
        <div class="col-12 mt-2 mb-2">
            <img class="w-100" src="https://disnakertransmkw.com//assets/frontend/assets/img/cta-bg.jpg">
        </div>

        <div class="pagebreak">
            <div class="col-12 mt-2 mb-2">
                <img class="w-100" src="https://disnakertransmkw.com//assets/frontend/assets/img/cta-bg.jpg">
            </div>
            <div class="col-12 mt-2 mb-2">
                <img class="w-100" src="https://disnakertransmkw.com//assets/frontend/assets/img/cta-bg.jpg">
            </div>
        </div>

        <div class="pagebreak">
            <div class="col-12 mt-2 mb-2">
                <img class="w-100" src="https://disnakertransmkw.com//assets/frontend/assets/img/cta-bg.jpg">
            </div>
            <div class="col-12 mt-2 mb-2">
                <img class="w-100" src="https://disnakertransmkw.com//assets/frontend/assets/img/cta-bg.jpg">
            </div>
        </div>

    </div>
    <!-- </div> -->

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