<?php
    session_start();
    include '../koneksi.php';
    if (isset($_POST['submit'])) {
        $old_password = md5($_POST['old_password']);
        $username = $_SESSION['username'];
        $admin_data = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE admin_username = '$username'");
        $admin = mysqli_fetch_array($admin_data);

        if ($old_password == $admin['admin_password']) {
            $new_password = $_POST['new_password'];
            $conf_password = $_POST['conf_password'];

            if ($new_password == $conf_password) {
                $pass = md5($new_password);
                $query = mysqli_query($koneksi, "UPDATE tb_admin SET admin_password = '$pass' WHERE admin_username = '$username'");
                header('location: ganti_password.php?pesan=password_success');
            }
            else {
                header('location: ganti_password.php?pesan=password_not_match');
            }
        }
        else {
            header('location: ganti_password.php?pesan=wrong_old_password');
        }
    }
?>