<?php
include '../koneksi.php';
$idTransaksi = $_GET['idTransaksi'];
$query = "SELECT * FROM tb_transaksi, tb_pelanggan WHERE transaksi_id = '$idTransaksi' AND transaksi_pelanggan = pelanggan_id";
$q = mysqli_query($koneksi, $query);
while ($result = mysqli_fetch_array($q)) {
?>

<h3>Edit Data Transaksi</h3>

<button id="backTransaksi" class="btn btn-danger btn-sm my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<form id="formEditTransaksi" method="POST">
    <div class="card col-md-7" style="background-color: #F7F7F7;">
        <div class="card-body">
            <div class="form-group">
                <label for="tgl"><b>Tanggal Transaksi</b></label>
                <input type="hidden" name="transaksi_id" id="transaksi_id" value="<?= $result['transaksi_id']; ?>">
                <input type="date" name="tgl" id="tgl" class="form-control" value="<?= $result['transaksi_tgl']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="pelanggan"><b>Nama Pelanggan</b></label>
                <select name="pelanggan" id="pelanggan" class="form-control select-pelanggan" required>
                    <option value="">--Pilih Pelanggan--</option>
                    <?php
                        include '../koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                    <option <?php if ($data['pelanggan_id'] == $result['transaksi_pelanggan']) {
                                        echo "selected='selected'";
                                    } ?> value="<?= $data['pelanggan_id']; ?>"><?= $data['pelanggan_nama']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>

    <div class="card col-md-12 mt-3" style="background-color: #F7F7F7;">
        <div class="card-body">
            <table class="table table-bordered table-hover" id="tbl_transaksi">
                <thead class="bg-primary text-white">
                    <th width="70%">Barang</th>
                    <th width="15%">Panjang (m)</th>
                    <th width="15%">Lebar (m)</th>
                </thead>
                <tbody>
                    <?php
                        $id = $result['transaksi_id'];
                        $barang = mysqli_query($koneksi, "SELECT * FROM tb_detail_transaksi WHERE detail_transaksi = '$id'");
                        while ($brg = mysqli_fetch_array($barang)) {
                        ?>
                    <tr>
                        <td>
                            <select name="barang[]" class="form-control select-barang" required>
                                <?php
                                        $dataBarang = mysqli_query($koneksi, "SELECT * FROM tb_cetakan");
                                        while ($db = mysqli_fetch_array($dataBarang)) {
                                        ?>
                                <option <?php if ($brg['detail_barang'] == $db['id']) {
                                                        echo "selected='selected'";
                                                    } ?> value="<?= $db['id']; ?>"><?= $db['nama']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="panjang[]" id="panjang[]" class="form-control"
                                value="<?= $brg['detail_panjang']; ?>" required>
                        </td>
                        <td>
                            <input type="number" name="lebar[]" id="lebar[]" class="form-control"
                                value="<?= $brg['detail_lebar']; ?>" required>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <button type="button" name="addTransaksiBarang" id="addTransaksiBarang"
                class="btn btn-info btn-sm float-right">
                <i class="fas fa-fw fa-plus"></i> Tambah Barang
            </button>
        </div>
    </div>

    <div class="form-group alert alert-info mt-3">
        <label for="status"><b>Status</b></label>
        <select name="status" id="status" class="form-control" required>
            <option <?php if ($result['transaksi_status'] == "1") echo "selected='selected'"; ?> value="1">Diproses
            </option>
            <option <?php if ($result['transaksi_status'] == "2") echo "selected='selected'"; ?> value="2">Selesai
            </option>
        </select>
    </div>

    <input type="submit" name="edit" id="edit" value="Edit" class="btn btn-primary btn-block">
</form>
<?php } ?>