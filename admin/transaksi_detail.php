<?php 
    include '../koneksi.php';
    $idTransaksi = $_GET['idTransaksi'];
    $query = "SELECT * FROM tb_transaksi, tb_pelanggan WHERE transaksi_id = '$idTransaksi' AND transaksi_pelanggan = pelanggan_id";
    $q = mysqli_query($koneksi, $query);
    while($result = mysqli_fetch_array($q)) {
?>

<h3>Detail Data Transaksi</h3>

<button id="backTransaksi" class="btn btn-danger btn-sm my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <div class="card-header">
        <b>Detail Data Transaksi</b>
    </div>
    <div class="card-body">
        <table class="table">
            <tr>
                <td width="20%"><b>Kode Transaksi</b></td>
                <td>TRK - <?= $result['transaksi_id']; ?></td>
            </tr>
            <tr>
                <td width="20%"><b>Tanggal Transaksi</b></td>
                <td><?= date('d M Y', strtotime($result['transaksi_tgl'])); ?></td>
            </tr>
            <tr>
                <td width="20%"><b>Nama Pelanggan</b></td>
                <td><?= $result['pelanggan_nama']; ?></td>
            </tr>
            <tr>
                <td width="20%"><b>Status</b></td>
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
            </tr>
        </table>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <b>Detail Barang</b>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead class="bg-primary text-white">
                <tr>
                    <th width="50%">Nama Barang</th>
                    <th width="15%">Panjang (m)</th>
                    <th width="15%">Lebar (m)</th>
                    <th width="20%">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $id = $result['transaksi_id'];
                    //Tampilkan Detail Barang
                    $query2 = "SELECT * FROM tb_detail_transaksi, tb_cetakan WHERE detail_transaksi = '$id' AND detail_barang = id";
                    $barang = mysqli_query($koneksi, $query2);
                    $total = 0;
                    while($brg = mysqli_fetch_array($barang)){
                ?>
                <tr>
                    <td><?= $brg['nama']; ?></td>
                    <td><?= $brg['detail_panjang']; ?></td>
                    <td><?= $brg['detail_lebar']; ?></td>
                    <td>Rp. <?= number_format($brg['harga'], 0, ',', '.'); ?></td>
                </tr>
                <?php $total += $brg['harga']; } ?>
                <tr>
                    <td colspan="3"><b>Total Harga</b></td>
                    <td><b>Rp. <?= number_format($total, 0, ',', '.'); ?></b></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php } ?>