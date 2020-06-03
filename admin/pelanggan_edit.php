<?php 
    include '../koneksi.php';
    $idPelanggan = $_GET['idPelanggan'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE pelanggan_id = '$idPelanggan'") or die(mysqli_error($koneksi));
    $result = mysqli_fetch_array($query);
?>

<h3>Edit Data Pelanggan</h3>

<button id="backPelanggan" class="btn btn-danger my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <form id="formEditPelanggan" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="name"><b>Nama Pelanggan</b></label>
                <input type="hidden" name="id" id="id" value="<?= $result['pelanggan_id']; ?>">
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $result['pelanggan_nama']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="jk"><b>Jenis Kelamin</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Pria"
                        <?php echo ($result['pelanggan_jk'] == 'Pria') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="jk">
                        Pria
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Wanita"
                        <?php echo ($result['pelanggan_jk'] == 'Wanita') ? 'checked' : '' ?>>
                    <label class="form-check-label" for="jk">
                        Wanita
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat"><b>Alamat</b></label>
                <textarea name="alamat" id="alamat" cols="30" rows="3"
                    class="form-control"><?= $result['pelanggan_alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="hp"><b>Nomor HP</b></label>
                <input type="text" name="hp" id="hp" class="form-control" value="<?= $result['pelanggan_hp']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="email"><b>Alamat Email</b></label>
                <input type="text" name="email" id="email" class="form-control"
                    value="<?= $result['pelanggan_email']; ?>" required>
            </div>
            <div class="form-group">
                <input type="submit" name="edit" id="edit" value="Edit" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>
</div>