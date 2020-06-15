</div>
</div>

<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //Load data
        loadDataCetakan();
        loadDataPelanggan();
        loadDataTransaksi();
        loadDataStem();

        //Load form add cetakan
        $("#contentCetakan").on("click", "#addCetakan", function () {
            $.ajax({
                url: 'cetakan_input.php',
                type: 'get',
                success: function (data) {
                    $('#contentCetakan').html(data);
                }
            })
        });

        //Load form edit cetakan
        $("#contentCetakan").on("click", "#editCetakan", function () {
            let idCetakan = $(this).attr("value");
            $.ajax({
                url: 'cetakan_edit.php',
                type: 'get',
                data: {
                    idCetakan: idCetakan
                },
                success: function (data) {
                    $('#contentCetakan').html(data);
                }
            })
        });

        //Kembali ke halaman daftar cetakan
        $("#contentCetakan").on("click", "#backCetakan", function () {
            loadDataCetakan();
        });

        //Simpan data cetakan
        $("#contentCetakan").on("submit", "#formAddCetakan", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'cetakan_service.php?action=save',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Insert Success!',
                        data,
                        'success'
                    );
                    loadDataCetakan();
                }
            })
        });

        //Edit data cetakan
        $("#contentCetakan").on("submit", "#formEditCetakan", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'cetakan_service.php?action=edit',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Edit Success!',
                        data,
                        'info'
                    );
                    loadDataCetakan();
                }
            })
        });

        //Hapus data cetakan berdasarkan id
        $("#contentCetakan").on("click", "#deleteCetakan", function () {
            Swal.fire({
                title: 'Apa anda yakin?',
                text: "Anda tidak dapat membatalkan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    let idCetakan = $(this).attr("value");
                    $.ajax({
                        url: 'cetakan_service.php?action=delete',
                        type: 'post',
                        data: {
                            idCetakan: idCetakan
                        },
                        success: function (data) {
                            Swal.fire(
                                'Delete Success!',
                                data,
                                'success'
                            );
                            loadDataCetakan();
                        }
                    });
                }
            });
        });

        //Load form add pelanggan
        $("#contentPelanggan").on("click", "#addPelanggan", function () {
            $.ajax({
                url: 'pelanggan_input.php',
                type: 'get',
                success: function (data) {
                    $('#contentPelanggan').html(data);
                }
            });
        });

        //Load form edit pelanggan
        $("#contentPelanggan").on("click", "#editPelanggan", function () {
            let idPelanggan = $(this).attr("value");
            $.ajax({
                url: 'pelanggan_edit.php',
                type: 'get',
                data: {
                    idPelanggan: idPelanggan
                },
                success: function (data) {
                    $('#contentPelanggan').html(data);
                }
            })
        });

        //Kembali ke halaman daftar pelanggan
        $("#contentPelanggan").on("click", "#backPelanggan", function () {
            loadDataPelanggan();
        });

        //Simpan data pelanggan
        $("#contentPelanggan").on("submit", "#formAddPelanggan", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'pelanggan_service.php?action=save',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Insert Success!',
                        data,
                        'success'
                    );
                    loadDataPelanggan();
                }
            })
        });

        //Edit data pelanggan
        $("#contentPelanggan").on("submit", "#formEditPelanggan", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'pelanggan_service.php?action=edit',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Edit Success!',
                        data,
                        'info'
                    );
                    loadDataPelanggan();
                }
            })
        });

        //Hapus data pelanggan berdasarkan id
        $("#contentPelanggan").on("click", "#deletePelanggan", function () {
            Swal.fire({
                title: 'Apa anda yakin?',
                text: "Anda tidak dapat membatalkan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    let idPelanggan = $(this).attr("value");
                    $.ajax({
                        url: 'pelanggan_service.php?action=delete',
                        type: 'post',
                        data: {
                            idPelanggan: idPelanggan
                        },
                        success: function (data) {
                            Swal.fire(
                                'Delete Success!',
                                data,
                                'success'
                            );
                            loadDataPelanggan();
                        }
                    });
                }
            });
        });

        //Load form add transaksi
        $("#contentTransaksi").on("click", "#addTransaksi", function () {
            $.ajax({
                url: 'transaksi_input.php',
                type: 'get',
                success: function (data) {
                    $('#contentTransaksi').html(data);
                    $('.select-pelanggan').select2({
                        theme: 'bootstrap4'
                    });
                    $('.select-barang').select2({
                        theme: 'bootstrap4'
                    });
                }
            });
        });

        var i = 1;

        $("#contentTransaksi").on("click", "#addTransaksiBarang", function () {
            i++;
            $.post('form_detail_barang.php', function (data) {
                $('#tbl_transaksi').append(`<tr>` + data + `</tr>`);
                $('.select-barang').select2({
                    theme: 'bootstrap4'
                });
            })
        });

        //Simpan data transaksi
        $("#contentTransaksi").on("submit", "#formAddCetakan", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'transaksi_service.php?action=save',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Insert Success!',
                        data,
                        'success'
                    );
                    loadDataTransaksi();
                }
            })
        });

        //Kembali ke halaman daftar transaksi
        $("#contentTransaksi").on("click", "#backTransaksi", function () {
            loadDataTransaksi();
        });

        //Tampilkan detail transaksi
        $("#contentTransaksi").on("click", "#detailTransaksi", function () {
            let idTransaksi = $(this).attr("value");
            $.ajax({
                url: 'transaksi_detail.php',
                type: 'get',
                data: {
                    idTransaksi: idTransaksi
                },
                success: function (data) {
                    $('#contentTransaksi').html(data);
                }
            })
        });

        //Load form edit transaksi
        $("#contentTransaksi").on("click", "#editTransaksi", function () {
            let idTransaksi = $(this).attr("value");
            $.ajax({
                url: 'transaksi_edit.php',
                type: 'get',
                data: {
                    idTransaksi: idTransaksi
                },
                success: function (data) {
                    $('#contentTransaksi').html(data);
                    $('.select-pelanggan').select2({
                        theme: 'bootstrap4'
                    });
                    $('.select-barang').select2({
                        theme: 'bootstrap4'
                    });
                }
            })
        });

        //Edit data transaksi
        $("#contentTransaksi").on("submit", "#formEditTransaksi", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'transaksi_service.php?action=edit',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Edit Success!',
                        data,
                        'info'
                    );
                    loadDataTransaksi();
                }
            })
        });

        //Hapus data transaksi berdasarkan id
        $("#contentTransaksi").on("click", "#deleteTransaksi", function () {
            Swal.fire({
                title: 'Apa anda yakin?',
                text: "Anda tidak dapat membatalkan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus'
            }).then((result) => {
                if (result.value) {
                    let idTransaksi = $(this).attr("value");
                    $.ajax({
                        url: 'transaksi_service.php?action=delete',
                        type: 'post',
                        data: {
                            idTransaksi: idTransaksi
                        },
                        success: function (data) {
                            Swal.fire(
                                'Delete Success!',
                                data,
                                'success'
                            );
                            loadDataTransaksi();
                        }
                    });
                }
            });
        });

        //Load Form Tambah Stem Data
        $("#contentStem").on("click", "#addStem", function () {
            $.ajax({
                url: 'stem_input.php',
                type: 'get',
                success: function (data) {
                    $('#contentStem').html(data);
                }
            });
        });

        //Kembali ke daftar stem
        $("#contentStem").on("click", "#backStem", function () {
            loadDataStem();
        });

        //Simpan data stem
        $("#contentStem").on("submit", "#formAddStem", function (e) {
            e.preventDefault();
            $.ajax({
                url: 'stem_service.php?action=save',
                type: 'post',
                data: $(this).serialize(),
                success: function (data) {
                    Swal.fire(
                        'Insert Success!',
                        data,
                        'success'
                    );
                    loadDataStem();
                }
            })
        });
    });

    function loadDataCetakan() {
        $.ajax({
            url: 'data-cetakan.php',
            type: 'get',
            success: function (data) {
                $('#contentCetakan').html(data);
            }
        });
    }

    function loadDataPelanggan() {
        $.ajax({
            url: 'data-pelanggan.php',
            type: 'get',
            success: function (data) {
                $('#contentPelanggan').html(data);
            }
        });
    }

    function loadDataTransaksi() {
        $.ajax({
            url: 'data-transaksi.php',
            type: 'get',
            success: function (data) {
                $('#contentTransaksi').html(data);

            }
        });
    }

    function loadDataStem() {
        $.ajax({
            url: 'data-stem.php',
            type: 'get',
            success: function (data) {
                $('#contentStem').html(data);
            }
        })
    }
</script>

</body>

</html>