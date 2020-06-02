<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];
            $hp = $_POST['hp'];
            $email = $_POST['email'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_pelanggan VALUES (null, '$nama', '$jk', '$alamat', '$hp', '$email')");
            if ($query) {
                echo "Tambah Data Pelanggan Berhasil!";
            }
            else {
                echo "Tambah Data Pelanggan Gagal :" . mysqli_error($koneksi);
            }
        break;
    }
?>