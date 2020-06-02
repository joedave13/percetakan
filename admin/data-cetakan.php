<h3>Data Layanan Cetakan</h3>
<button id="addCetakan" class="btn btn-primary my-3">
    <i class="fas fa-fw fa-plus"></i> Tambah Data Cetakan
</button>
<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="5%">No.</th>
                    <th>Jenis Cetakan</th>
                    <th>Harga</th>
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_cetakan") or die(mysqli_error($koneksi));
                    while($result = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $result['nama']; ?></td>
                    <td>Rp. <?= number_format($result['harga'], 0, ',', '.'); ?></td>
                    <td>
                        <button id="editCetakan" value="<?= $result['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-fw fa-edit"></i> Edit
                        </button>
                        <button id="deleteCetakan" value="<?= $result['id']; ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-fw fa-trash"></i> Delete
                        </button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>