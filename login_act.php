<?php 
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $data = mysqli_query($koneksi, "SELECT * FROM tb_admin WHERE admin_username = '$username'");
    $cekUsername = mysqli_num_rows($data);

    if ($cekUsername > 0) {
        $dataUser = mysqli_fetch_array($data);
        if ($password == $dataUser['admin_password']) {
            $_SESSION['username'] = $username;
            $_SESSION['nama'] = $dataUser['admin_nama'];
            $_SESSION['status'] = 'logged_in';
            header('location: admin/dashboard.php');
        }
        else {
            header('location: index.php?pesan=wrong_password');
        }
    }
    else {
        header('location: index.php?pesan=no_username');
    }
?>