<?php 
    include '../koneksi.php';
    $idCetakan = $_GET['idCetakan'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_cetakan WHERE id = '$idCetakan'") or die(mysqli_error($koneksi));
    $result = mysqli_fetch_array($query);
?>

<h3>Edit Layanan Cetakan</h3>

<button id="backCetakan" class="btn btn-danger my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <form id="formEditCetakan" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nama"><b>Nama Layanan</b></label>
                <input type="hidden" name="idCetakan" id="idCetakan" value="<?= $result['id']; ?>">
                <input type="text" name="nama" id="nama" class="form-control" value="<?= $result['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="harga"><b>Harga</b></label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $result['harga']; ?>"
                    required>
            </div>
            <input type="submit" name="edit" id="edit" value="Edit" class="btn btn-primary btn-block">
        </div>
    </form>
</div>