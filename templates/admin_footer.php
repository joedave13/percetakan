</div>
</div>

<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //Load data
        loadDataCetakan();

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
    });

    function loadDataCetakan() {
        $.ajax({
            url: 'data-cetakan.php',
            type: 'get',
            success: function (data) {
                $('#contentCetakan').html(data);
            }
        })
    }
</script>
</body>

</html>