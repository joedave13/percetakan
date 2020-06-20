<?php include '../templates/admin_header.php'; ?>
<?php include '../templates/admin_sidebar.php'; ?>


<div class="col-md-9 mb-5">
    <h3>Ganti Password</h3>

    <div class="row">
        <div class="col-md-8">
            <?php 
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'password_success') {
                        echo "<div class='alert alert-dismissible alert-success'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Password berhasil diganti.
                        </div>";
                    }
                    else if($_GET['pesan'] == 'password_not_match') {
                        echo "<div class='alert alert-dismissible alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Password baru tidak sama dengan konfirmasi password!
                        </div>";
                    }
                    else if($_GET['pesan'] == 'wrong_old_password') {
                        echo "<div class='alert alert-dismissible alert-danger'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        Password lama salah!
                        </div>";
                    }
                }
            ?>

            <div class="card">
                <form action="ganti_password_act.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="old_password"><b>Password Lama</b></label>
                            <input type="password" name="old_password" id="old_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="new_password"><b>Password Baru</b></label>
                            <input type="password" name="new_password" id="new_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="conf_password"><b>Konfirmasi Password Baru</b></label>
                            <input type="password" name="conf_password" id="conf_password" class="form-control">
                        </div>
                        <div class="form-check">
                            <label for="show" class="form-form-check-label">
                                <input type="checkbox" onclick="showPassword()" class="form-check-input"> Show Password
                            </label>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-block btn-primary">
                                <i class="fas fa-fw fa-key"></i> Ganti Password
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../templates/admin_footer.php'; ?>