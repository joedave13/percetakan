<h3>Data Pelanggan</h3>

<button id="addPelanggan" class="btn btn-primary my-3">
    <i class="fas fa-fw fa-plus"></i> Tambah Data Pelanggan
</button>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="5%">No.</th>
                    <th>Nama Pelanggan</th>
                    <th>No. HP</th>
                    <th>Email</th>
                    <th width="20%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan") or die(mysqli_error($koneksi));
                    while($result = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $result['pelanggan_nama']; ?></td>
                    <td><?= $result['pelanggan_hp']; ?></td>
                    <td><?= $result['pelanggan_email']; ?></td>
                    <td>
                        <button id="detailPelanggan" value="<?= $result['pelanggan_id']; ?>"
                            class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-info"></i>
                        </button>
                        <button id="editPelanggan" value="<?= $result['pelanggan_id']; ?>"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button id="deletePelanggan" value="<?= $result['pelanggan_id']; ?>"
                            class="btn btn-danger btn-sm">
                            <i class="fas fa-fw fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>