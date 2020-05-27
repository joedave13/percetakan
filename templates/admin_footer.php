</div>
</div>

<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //Load data
        loadDataCetakan();
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