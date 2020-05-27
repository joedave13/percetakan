<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_cetakan VALUES (null, '$nama', '$harga')");
            if ($query) {
                echo "Tambah Cetakan Berhasil";
            }
            else {
                "Tambah Cetakan Gagal" . mysqli_error($koneksi);
            }
            break;
    }
?>