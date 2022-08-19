$(document).ready(function() {

    $("#formRegistrasi").validate({
        rules: {
            namalengkap: {
                required: true
            },
            nik: {
                required: true,
                minlength: 16,
                maxlength: 16
            },
            email: {
                required: true,
                email: true
            },
            nohp: {
                required: true
            },
            password: {
                required: true,
                minlength: 6
            },
            password_confirm: {
                required: true,
                minlength: 6,
                equalTo: "#password"
            }
        },

        messages: {
            namalengkap: {
                required: "<span class='text-danger'><small><em>Nama Lengkap Wajib Diisi</em></samll></span>"
            },
            nik: {
                required: "<span class='text-danger'><small><em>NIK Wajib Diisi</em></samll></span>",
                minlength: "<span class='text-danger'><small><em>NIK Minimal 16 Karakter</em></samll></span>",
                maxlength: "<span class='text-danger'><small><em>NIK Maksimal 16 Karakter</em></samll></span>"
            },
            email: {
                required: "<span class='text-danger'><small><em>Email Wajib Diisi</em></samll></span>",
                email: "<span class='text-danger'><small><em>Format Email Salah. Harus mengandung @ dan . Contoh: emailsaya@gmail.com",
            },
            nohp: {
                required: "<span class='text-danger'><small><em>Nomor HP Wajib Diisi</em></samll></span>"
            },
            password: {
                required: "<span class='text-danger'><small><em>Kata Sandi Wajib Diisi</em></samll></span>",
                minlength: "<span class='text-danger'><small><em>Kata sandi minimal 6 karakter</em></samll></span>"
            },
            password_confirm: {
                required: "<span class='text-danger'><small><em>Konfirmasi kata sandi tidak sama. Periksa kembali!</em></samll></span>",
                minlength: "<span class='text-danger'><small><em>Kata sandi minimal 6 karakter</em></samll></span>",
                equalTo: "<span class='text-danger'><small><em>Konfirmasi kata sandi tidak sama. Periksa kembali!</em></samll></span>"
            }
        },

        submitHandler: function(form) {
            $.ajax({
                url: baseURL + "web/account_registration",
                type: "POST",
                data: $('#formRegistrasi').serialize(),
                dataType: "JSON",
                success: function(data) {
                    if (data.status) //if success close modal and reload ajax table
                    {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Anda berhasil melakukan registrasi akun Pencaker',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = baseURL + "login";
                            }
                            return false;
                        })
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            html: data.msg,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        })
                    }

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error registration account');
                }
            });
        }

    });
});