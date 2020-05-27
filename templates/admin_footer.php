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
                        'Success!',
                        data,
                        'success'
                    );
                    loadDataCetakan();
                }
            })
        });
    })

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