<h3>Detail Data Pelanggan</h3>

<button id="backPelanggan" class="btn btn-sm btn-danger my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<!-- Get Data Pelanggan -->
<?php 
    include '../koneksi.php';
    $idPelanggan = $_GET['idPelanggan'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE pelanggan_id = '$idPelanggan'") or die(mysqli_error($koneksi));
    $result = mysqli_fetch_array($query);
?>

<div class="card">
    <div class="card-header">
        Data Pelanggan
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td width="30%"><b>Nama Pelanggan</b></td>
                <td><?= $result['pelanggan_nama']; ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Jenis Kelamin</b></td>
                <td><?= $result['pelanggan_jk']; ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Alamat</b></td>
                <td><?= $result['pelanggan_alamat']; ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Nomor HP</b></td>
                <td><?= $result['pelanggan_hp']; ?></td>
            </tr>
            <tr>
                <td width="30%"><b>Alamat Email</b></td>
                <td><?= $result['pelanggan_email']; ?></td>
            </tr>
        </table>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        History Transaksi
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Transaksi ID</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Get Data Transaksi -->
                <?php 
                    $queryTransaksi = mysqli_query($koneksi, "SELECT * FROM tb_transaksi WHERE transaksi_pelanggan = $idPelanggan");
                    while($resultTransaksi = mysqli_fetch_array($queryTransaksi)) {
                ?>
                <tr>
                    <td><?= $resultTransaksi['transaksi_id']; ?></td>
                    <td><?= date('d M Y', strtotime($resultTransaksi['transaksi_tgl'])); ?></td>
                    <td>
                        <?php 
                            if ($resultTransaksi['transaksi_status'] == 1) {
                                echo '<span class="badge badge-warning">Diproses</span>';
                            }
                            else if ($resultTransaksi['transaksi_status'] == 2) {
                                echo '<span class="badge badge-success">Selesai</span>';
                            }
                        ?>
                    </td>
                    <td>
                        <button id="detailTransaksiPelanggan" class="btn btn-sm btn-warning"
                            value="<?= $resultTransaksi['transaksi_id']; ?>">
                            <i class="fas fa-fw fa-info"></i> Detail
                        </button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>