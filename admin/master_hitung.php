<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>
<?php include 'fungsi.php'; ?>

<div class="col-md-9">
    <h3>Hasil Perhitungan TF-IDF</h3>

    <div class="row mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title text-center">Jumlah Dokumen</h5>
                </div>
                <div class="card-body">
                    <?php buatIndex(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">Bobot Dokumen</div>
                </div>
                <div class="card-body">
                    <?php hitungBobot(); ?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-title text-center">Jumlah Vektor</div>
                </div>
                <div class="card-body">
                    <?php panjangVektor(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row">
            <a href="master_index.php" class="btn btn-danger mb-3">
                Kembali
            </a>
            <button type="button" class="btn btn-info mb-3 mx-2" data-toggle="modal" data-target="#modalVektor">
                Hasil Count Vektor
            </button>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Term</th>
                        <th>Doc-id</th>
                        <th>Count</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../koneksi.php';
                        $i = 1;
                        $result = mysqli_query($koneksi, "SELECT * FROM tb_index ORDER BY id");
                        while($row = mysqli_fetch_array($result)){ 
                    ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row['term']; ?></td>
                        <td><?= $row['id_doc']; ?></td>
                        <td><?= $row['jumlah']; ?></td>
                        <td><?= $row['bobot']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="modalVektor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Panjang Vektor TF-IDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID Dokumen</th>
                                <th>Panjang Vektor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include '../koneksi.php';
                                $result = mysqli_query($koneksi, "SELECT * FROM tb_vektor");
                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <tr>
                                <td><?= $row['doc_id']; ?></td>
                                <td><?= $row['panjang']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include '../templates/admin_footer.php'; ?>