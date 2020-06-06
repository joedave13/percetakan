<h3>Input Transaksi Baru</h3>

<button id="backTransaksi" class="btn btn-danger btn-sm my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<form id="formAddCetakan" method="POST">
    <div class="card col-md-7" style="background-color: #F7F7F7;">
        <div class="card-body">
            <div class="form-group">
                <label for="tgl"><b>Tanggal Transaksi</b></label>
                <input type="date" name="tgl" id="tgl" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="pelanggan"><b>Nama Pelanggan</b></label>
                <select name="pelanggan" id="pelanggan" class="form-control select-pelanggan">
                    <option value="">--Pilih Pelanggan--</option>
                    <?php 
                        include '../koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan");
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <option value="<?= $data['pelanggan_id']; ?>"><?= $data['pelanggan_nama']; ?></option>
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
                    <tr>
                        <td>
                            <select name="barang[]" class="form-control select-barang" required>
                                <?php 
                                    $dataBarang = mysqli_query($koneksi, "SELECT * FROM tb_cetakan");
                                    while($db = mysqli_fetch_array($dataBarang)){
                                ?>
                                <option value="<?= $db['id']; ?>"><?= $db['nama']; ?></option>
                                <?php } ?>
                            </select>
                        </td>
                        <td><input type="number" name="panjang[]" id="panjang[]" class="form-control"></td>
                        <td><input type="number" name="lebar[]" id="lebar[]" class="form-control"></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" name="addTransaksiBarang" id="addTransaksiBarang"
                class="btn btn-info btn-sm float-right">
                <i class="fas fa-fw fa-plus"></i> Tambah Barang
            </button>
            <input type="submit" name="simpanTransaksi" id="simpanTransaksi" value="Tambah Transaksi"
                class="btn btn-block btn-primary float-left mt-3">
        </div>
    </div>
</form>