<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>

<?php 
    include '../koneksi.php';
?>

<div class="col-md-9">
    <h3>Edit Data</h3>

    <div class="card mt-3">
        <div class="card-body">
            <?php 
                $id = $_GET['id'];

                $data = mysqli_query($koneksi, "SELECT * FROM tb_dokumen WHERE id = '$id'");
                while($d = mysqli_fetch_array($data)) {
            ?>
            <form action="master_edit_act.php" method="post">
                <div class="form-group">
                    <label for="id"><b>ID</b></label>
                    <input type="text" name="id_dok" id="id_dok" class="form-control" value="<?= $d['id']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="data"><b>Data</b></label>
                    <input type="text" name="data_dok" id="data_dok" class="form-control" value="<?= $d['dokumen']; ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" name="editButton">
                        <i class="fas fa-fw fa-edit"></i> Edit Data
                    </button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</div>

<?php include '../templates/admin_footer.php'; ?>