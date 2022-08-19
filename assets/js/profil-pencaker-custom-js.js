    var tabelpendidikan = null;
    var tabelpekerjaan = null;

    $(".year").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });

    $(".date").datepicker({
        format: "yyyy-mm-dd",
    });

    $(document).ready(function() {

        function showtujuanpencaker() {
            $('.tujuanpencaker').toggle("display");
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').addClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showidentitaspencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').toggle("display");
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').addClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
        }

        function showpendidikanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').toggle("display");
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').addClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");

            tabelpendidikan = $('#tabelpendidikanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": baseURL + "pencaker/get_pendidikan",
                    "type": "POST"
                },
                "deferRender": true,
                //"stateSave": true,
                "bDestroy": true,

                "columns": [{
                        "data": "id",
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "tahunmasuk"
                    },
                    {
                        "data": "tahunlulus"
                    },
                    {
                        "data": "jenjang"
                    },
                    {
                        "data": "nama_sekolah"
                    },
                    {
                        "data": "ipk"
                    },
                    {
                        "data": "keterampilan"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<a href="javascript:void(0)" data-id="' + data + '" class="btn btn-sm btn-primary btnEditPendidikan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusPendidikan" href="javascript:void(0)" data-id="' + data + '"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });

        }

        function reload_table_pendidikan() {
            $('#tabelpendidikanpencaker').DataTable().ajax.reload(null, false);
        }

        function reset_form_pendidikan() {
            $('#formpendidikanpencaker').each(function() {
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSavePendidikan').show();
            $('#btnUpdatePendidikan').addClass("hide");
        }

        function editpendidikanpencaker(id) {
            $.ajax({
                url: baseURL + "pencaker/get_pendidikan_by_id/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="tahunmasuk"]').val(data.tahunmasuk);
                    $('[name="tahunlulus"]').val(data.tahunlulus);
                    $('[name="jenjang"]').val(data.jenjang_pendidikan_id).trigger("change");
                    $('[name="nama_sekolah"]').val(data.nama_sekolah);
                    $('[name="ipk"]').val(data.ipk);
                    $('[name="keterampilan"]').val(data.keterampilan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pendidikan');
                }
            });
        }


        $('#tabelpendidikanpencaker').on('click', '.btnEditPendidikan', function() {
            //hide button simpan, show button update
            $('#btnSavePendidikan').hide();
            $('#btnUpdatePendidikan').removeClass("hide");
            var idpendidikan = $(this).attr("data-id");
            //set hidden form untuk Id pendidikan
            $('[name="idpendidikan"]').val(idpendidikan);

            editpendidikanpencaker(idpendidikan);
        });

        $('#btnSavePendidikan').click(function() {
            $.ajax({
                url: baseURL + "pencaker/add_pendidikan",
                type: "POST",
                data: $('#formpendidikanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pendidikan();
                        reset_form_pendidikan()
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });

        $('#btnUpdatePendidikan').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update_pendidikan",
                type: "POST",
                data: $('#formpendidikanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pendidikan();
                        reset_form_pendidikan()
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#tabelpendidikanpencaker').on('click', '.btnHapusPendidikan', function() {
            var result = confirm("Want to delete?");
            if (result) {
                var idpendidikan = $(this).attr("data-id");
                $.ajax({
                    url: baseURL + "pencaker/del_pendidikan_by_id/" + idpendidikan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            reload_table_pendidikan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
            }
        });


        function showbahasapencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.bahasapencaker').toggle("display");
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#bahasapencaker').addClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            $.ajax({
                url: baseURL + "pencaker/get_bahasa_pencaker",
                type: "GET",
                dataType: "JSON",
                success: function(data) {

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Keterampilan Bahasa');
                }
            });
        }

        function showpekerjaanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').toggle("display");
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').addClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            tabelpekerjaan = $('#tabelpekerjaanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": baseURL + "pencaker/get_pekerjaan",
                    "type": "POST"
                },
                "deferRender": true,
                //"stateSave": true,
                "bDestroy": true,

                "columns": [{
                        "data": "id",
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "tahunmasuk"
                    },
                    {
                        "data": "tahunkeluar"
                    },
                    {
                        "data": "instansi"
                    },
                    {
                        "data": "jabatan"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<a href="javascript:void(0)" data-id="' + data + '" class="btn btn-sm btn-primary btnEditPekerjaan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusPekerjaan" href="javascript:void(0)" data-id="' + data + '"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });
        }

        function reload_table_pekerjaan() {
            $('#tabelpekerjaanpencaker').DataTable().ajax.reload(null, false);
        }

        function reset_form_pekerjaan() {
            $('#formpekerjaanpencaker').each(function() {
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSavePekerjaan').show();
            $('#btnUpdatePekerjaan').addClass("hide");
        }

        function editpekerjaanpencaker(id) {
            $.ajax({
                url: baseURL + "pencaker/get_pekerjaan_by_id/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="tahunmasukkerja"]').val(data.tahunmasuk);
                    $('[name="tahunkeluarkerja"]').val(data.tahunkeluar);
                    $('[name="instansi"]').val(data.instansi);
                    $('[name="jabatan"]').val(data.jabatan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pekerjaan');
                }
            });
        }


        $('#tabelpekerjaanpencaker').on('click', '.btnEditPekerjaan', function() {
            //hide button simpan, show button update
            $('#btnSavePekerjaan').hide();
            $('#btnUpdatePekerjaan').removeClass("hide");
            var idpekerjaan = $(this).attr("data-id");
            //set hidden form untuk Id pendidikan
            $('[name="idpekerjaan"]').val(idpekerjaan);

            editpekerjaanpencaker(idpekerjaan);
        });

        $('#btnSavePekerjaan').click(function() {
            $.ajax({
                url: baseURL + "pencaker/add_pekerjaan",
                type: "POST",
                data: $('#formpekerjaanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pekerjaan();
                        reset_form_pekerjaan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });

        $('#btnUpdatePekerjaan').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update_pekerjaan",
                type: "POST",
                data: $('#formpekerjaanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_pekerjaan();
                        reset_form_pekerjaan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#tabelpekerjaanpencaker').on('click', '.btnHapusPekerjaan', function() {
            var result = confirm("Want to delete?");
            if (result) {
                var idpekerjaan = $(this).attr("data-id");
                $.ajax({
                    url: baseURL + "pencaker/del_pekerjaan_by_id/" + idpekerjaan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            reload_table_pekerjaan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
            }
        });

        function showjabatanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.jabatanpencaker').toggle("display");
            $('.perusahaanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#jabatanpencaker').addClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");

            tabeljabatan = $('#tabeljabatanpencaker').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "order": [
                    [0, 'asc']
                ],
                "ajax": {
                    "url": baseURL + "pencaker/get_jabatan",
                    "type": "POST"
                },
                "deferRender": true,
                "stateSave": true,
                "bDestroy": true,

                "columns": [{
                        "data": "id",
                        "sortable": false,
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        "data": "nama_jabatan"
                    },
                    {
                        "data": "id",
                        "render": function(data, type, row, meta) {
                            return '<a href="javascript:void(0)" data-id="' + data + '" class="btn btn-sm btn-primary btnEditJabatan"><i class="fas fa-edit"></i></a>&nbsp;<a class="btn btn-sm btn-danger btnHapusJabatan" href="javascript:void(0)" data-id="' + data + '"><i class="fas fa-trash"></i></a>';
                        }
                    },
                ],
            });
        }

        function editjabatanpencaker(id) {
            $.ajax({
                url: baseURL + "pencaker/get_jabatan_by_id/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="minat_jabatan"]').val(data.nama_jabatan);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error Get Data Pekerjaan');
                }
            });
        }

        $('#tabeljabatanpencaker').on('click', '.btnEditJabatan', function() {
            //hide button simpan, show button update
            $('#btnSaveJabatan').hide();
            $('#btnUpdateJabatan').removeClass("hide");
            var idjabatan = $(this).attr("data-id");
            //set hidden form untuk Id pendidikan
            $('[name="idjabatan"]').val(idjabatan);

            editjabatanpencaker(idjabatan);
        });

        function reload_table_jabatan() {
            $('#tabeljabatanpencaker').DataTable().ajax.reload(null, false);
        }

        function reset_form_jabatan() {
            $('#formjabatanpencaker').each(function() {
                this.reset();
            });
            //hide button UPDATE, show button SIMPAN
            $('#btnSaveJabatan').show();
            $('#btnUpdateJabatan').addClass("hide");
        }

        $('#btnSaveJabatan').click(function() {
            $.ajax({
                url: baseURL + "pencaker/add_jabatan",
                type: "POST",
                data: $('#formjabatanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_jabatan();
                        reset_form_jabatan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error save data');
                }
            });
        });

        $('#btnUpdateJabatan').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update_jabatan",
                type: "POST",
                data: $('#formjabatanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        reload_table_jabatan();
                        reset_form_jabatan();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#tabeljabatanpencaker').on('click', '.btnHapusJabatan', function() {
            var result = confirm("Want to delete?");
            if (result) {
                var idjabatan = $(this).attr("data-id");
                $.ajax({
                    url: baseURL + "pencaker/del_jabatan_by_id/" + idjabatan,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        if (data.status) {
                            reload_table_jabatan();
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert('Error Delete Data Pendidikan');
                    }
                });
            }
        });

        function showperusahaanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').toggle("display");
            $('.jabatanpencaker').hide();
            $('.datatambahanpencaker').hide();
            $('.bahasapencaker').hide();

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#perusahaanpencaker').addClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').removeClass("active");
        }

        function showdatatambahanpencaker() {
            $('.tujuanpencaker').hide();
            $('.identitaspencaker').hide();
            $('.pendidikanpencaker').hide();
            $('.pekerjaanpencaker').hide();
            $('.perusahaanpencaker').hide();
            $('.jabatanpencaker').hide();
            $('.bahasapencaker').hide();
            $('.datatambahanpencaker').toggle("display");

            $('#tujuanpencaker').removeClass("active");
            $('#identitaspencaker').removeClass("active");
            $('#pekerjaanpencaker').removeClass("active");
            $('#jabatanpencaker').removeClass("active");
            $('#pendidikanpencaker').removeClass("active");
            $('#perusahaanpencaker').removeClass("active");
            $('#bahasapencaker').removeClass("active");
            $('#datatambahanpencaker').addClass("active");
        }

        //Default Get Pencaker data
        $.ajax({
            url: baseURL + "pencaker/get_pencaker",
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                //selected tujuan
                if (data.tujuan == 'tujuan1') {
                    $("#tujuan1").prop("checked", true);
                    $('#perusahaanpencaker').addClass("hide");
                } else if (data.tujuan == 'tujuan2') {
                    $("#tujuan2").prop("checked", true);
                    $('#perusahaanpencaker').removeClass("hide");
                }
                // else {
                //     $('#perusahaanpencaker').addClass("hide");
                // }

                //keterangan umum
                $('[name="nopendaftaran"]').val(data.nopendaftaran);
                $('[name="namalengkap"]').val(data.name);
                $('[name="nik"]').val(data.username);
                $('[name="tgllahir"]').datepicker('setDate', data.tgllahir);

                //selected jenkel
                if (data.jenkel == 'L')
                    $("#jenkel1").prop("checked", true);
                else if (data.jenkel == 'P')
                    $("#jenkel2").prop("checked", true);

                $('[name="tempatlahir"]').val(data.tempatlahir);
                $('[name="tgllahir"]').val(data.tgllahir);
                $('[name="statusnikah"]').val(data.statusnikah).trigger("change");
                $('[name="agama"]').val(data.agama).trigger("change");
                $('[name="tinggibadan"]').val(data.tinggibadan);
                $('[name="beratbadan"]').val(data.beratbadan);
                $('[name="alamat"]').val(data.alamat);
                $('[name="kodepos"]').val(data.kodepos);

                //keterampilan bahasa 
                if (data.bahasa_lainnya != '') {
                    $('[name="txt_bahasa_lainnya"]').val(data.bahasa_lainnya);
                }

                //selected lokasi jabatan
                if (data.lokasi_jabatan == 'DN')
                    $("#lokasijabatan1").prop("checked", true);
                else if (data.lokasi_jabatan == 'LN')
                    $("#lokasijabatan2").prop("checked", true);

                //Perusahaan yang dituju
                $('[name="tujuan_perusahaan"]').val(data.tujuan_perusahaan);

                //Keterangan tambahan
                $('[name="catatan_pengantar"]').val(data.catatan_pengantar);


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error');
            }
        });

        //menu navigasi form
        $('#tujuanpencaker').click(function() {
            showtujuanpencaker();
        });

        $('#identitaspencaker').click(function() {
            showidentitaspencaker();
        });

        $('#pendidikanpencaker').click(function() {
            showpendidikanpencaker();
        });

        $('#bahasapencaker').click(function() {
            showbahasapencaker();
        });

        $('#pekerjaanpencaker').click(function() {
            showpekerjaanpencaker();
        });

        $('#jabatanpencaker').click(function() {
            showjabatanpencaker();
        });

        $('#perusahaanpencaker').click(function() {
            showperusahaanpencaker();
        });

        $('#datatambahanpencaker').click(function() {
            showdatatambahanpencaker();
        });

        $('#btnback1').click(function() {
            showtujuanpencaker();
        });

        $('#btnback2').click(function() {
            showidentitaspencaker();
        });

        $('#btnback3').click(function() {
            showpendidikanpencaker();
        });

        $('#btnback4').click(function() {
            showbahasapencaker();
        });

        $('#btnback5').click(function() {
            showpekerjaanpencaker();
        });

        $('#btnback6').click(function() {
            showjabatanpencaker();
        });

        $('#btnback7').click(function() {
            showperusahaanpencaker();
        });

        //TOMBOL PREV/NEXT

        $('#btnSave1').click(function() {
            // ajax adding data to database
            $.ajax({
                url: baseURL + "pencaker/update1",
                type: "POST",
                data: $('#formtujuanpencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        console.log(data.hasil);
                        showidentitaspencaker();
                        if ($('input[name="tujuan"]:checked').val() == 'tujuan1') {
                            $('#perusahaanpencaker').addClass("hide");
                        } else if ($('input[name="tujuan"]:checked').val() == 'tujuan2') {
                            $('#perusahaanpencaker').removeClass("hide");
                        }
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave2').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update2",
                type: "POST",
                data: $('#formidentitaspencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) {
                        showpendidikanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave3').click(function() {
            showbahasapencaker();
        });

        $('#btnSave4').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update4",
                type: "POST",
                data: $('#formbahasapencaker').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) {
                        showpekerjaanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });

        });

        $('#btnSave5').click(function() {
            showjabatanpencaker();
        });

        $('#btnSave6').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update6",
                type: "POST",
                data: $('#formlokasijabatan').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) {
                        if ($('input[name="tujuan"]:checked').val() == 'tujuan1') {
                            showdatatambahanpencaker();
                        } else if ($('input[name="tujuan"]:checked').val() == 'tujuan2') {
                            showperusahaanpencaker();
                        }
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave7').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update7",
                type: "POST",
                data: $('#formtujuanperusahaan').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) {
                        showdatatambahanpencaker();
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });

        $('#btnSave8').click(function() {
            $.ajax({
                url: baseURL + "pencaker/update8",
                type: "POST",
                data: $('#formcatatanpengantar').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) {
                        window.location.href = 'dashboard/';
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error update data');
                }
            });
        });


        $('.form-validate').validate();

        //Initialize Select2 Elements
        $('.select2').select2()



        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function(html) {
            var switchery = new Switchery(html, {
                size: 'small'
            });
        });

    })

    function previewImage(input, previewDom) {

        if (input.files && input.files[0]) {

            $(previewDom).show();

            var reader = new FileReader();

            reader.onload = function(e) {
                $(previewDom).find('img').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        } else {
            $(previewDom).hide();
        }

    }

    function recaptchKeysHideShow(checked) {

        if (!checked)
            $('.recaptchKeysHideShow').hide(300);
        else
            $('.recaptchKeysHideShow').show(300);

    }

    recaptchKeysHideShow(baseURL1 + 'google_recaptcha_enabled');