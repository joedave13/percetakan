<?php include '../../templates/admin_header.php'; ?>
<?php include '../../templates/admin_sidebar.php'; ?>

<div class="col-md-9">
    <h3>Data Master Chatbot</h3>

    <div class="row mt-3">
        <div class="col-md-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputModal">
                <i class="fas fa-fw fa-plus"></i> Tambah Data
            </button>
        </div>
        <div class="col-md-8">
            <form action="">
                <div class="form-group float-right">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search...">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-sm btn-secondary">
                                <i class="fas fa-fw fa-search"></i> Search
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
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
                        include '../../koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM tb_dokumen");
                        $no = 1;
                        while($d = mysqli_fetch_array($data)) {
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $d['dokumen']; ?></td>
                        <td>
                            <a href="master_update.php?<?= $d['id']; ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-fw fa-edit"></i> Edit
                            </a>
                            <a href="master_delete.php?<?= $d['id']; ?>" class="btn btn-danger btn-sm">
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
            <form method="post" action="master_input.php" class="form-master">
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

<?php include '../../templates/admin_footer.php'; ?>