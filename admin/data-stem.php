<h3>Data Stem Word</h3>

<button id="addStem" class="btn btn-primary btn-sm my-3">
    <i class="fas fa-fw fa-plus"></i> Tambah Data Stem
</button>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="5%">No.</th>
                    <th width="35%">Term</th>
                    <th width="35%">Stem</th>
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_stem");
                    while($result = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $result['term']; ?></td>
                    <td><?= $result['stem']; ?></td>
                    <td>
                        <button id="editStem" value="<?= $result['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-fw fa-edit"></i> Edit
                        </button>
                        <button id="deleteStem" value="<?= $result['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-fw fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>