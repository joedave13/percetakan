<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>

<div class="col-md-9 mb-5">
    <h3>Data Master Chatbot</h3>

    <div class="row mt-3 mb-3">
        <div class="col-md-4">
            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#inputModal">
                <i class="fas fa-fw fa-plus"></i> Tambah Data
            </button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <?php 
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'edit') {
                        echo '<div class="alert alert-warning alert-dismissible fade show text-primary" role="alert">
                        Data berhasil diubah!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                    }
                    else if ($_GET['pesan'] == 'delete') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data berhasil dihapus!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button></div>';
                    }
                }
            ?>
            <table class="table table-striped" id="table-master">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>Data Dokumen</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        include '../koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_dokumen");
                        $no = 1;
                        while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['dokumen']; ?></td>
                        <td>

                            <a href="master_edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-fw fa-edit"></i> Edit
                            </a>
                            <a href="master_delete.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm">
                                <i class="fas fa-fw fa-trash"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Input -->
<div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Data Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="master_input.php">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="data"><b>Data</b></label>
                        <input type="text" name="data" id="data" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary submit-master">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include '../templates/admin_footer.php'; ?>