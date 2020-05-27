<?php 
    include '../koneksi.php';

    switch ($_GET['action']) {
        case 'save':
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];

            $query = mysqli_query($koneksi, "INSERT INTO tb_cetakan VALUES (null, '$nama', '$harga')");
            if ($query) {
                echo "Tambah Data Cetakan Berhasil!";
            }
            else {
                echo "Tambah Data Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;
        
        case 'edit':
            $idCetakan = $_POST['idCetakan'];
            $nama = $_POST['nama'];
            $harga = $_POST['harga'];

            $query = mysqli_query($koneksi, "UPDATE tb_cetakan SET nama = '$nama', harga = '$harga' WHERE id = '$idCetakan'");

            if ($query) {
                echo "Edit Data Cetakan Berhasil!";
            }
            else {
                echo "Edit Data Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;

        case 'delete':
            $idCetakan = $_POST['idCetakan'];
            $query = mysqli_query($koneksi, "DELETE FROM tb_cetakan WHERE id = '$idCetakan'");

            if ($query) {
                echo "Delete Data Cetakan Berhasil!";
            }
            else {
                echo "Delete Data Cetakan Gagal :" . mysqli_error($koneksi);
            }
        break;
    }
?>