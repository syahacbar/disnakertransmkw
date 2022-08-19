function modalVerifikasi(ket_status) {
    Swal.fire({
        title: 'Konfirmasi!',
        text: "Apakah Anda yakin telah melengkapi data profil dan mengunggah semua dokumen yang diperlukan dengan benar?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Ya, Saya Yakin!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: baseURL + "pencaker/update_keterangan_status",
                type: "POST",
                data: {
                    keterangan_status: ket_status
                },
                success: function(data) {
                    var objData = jQuery.parseJSON(data);
                    if (objData.status) {
                        Swal.fire({
                            title: 'Selamat!',
                            text: 'Data Anda telah berhasil dikirim untuk selanjutnya diverifikasi. Silakan menunggu informasi selanjutnya!',
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ya'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        });
                    }
                }
            });


        }
    })
}