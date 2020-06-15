<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>

<div class="col-md-9">
    <h3>Data Cache Similarity</h3>

    <a href="cache_delete.php" class="btn btn-danger btn-sm my-3">
        <i class="fas fa-fw fa-times"></i> Clear Cache
    </a>

    <table class="table table-striped">
        <thead class="bg-primary text-white">
            <tr>
                <th width="5%">No.</th>
                <th>Query User</th>
                <th>Document</th>
                <th>Nilai Similarity</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                include '../koneksi.php';
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT c.*, d.dokumen FROM tb_cache AS C LEFT JOIN tb_dokumen AS d ON c.doc_id = d.id");
                while($result = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $result['query']; ?></td>
                <td><?= $result['dokumen']; ?></td>
                <td><?= $result['nilai']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include '../templates/admin_footer.php'; ?>