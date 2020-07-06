<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>

<div class="col-md-9">
    <h3>Data Jawaban Tidak Ketemu</h3>

    <a href="cache_delete.php" class="btn btn-danger btn-sm my-3">
        <i class="fas fa-fw fa-times"></i> Clear Data
    </a>

    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th width="5%">No.</th>
                <th>Query User</th>
                <th>Jawaban</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include '../koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM tb_jawaban_tidak_ketemu ORDER BY jawaban_tanggal DESC");
                while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['jawaban_query']; ?></td>
                <td><?= $data['jawaban_jawaban']; ?></td>
                <td><?= date('d M Y H:i:s', strtotime($data['jawaban_tanggal'])); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include '../templates/admin_footer.php'; ?>