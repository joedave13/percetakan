<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_cetakan VALUES (null, '$nama', '$harga')");
            if ($query) {
                echo "Tambah Cetakan Berhasil!";
            }
            else {
                echo "Tambah Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;
        
        case 'edit':
            $idCetakan = $_POST['idCetakan'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];

            $query = mysqli_query($koneksi, "UPDATE tb_cetakan SET nama = '$nama', harga = '$harga' WHERE id = '$idCetakan'");

            if ($query) {
                echo "Edit Cetakan Berhasil!";
            }
            else {
                echo "Edit Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;
    }
?>