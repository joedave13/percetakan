<h3>Data Transaksi</h3>

<button id="addTransaksi" class="btn btn-primary btn-sm my-3">
    <i class="fas fa-fw fa-plus"></i> Tambah Data Transaksi
</button>

<div class="card">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="5%">No.</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Pelanggan</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT t.*, p.* FROM tb_transaksi AS t LEFT JOIN tb_pelanggan AS p ON t.transaksi_pelanggan = p.pelanggan_id ORDER BY transaksi_tgl DESC") or die(mysqli_error($koneksi));
                    while($result = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= date('d M Y', strtotime($result['transaksi_tgl'])); ?></td>
                    <td><?= $result['pelanggan_nama']; ?></td>
                    <td>
                        <?php 
                            if ($result['transaksi_status'] == 1) {
                                echo '<span class="badge badge-warning">Diproses</span>';
                            }
                            else if ($result['transaksi_status'] == 2) {
                                echo '<span class="badge badge-success">Selesai</span>';
                            }
                        ?>
                    </td>
                    <td>
                        <button id="detailTransaksi" value="<?= $result['transaksi_id']; ?>"
                            class="btn btn-info btn-sm">
                            <i class="fas fa-fw fa-info"></i>
                        </button>
                        <button id="editTransaksi" value="<?= $result['transaksi_id']; ?>"
                            class="btn btn-warning btn-sm">
                            <i class="fas fa-fw fa-edit"></i>
                        </button>
                        <button id="deleteTransaksi" value="<?= $result['transaksi_id']; ?>"
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