<?php 
    include '../koneksi.php';
    $idStem = $_GET['idStem'];
    $query = mysqli_query($koneksi, "SELECT * FROM tb_stem WHERE id = '$idStem'") or die(mysqli_error($koneksi));
    $result = mysqli_fetch_array($query);
?>

<h3>Edit Data Stem</h3>

<button id="backStem" class="btn btn-danger btn-sm my-3">
    <i class="fas fa-fw fa-arrow-left"></i> Kembali
</button>

<div class="card">
    <form id="formEditStem" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="term"><b>Term</b></label>
                <input type="hidden" name="id" id="id" value="<?= $result['id']; ?>">
                <input type="text" name="term" id="term" class="form-control" value="<?= $result['term']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stem"><b>Stem</b></label>
                <input type="text" name="stem" id="stem" class="form-control" value="<?= $result['stem']; ?>" required>
            </div>
            <input type="submit" name="editStem" id="editStem" value="Edit" class="btn btn-primary btn-block">
        </div>
    </form>
</div>